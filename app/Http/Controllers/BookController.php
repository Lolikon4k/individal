<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\buys;

use Illuminate\Http\Request;
use App\Models\method_pays;
use App\Models\type_pays;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class BookController extends Controller
{
    public function info($id)
    {
        $method_pays = method_pays::All();
        $type_pays = type_pays::All();

        $bookInfo = books::with('janrs')->find($id);
        $genreTitles = $bookInfo->janrs->pluck('title')->implode(', ');

        // Проверяем, куплена ли книга пользователем
        $isBought = buys::where('id_user', Auth::id())->where('id_book', $id)->exists();

        return view('moreBook', ['bookInfo' => $bookInfo, 'genreTitles' => $genreTitles, 'method_pays' => $method_pays, 'type_pays' => $type_pays, 'isBought' => $isBought]);
    }
    public function byBook($idBook, $id_methods)
    {
        $user_create = buys::create([
            "id_book" => $idBook,
            "id_user" => Auth::user()->id,
            "id_method_pays" => $id_methods,

        ]);
        return redirect("/")->with("success", "");
    }

    public function downloadBook($idBook)
    {
        $book = books::find($idBook);

            $fileName = $book->bookNameDownload;
            $file = public_path() . '/_img/FileBook/' . $fileName;
            $headers = array(
                'Content-Type: application/pdf',
            );
            return Response::download($file, 'filename.pdf', $headers);
    }
}
