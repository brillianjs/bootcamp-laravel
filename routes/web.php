<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/about', function () {
    return view('about', ['name' => "Jouska Brillian"]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/karyawan', [KaryawanController::class, 'index']);

Route::post('/post', 'App\Http\Controllers\PostController@store');