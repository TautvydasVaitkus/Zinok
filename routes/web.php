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

Route::get('/', function() {
    $title = 'Informacinė sistema "ŽINOK"';
    return view('welcome', compact('title'));
});

Route::get('/work', 'App\Http\Controllers\PagesController@work');
Route::get('/feedback', 'App\Http\Controllers\PagesController@feedback');
Route::get('/after','App\Http\Controllers\PagesController@afterSchool');
Route::get('/after/{id}','App\Http\Controllers\PagesController@afterSchoolPage');
Route::get('/Student/After/create','App\Http\Controllers\AfterStudentsController@create');
Route::resource('/Teacher/After','App\Http\Controllers\AftersController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
