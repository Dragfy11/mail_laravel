<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $posts = Post::simplePaginate(7);
    return view('welcome',compact('posts'));
})->name('accueil');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('AdministrationAcces');

Route::get('contact',[ContactController::class,'indexS'])->name('contact');
Route::resource('admin/contact', ContactController::class);
Route::resource('newsletter', NewsletterController::class);
Route::resource('/admin/post', PostController::class);