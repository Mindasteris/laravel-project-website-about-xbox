<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ContactController;
use App\Models\Community;
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
// Home Page
Route::get('/', function () {
    return view('welcome');
});

// Product Page 
Route::view('/products', 'products');

// About Page
Route::view('/about', 'about');

// Community Page
Route::get('/community', [CommunityController::class, 'create']);
Route::post('/community', [CommunityController::class, 'store'])->name('community');
Route::get('/community', [CommunityController::class, 'index']);

// Contact Page
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact');

// Edit Comment Form
Route::get('/community/edit/comment/{id}', [CommunityController::class, 'edit'])->name('edit');

// Update and Post Comment
Route::post('/community/updated/{id}', [CommunityController::class, 'update'])->name('update-post');

// Delete Comment
Route::get('/community/delete/comment/{id}', [CommunityController::class, 'destroy'])->name('delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');