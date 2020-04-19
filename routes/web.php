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



Route::get('/professor','ProfessorController@index')->name('professor.index');
Route::get('/professor/add','ProfessorController@create')->name('professor.create');
Route::post('professor/add', 'ProfessorController@store')->name('professor.store');
Route::get('professor/{id}/delete','professorController@destroy')->name('professor.destroy');
Route::get('/professor/{id}/show', 'ProfessorController@show')->name('professor.show');
Route::get('/professor/{id}/edit', 'professorController@edit')->name('professor.edit');
Route::PATCH('/professor/{id}/edit','ProfessorController@update')->name('professor.update');



Route::get('/estudante', function () { return view('estudante'); });

Route::get('/curso', function () { return view('curso'); });

Route::get('/curso','CursoController@index')->name('curso.index');
Route::get('/curso/add','CursoController@create')->name('curso.create');
Route::post('/curso/add', 'CursoController@store')->name('curso.store');
Route::get('/curso/delete/{id}','CursoController@destroy')->name('curso.destroy');
Route::get('/curso/{id}/show', 'CursoController@show')->name('curso.show');
Route::get('/curso/{id}/edit', 'CursoController@edit')->name('curso.edit');
Route::PATCH('/curso/{id}/edit','CursoController@update')->name('curso.update');





Route::get('/estudante/add', function () { return view('add_estudante'); });
Route::get('/estudante/edit', function () {  return view('edit_estudante'); });
Route::get('/', function () { return view('login'); });
Route::get('/home', function () { return view('telaPrincipal'); });


