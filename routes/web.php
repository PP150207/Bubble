<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\UploadImageController::class, "show"])
->name("upload_form");

Route::get('/home',[App\Http\Controllers\UploadImageController::class, "home"])
->name("home");

Route::post('/upload', [App\Http\Controllers\UploadImageController::class, "upload"])
->name("upload_image");

Route::get('/list', [App\Http\Controllers\ImageListController::class, "index"])
->name("image_list");

Route::get('/list/{id}',[App\Http\Controllers\UploadImageController::class, "contentview"]);
