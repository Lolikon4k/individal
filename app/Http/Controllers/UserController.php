<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\books;
use App\Models\janrs;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function indexFilter($id_category)
    {
        $janrs = janrs::All();
        $books = Books::whereHas('janrs', function ($query) use ($id_category) {
            $query->where('id_janr', $id_category);
        })->paginate(5);

        return view('index', ['books' => $books, 'janrs' => $janrs]);
    }
    public function index()
    {
        $janrs = janrs::All();
        $books = books::paginate(5);
        return view('index', ['books' => $books, 'janrs' => $janrs]);
    }

    // профиль
    public function profile()
    {
        return view('ProfileUser/profile');
    }

    public function settingsProfile()
    {
        $userInfo = User::where('id', Auth::user()->id)->first();
        return view('ProfileUser/settginsProfile', ['userInfo' => $userInfo]);
    }
    public function profileBuy()
    {
        $userInfo = User::where('id', Auth::user()->id)->first();
        $bookInfo = DB::table('buys')
            ->join('books', 'buys.id_book', '=', 'books.id')
            ->where('buys.id_user', $userInfo->id)
            ->select('books.*')
            ->get();
        return view('ProfileUser/buyProfile', ['userInfo' => $userInfo, 'bookInfo' => $bookInfo]);
    }

    public function redactProfile(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            "email" => "required|email|unique:users,email," . $id,
            "name" => "required",
            "surname" => "required",
            "login" => "required",
            "birthday" => "required|date|before_or_equal:" . date('Y-m-d', strtotime('-5 years')),
            "phone" => "required|regex:/^(\+)[0-9]{11}$/",
            "banner" => "sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "image" => "sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);
        $user = User::find($id);
        if ($user) {
            $user->email = $request->email;
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->login = $request->login;
            $user->birthday = $request->birthday;
            $user->phone = $request->phone;

            if ($request->has('banner')) {
                $banner = $request->file('banner');
                $bannerName = time() . '.' . $banner->extension();
                $banner->move(public_path('_img/bannerUser'), $bannerName);
                $user->banner = $bannerName;
            }

            if ($request->has('image')) {
                $avatar = $request->file('image');
                $avatarName = time() . '.' . $avatar->extension();
                $avatar->move(public_path('_img/avatarUser'), $avatarName);
                $user->image = $avatarName;
            }
            $user->save();
            return redirect("/settingsProfile");
        }
    }
    // авторизация
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $user = $request->only("email", "password");
        if (
            Auth::attempt([
                "email" => $user["email"],
                "password" => $user["password"]
            ])
        ) {
            return response()->json(["success" => true]);
        } else {
            return response()->json(["errors" => ["email" => ["Неверный логин или пароль!"]]], 422);
        }
    }

    public function download($id)
    {
        $file = public_path() . '/_img/FileBook/1703115885.pdf';
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($file, 'filename.pdf', $headers);
    }

    // регистрация
    public function register(Request $request)
    {
        $request->validate([
            "email" => "required|unique:users|email",
            "name" => "required",
            "surname" => "required",
            "login" => "required|unique:users",
            "birthday" => "required|date|before_or_equal:" . date('Y-m-d', strtotime('-5 years')),
            "phone" => "required|regex:/^(\+)[0-9]{11}$/",
            "password" => "required",
            "confirm_password" => "required|same:password",
        ]);
        $userInfo = $request->all();
        $user_create = User::create([
            "email" => $userInfo["email"],
            "name" => $userInfo["name"],
            "surname" => $userInfo["surname"],
            "login" => $userInfo["login"],
            "birthday" => $userInfo["birthday"],
            "phone" => $userInfo["phone"],
            "password" => Hash::make($userInfo["password"]),
        ]);
        if ($user_create) {
            Auth::login($user_create);
            return redirect("/")->with("success", "");
        } else {
            return redirect()->back()->with("error");
        }
    }

    // выход
    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
