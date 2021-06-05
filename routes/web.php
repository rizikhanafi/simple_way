<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/create', [App\Http\Controllers\CreateController::class, 'create'])->name('creates');
Route::get('/home/edit/{id}', [App\Http\Controllers\CreateController::class, 'edit']);
Route::post('/home/edit/update', [App\Http\Controllers\CreateController::class, 'update'])->name('updates');
Route::get('/home/delete/{id}', [App\Http\Controllers\CreateController::class, 'delete'])->name('deletes');
Route::get('/liat', [App\Http\Controllers\CreateController::class, 'liatt'])->name('liats');
Route::get('/liats', [App\Http\Controllers\CreateController::class, 'liat_edit'])->name('liat_edits');
