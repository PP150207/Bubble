<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\ImageListController;
use App\Http\Controllers\ContentController;

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

Route::get('/',[ImageListController::class, "home"])
->name("home");

Route::get('/upload',[UploadImageController::class, "upload"])
->name("upload");

// Route::post('/upload', [UploadImageController::class, "upload"])
// ->name("upload_image");

// 画像の保存方法をstorage配下->encodeしてDBに変更

Route::post('/encode', [UploadImageController::class, "encode"])
->name("encode");

// Route::get('/list', [ImageListController::class, "index"])
// ->name("image_list");

Route::get('/list/{id}',[UploadImageController::class, "contentview"])
->name('contents_view');

Route::post('/delete', [ContentController::class, "delete"])
->name('delete');

Route::post('/editcontens', [ContentController::class, "edit_contents"])
->name('edit_contents');

Route::get('/edit/{created_at}', [ContentController::class, "edit"])
->name('edit');

Route::get('/my',[UploadImageController::class, "my"])
->name("my");


