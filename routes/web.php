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


Route::get('/estudante', function () { return view('estudante'); });

<<<<<<< HEAD
Route::get('/curso', function () { return view('curso'); });
=======
Route::get('/estudante', function () {
    return view('estudante');
});

>>>>>>> 55f4bf6b32ede8ff5a1e56b5ed26f88a8972999a

Route::get('/curso','CursoController@index')->name('curso.index');
Route::get('/curso/add','CursoController@create')->name('curso.create');
Route::post('/curso/add', 'CursoController@store')->name('curso.store');
Route::get('/curso/{id}','CursoController@destroy')->name('curso.destroy');

Route::get('/professor','professorController@index')->name('professor.index');
Route::get('/professor/add','professorController@create')->name('professor.create');
Route::post('professor', 'professorController@store')->name('professor.store');
Route::post('professor/{id}', 'professorController@show')->name('professor.show');
Route::post('professor/{id}', 'professorController@edit')->name('professor.edit');
Route::get('/professor/{id}','professorController@destroy')->name('professor.destroy');
Route::patch('/professor/{id}','professorController@update')->name('professor.update');




<<<<<<< HEAD

/*Route::resource('professor','ProfessorController');*/
Route::get('/professor','ProfessorController@index')->name('professor.index');
Route::get('/professor/add','ProfessorController@create')->name('professor.create');
Route::post('/professor/add','ProfessorController@store')->name('professor.store');
Route::get('/professor/{id}','ProfessorController@destroy')->name('professor.destroy');
Route::get('/professor/{id}/edit','ProfessorController@edit')->name('professor.edit');
Route::post('/professor/{id}/edit','ProfessorController@update')->name('professor.update');


Route::get('/estudante/add', function () { return view('add_estudante'); });
Route::get('/estudante/edit', function () {  return view('edit_estudante'); });
Route::get('/curso/edit', function () {  return view('edit_curso'); });
Route::get('/', function () { return view('login'); });
Route::get('/home', function () { return view('telaPrincipal'); });
=======
Route::get('/', function () {
    return view('login');
});
Route::get('/', function () {
    return view('telaPrincipal');
});
>>>>>>> 55f4bf6b32ede8ff5a1e56b5ed26f88a8972999a
