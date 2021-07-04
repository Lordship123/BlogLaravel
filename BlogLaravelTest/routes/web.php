<?php

use App\Http\Controllers\LoginController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\PrivateController;

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

Route::get('/', [BlogController::class, 'index']);
Route::get('/category/{slug}', [BlogController::class, 'getPostByCategory'])->name('getPostByCategory');
Route::get('/category/{slug_category}/{slug_post}', [BlogController::class, 'getPost'])->name('getPost');
Route::get('/private/delete/{slug_post}', [PrivateController::class, 'deletePost'])->name('deletePost');
Route::post('/private/edit/{slug_post}', [PrivateController::class, 'editPost'])->name('editPost');
Route::post('/private/add', [PrivateController::class, 'addPost'])->name('addPost');

Route::get('/private/add', [PrivateController::class, 'addPostPage'])->name('addPostPage');

Route::name('user.')->group(function (){

    Route::get('/private', [PrivateController::class, 'index'])->middleware('auth')->name('private');

    //Login
    Route::get('/login', function (){
        return view('login');
    })->middleware('guest')->name('login');

    Route::post('/login', [LoginController::class, 'login']);

    //registration
    Route::get('/register', function (){
            return view('registration');

    })->middleware('guest')->name('registration');

    Route::post('/register', [RegisterController::class, 'save']);

    //logout
    Route::get('/logout', function (){
            Auth::logout();
            return redirect('/');
    })->name('logout');
});
