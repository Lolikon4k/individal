<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\janrs;
use App\Models\janrs_to_books;

use App\Models\publishers;
use App\Models\type_pays;
use App\Models\method_pays;
use App\Models\books;
use App\Models\buys;

class AdminController extends Controller
{


    public function getRedactJournal()
    {
        $janrs = janrs::paginate(5);
        return view('admin/redactJournal', ['janrs' => $janrs]);
    }
    public function getAddJournal()
    {
        return view('admin/addJournal');
    }

    public function getAddPublisherPage()
    {
        return view('admin/addPublisher');

    }
    public function getRedactPublisherPage()
    {
        $publishers = publishers::paginate(5);
        return view('admin/redactPublisher', ['publishers' => $publishers]);
    }
    public function getAddBookPage()
    {
        $janrs = janrs::All();
        $publishers = publishers::All();

        return view('admin/addBook', ['janrs' => $janrs, 'publishers' => $publishers]);
    }

    public function getTypePaysPage()
    {
        $type_pays = type_pays::paginate(5);
        return view('admin/typePays', ['type_pays' => $type_pays]);
    }

    public function getMethodPaysPage()
    {
        $method_pays = method_pays::paginate(5);
        $type_pays = type_pays::All();
        return view('admin/methodPays', ['method_pays' => $method_pays, 'type_pays' => $type_pays]);
    }

    public function addMethodPays(Request $request)
    {

        $request->validate([
            "nameMethods" => "required",
            "type_pays" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $methodPay = new method_pays;
        $methodPay->title = $request->nameMethods;
        $methodPay->id_typePay = $request->type_pays;

        if ($request->has('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('_img/methodPays'), $imageName);
            $methodPay->imgPay = $imageName;
        }

        $methodPay->save(); // сохраняем данные
        return redirect("/admin")->with("success", "");
    }

    public function addTypePays(Request $request)
    {
        $request->validate([
            "name" => "required|alpha",
        ]);
        $create_type_pays = $request->all();
        $create_type_pays = type_pays::create([
            "title" => $create_type_pays["name"],
        ]);
        return redirect("/admin")->with("success", "");
    }

    public function redactTypePays(Request $request, $id)
    {
        $request->validate([
            "name" => "required|alpha",
        ]);
        $confirm = type_pays::find($id);
        $confirm->title = $request->name;
        $confirm->save();
        return redirect("/admin")->with("success", "");
    }
    public function deleteTypePays(Request $request, $id)
    {
        $confirm = type_pays::find($id);
        $confirm->delete();
        return redirect("/admin")->with("success", "");
    }


    public function addPublishers(Request $request)
    {
        $request->validate([
            "name" => "required|alpha",
        ]);
        $create_publishers = $request->all();
        if ($create_publishers) {
            $create_publishers = publishers::create([
                "title" => $create_publishers["name"],
            ]);
        } else {
            return response()->json(["errors" => ["name" => ["Неверное название!"]]], 422);
        }
        return response()->json(["success" => true]);
    }

    public function redactPublishers(Request $request, $id)
    {
        $request->validate([
            "name" => "required|alpha",
        ]);
        $confirm = publishers::find($id);
        $confirm->title = $request->name;
        $confirm->save();
        return redirect("/admin")->with("success", "");
    }

    public function deletePublishers(Request $request, $id)
    {
        $confirm = publishers::find($id);
        $confirm->delete();
        return redirect("/admin")->with("success", "");
    }

    public function addJournal(Request $request)
    {
        $request->validate([
            "name" => "required|alpha",
        ]);
        $create_journal = $request->all();
        if ($create_journal) {
            $create_journal = janrs::create([
                "title" => $create_journal["name"],
            ]);
        } else {
            return response()->json(["errors" => ["name" => ["Неверное название!"]]], 422);
        }

        return response()->json(["success" => true]);

    }

    public function redactJanr(Request $request, $id)
    {
        $request->validate([
            "name" => "required|alpha",
        ]);
        $confirm = janrs::find($id);
        $confirm->title = $request->name;
        $confirm->save();
        return redirect("/admin")->with("success", "");
    }
    public function deleteJanr($id)
    {
        $confirm = janrs::find($id);
        $confirm->delete();
        return redirect("/admin")->with("success", "");
    }

    public function addNewBook(Request $request)
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "author" => "required",
            "YearPublishing" => "required|date",
            "contPages" => "required|numeric",
            "imageBook" => "required|image",
            "bookNameDownload" => "required|file",
            "id_publisher" => "required",
            "cost" => "required|numeric",
        ]);

        $request = $request->all();
        if ($request) {

            $book_info = new books;
            $book_info->name = $request->name;
            $book_info->description = $request->description;
            $book_info->author = $request->author;
            $book_info->YearPublishing = $request->YearPublishing;
            $book_info->contPages = $request->contPages;
            $book_info->id_publisher = $request->id_publisher;
            $book_info->cost = $request->cost;

            if ($request->has('imageBook')) {
                $image = $request->file('imageBook');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('_img/ImageBook'), $imageName);
                $book_info->imageBook = $imageName;
            }

            if ($request->has('bookNameDownload')) {
                $book_file = $request->file('bookNameDownload');
                $bookFileName = time() . '.' . $book_file->extension();
                $book_file->move(public_path('_img/FileBook'), $bookFileName);
                $book_info->bookNameDownload = $bookFileName;
            }
            $book_info->save();
            $selectedGenres = $request->input('genres');
            foreach ($selectedGenres as $genreId) {
                $janrsToBook = new janrs_to_books;
                $janrsToBook->id_book = $book_info->id;
                $janrsToBook->id_janr = $genreId;
                $janrsToBook->save();
            }
        } else {
            return response()->json(["errors" => ["description" => ["Неверное название!"]]], 422);
        }
        return response()->json(["success" => true]);
    }

    public function redactBook($id)
    {
        $books = books::find($id);
        $janrs = janrs::All();
        $publishers = publishers::All();
        $janrs_to_books = janrs_to_books::where('id_book', $id)->get();
        return view('admin/redactBook', ['janrs' => $janrs, 'publishers' => $publishers, 'books' => $books, 'janrs_to_books' => $janrs_to_books]);
    }

    public function redactBookForm(Request $request, $id)
    {

        $request->validate([
            "name" => "required",
            "description" => "required",
            "author" => "required",
            "YearPublishing" => "required|date",
            "contPages" => "required|numeric",
            "id_publisher" => "required",
            "cost" => "required|numeric",
        ]);

        $book_info = books::find($id);
        if ($book_info) {
            $book_info->name = $request->name;
            $book_info->description = $request->description;
            $book_info->author = $request->author;
            $book_info->YearPublishing = $request->YearPublishing;
            $book_info->contPages = $request->contPages;
            $book_info->id_publisher = $request->id_publisher;
            $book_info->cost = $request->cost;

            if ($request->has('imageBook')) {
                $image = $request->file('imageBook');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('_img/ImageBook'), $imageName);
                $book_info->imageBook = $imageName;
            }

            if ($request->has('bookNameDownload')) {
                $book_file = $request->file('bookNameDownload');
                $bookFileName = time() . '.' . $book_file->extension();
                $book_file->move(public_path('_img/FileBook'), $bookFileName);
                $book_info->bookNameDownload = $bookFileName;
            }
            $book_info->save();
            $selectedGenres = $request->input('genres');
            foreach ($selectedGenres as $genreId) {
                $janrsToBook = new janrs_to_books;
                $janrsToBook->id_book = $book_info->id;
                $janrsToBook->id_janr = $genreId;
                $janrsToBook->save();
            }
        } else {
            return response()->json(["errors" => ["description" => ["Неверное название!"]]], 422);
        }
        return response()->json(["success" => true]);
    }

    public function deleteBook($id){ 
        $book_buys = buys::where('id_book', $id)->get(); 
        foreach ($book_buys as $buy) {
            $buy->delete();
        }

        $janrs = janrs_to_books::where('id_book', $id)->get(); 
        foreach ($janrs as $buy) {
            $buy->delete();
        }

        $book = books::find($id); 
        $book->delete(); 
        return redirect('/'); 
    }
}
