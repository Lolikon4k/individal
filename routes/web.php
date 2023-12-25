<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;


Route::get('/', [UserController::class, 'index']);




Route::get('/howToBuy', function () {
    return view('howToBuy');
});

Route::get('/agreement', function () {
    return view('agreement');
});


Route::get('/aboutUs', function () {
    return view('aboutUs');
});




Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/admin', function () {
    return view('admin/admin');
});


Route::get('/moreBook/{id}', [BookController::class, 'info']);
Route::get('/buyBook/{id_book}/{id_methods}', [BookController::class, 'byBook']);
Route::get('/downloadBook/{id_book}', [BookController::class, 'downloadBook']);

// жанры
Route::get('/addJanr', [AdminController::class, 'addJanr']);
Route::get('/getRedactJournal', [AdminController::class, 'getRedactJournal']);
Route::get('/getAddJournal', [AdminController::class, 'getAddJournal']);
Route::post('/AddJournal', [AdminController::class, 'AddJournal']);
Route::post('/redactJanr/{id}', [AdminController::class, 'redactJanr']);
Route::get('/deleteJanr/{id}', [AdminController::class, 'deleteJanr']);

// Издательства
Route::get('/getRedactPublisherPage', [AdminController::class, 'getRedactPublisherPage']);
Route::get('/getAddPublisherPage', [AdminController::class, 'getAddPublisherPage']);
Route::post('/addPublishers', [AdminController::class, 'addPublishers']);
Route::post('/redactPublishers/{id}', [AdminController::class, 'redactPublishers']);
Route::get('/deletePublishers/{id}', [AdminController::class, 'deletePublishers']);

//Оплата
Route::get('/getTypePaysPage', [AdminController::class, 'getTypePaysPage']);
Route::get('/getMethodPaysPage', [AdminController::class, 'getMethodPaysPage']);
Route::post('/addTypePays', [AdminController::class, 'addTypePays']);
Route::post('/redactTypePays/{id}', [AdminController::class, 'redactTypePays']);
Route::get('/deleteTypePays/{id}', [AdminController::class, 'deleteTypePays']);
Route::post('/addMethodPays', [AdminController::class, 'addMethodPays']);

//Книги
Route::get('/getAddBookPage', [AdminController::class, 'getAddBookPage']);
Route::post('/addNewBook', [AdminController::class, 'addNewBook']);
Route::get('/indexFilter/{id_category}', [UserController::class, 'indexFilter']);
Route::get('/redactBook/{id_book}', [AdminController::class, 'redactBook']);
Route::get('/deleteBook/{id_book}', [AdminController::class, 'deleteBook']);

Route::get('/profile', [UserController::class, 'profile']);

Route::get('/settingsProfile', [UserController::class, 'settingsProfile']);
Route::post('/redactProfile', [UserController::class, 'redactProfile']);

Route::get('/profileBuy', [UserController::class, 'profileBuy']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
