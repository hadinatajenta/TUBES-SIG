<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarkerController;
use App\Http\Controllers\MapController;
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

Auth::routes();


//Dashboard Admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

//Insert marker (Index)
Route::get('/tambah', [App\Http\Controllers\MarkerController::class, 'index'])->name('tambah'); 

//Insert marker (Store)
Route::post('/tambah', [App\Http\Controllers\MarkerController::class, 'store'])->name('tambah.store'); 

//Edit marker
Route::get('/editMaker/{id}', [App\Http\Controllers\MarkerController::class, 'edit'])->name('edit.edit');//edit

//Update marker
Route::put('/editMaker/{id}', [App\Http\Controllers\MarkerController::class, 'update'])->name('edit.update');//update

//Delete marker
Route::delete('/hapus/{id}', [MarkerController::class, 'destroy'])->name('home.destroy');//hapus//update

//Search marker
Route::get('/search', [App\Http\Controllers\MarkerController::class, 'search'])->name('search'); //search

//Home Page
Route::get('/', [App\Http\Controllers\MapController::class, 'index'])->name('/');


Route::get('/json', [App\Http\Controllers\MapController::class, 'json'])->name('json'); //json

//Content Page
Route::get('/content', [App\Http\Controllers\ArticleController::class, 'index'])->name('content');

//Add Article
Route::get('/tambah-artikel', [App\Http\Controllers\ArticleController::class, 'addArticle'])->name('addArticle');

//Store Article
Route::post('/tambah-artikel', [App\Http\Controllers\ArticleController::class, 'store'])->name('addArticle.store');

//Delete Article
Route::delete('/hapus-artikel/{id}', [App\Http\Controllers\ArticleController::class, 'destroy'])->name('content.destroy');

//Update Article
Route::get('/edit-artikel/{id}', [App\Http\Controllers\ArticleController::class, 'edit'])->name('content.edit');

//Update Article
Route::put('/edit-artikel/{id}', [App\Http\Controllers\ArticleController::class, 'update'])->name('content.update');

//Detail Article
Route::get('/detail-artikel/{id}', [App\Http\Controllers\ArticleController::class, 'show'])->name('content.detail');

//Serach Article
Route::get('/search-article', [App\Http\Controllers\ArticleController::class, 'search'])->name('search-article');

//Artikel Informasi kesehatan
Route::get('/informasi-kesehatan', [App\Http\Controllers\ArticleController::class, 'informasi'])->name('informasi');

//Rumah sakit
Route::get('/rumah-sakit', [App\Http\Controllers\MarkerController::class, 'bangunan'])->name('bangunan');

//Detail Rumah Sakit
Route::get('/informasi-rumah-sakit/{id}', [App\Http\Controllers\MarkerController::class, 'show'])->name('informasi-rumah-sakit.show'); //search


//User setting
Route::get('/settings/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('setting');
Route::put('/settings/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('setting.update');