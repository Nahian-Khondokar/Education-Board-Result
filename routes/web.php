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
    return view('welcome');
});

Route::post('result_store', 'App\Http\Controllers\StudentController@resultStore');
Route::get('result', 'App\Http\Controllers\StudentController@result');

Route::post('result_check', 'App\Http\Controllers\StudentController@resultCheck');


