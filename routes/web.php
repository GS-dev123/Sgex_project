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


Route::get('/', function () {
    return view('curso');
});
Route::get('/', function () {
    return view('estudante');
});
Route::get('/', function () {
    return view('professor');
});
Route::get('/', function () {
    return view('add_curso');
});
Route::get('/', function () {
    return view('add_estudante');
});
Route::get('/', function () {
    return view('telaPrincipal');
});
Route::get('/', function () {
    return view('login');
});
Route::get('/', function () {
    return view('add_professor');
});
