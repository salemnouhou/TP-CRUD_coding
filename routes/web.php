<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/contact', function () {
//     return view('welcome');
// });


Route::get('/home',[PostController::class,'home']);

Route::get('/create-form',[PostController::class,'createForm'])->name('create-form');

Route::post('/createprocess',[PostController::class,'createprocess'])->name('createprocess');


Route::get('/show-post/{id}',[PostController::class,'show'])->name('show-post');

Route::post('/update-post/{id}',[PostController::class,'update'])->name('update-post');

Route::get('/delete/{id}',[PostController::class,'delete'])->name('delete-post');




