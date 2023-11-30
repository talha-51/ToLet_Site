<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/bedSpace', [HomeController::class, 'bedSpace'])->name('home.bedSpace');
Route::get('/room', [HomeController::class, 'room'])->name('home.room');
Route::get('/flat', [HomeController::class, 'flat'])->name('home.flat');


Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.index');
