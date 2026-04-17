<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/addUser', [UserController::class, 'addNewUser']);

Route::get('/addUser', function () {
    return view('addUser');
});

Route::get('/datatest', [UserController::class, 'testData']);

// Route::get('users/{username}', [UserController::class, 'index']);

Route::view('/about', 'about');
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{username}', function ($username) {
    return view('welcome', ['username' => $username]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
