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
Route::post('professor', 'ProfessorController@store')->name('professor.store');
Route::get('professor/add/{id}','professorController@destroy')->name('professor.destroy');
Route::get('/professor/{id}', 'ProfessorController@show')->name('professor.show');
Route::get('edit_professor/{id}', 'professorController@edit')->name('professor.edit');
Route::PATCH('/professor/{id}','ProfessorController@update')->name('professor.update');



Route::get('/estudante', function () { return view('estudante'); });

Route::get('/curso', function () { return view('curso'); });

Route::get('/curso','CursoController@index')->name('curso.index');
Route::get('/curso/add','CursoController@create')->name('curso.create');
Route::post('/curso/add', 'CursoController@store')->name('curso.store');
Route::get('/curso/{id}','CursoController@destroy')->name('curso.destroy');
Route::get('/curso/{id}', 'CursoController@show')->name('curso.show');
Route::get('edit_curso/{id}', 'CursoController@edit')->name('curso.edit');
Route::PATCH('/curso/{id}','CursoController@update')->name('curso.update');





Route::get('/estudante/add', function () { return view('add_estudante'); });
Route::get('/estudante/edit', function () {  return view('edit_estudante'); });
Route::get('/', function () { return view('login'); });
Route::get('/home', function () { return view('telaPrincipal'); });


