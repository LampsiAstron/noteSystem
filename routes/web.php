<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoteController;
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
Route::controller(RegisterController::class)->group(function(){
    Route::get('register','index');
    Route::post('register','store');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index');
    Route::post('login','retrieve');
});

Route::controller(NoteController::class)->group(function(){
    Route::get('notes','index');
    Route::get('addnote','create');
    Route::post('addnote','store');
    Route::get('edit/{id}','edit');
    Route::post('edit/{id}','update');
    Route::get('delete/{id}','destroy');
    Route::get('viewProfile','viewProfile');
    Route::post('viewProfile','updateProfile');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('admin/index','index');
});
