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

use App\Http\Controllers\Home;

Route::get('/', [Home::class, 'homeTemplate']);

Route::get('/cadastro', [Home::class, 'cadastro']);


Route::get('/welcome', function () {
    return view('welcome');
});





