<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Models\Album;
use App\Models\Photo;
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
    $photo = Photo::all();
    return view('pages.home', compact('photo'));
});

Route::resource("/photos", PhotoController::class);

Route::resource('/albums', AlbumController::class);

Route::get('/album', function () {
    $album = Album::all();
    return view('auteur.home', compact('album'));
});
