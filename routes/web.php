<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::group([ 'middleware' => 'auth'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/professor','ProfessorController@index')->name('professor.index');
    Route::get('/professor/add','ProfessorController@create')->name('professor.create');
    Route::post('professor/add', 'ProfessorController@store')->name('professor.store');
    Route::get('professor/{id}/delete','professorController@destroy')->name('professor.destroy');
    Route::get('/professor/{id}/show', 'ProfessorController@show')->name('professor.show');
    Route::get('/professor/{id}/edit', 'professorController@edit')->name('professor.edit');
    Route::PATCH('/professor/{id}/edit','ProfessorController@update')->name('professor.update');
    
    
    
    
    
    Route::get('/curso','CursoController@index')->name('curso.index');
    Route::get('/curso/add','CursoController@create')->name('curso.create');
    Route::post('/curso/add', 'CursoController@store')->name('curso.store');
    Route::get('/curso/{id}/delete','CursoController@destroy')->name('curso.destroy');
    Route::get('/curso/{id}/show', 'CursoController@show')->name('curso.show');
    Route::get('/curso/{id}/edit', 'CursoController@edit')->name('curso.edit');
    Route::PATCH('/curso/{id}/edit','CursoController@update')->name('curso.update');
    
    
    
    
    Route::get('/estudante','EstudanteController@index')->name('estudante.index');
    Route::get('/estudante/add','EstudanteController@create')->name('estudante.create');
    Route::post('/estudante/add','EstudanteController@store')->name('estudante.store');
    Route::get('/estudante/{id}/show', 'EstudanteController@show')->name('estudante.show');
    Route::get('/estudante/{id}/edit','EstudanteController@edit')->name('estudante.edit');
    Route::PATCH('/estudante/{id}/edit','EstudanteController@update')->name('estudante.update');
    Route::get('/estudante/{id}/delete','EstudanteController@destroy')->name('estudante.destroy');  

    Route::get('/logout', 'HomeController@logout')->name('logout');
});

