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



Route::get('/estudante', function () {
    return view('estudante');
});
Route::get('/professor', function () {
    return view('professor');
});

Route::get('/curso','CursoController@index')->name('curso.index');
Route::get('/curso/add','CursoController@create')->name('curso.create');
Route::post('/curso/add', 'CursoController@store')->name('curso.store');
Route::get('/curso/{id}','CursoController@destroy')->name('curso.destroy');


Route::get('/estudante/add', function () {
    return view('add_estudante');
});

Route::get('/', function () {
    return view('login');
});
Route::get('/professor/add', function () {
    return view('add_professor');
});
Route::get('/', function () {
    return view('telaPrincipal');
});