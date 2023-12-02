<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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
Route::post('/login', [LoginController::class, 'verifyUser'])->name('login.verifyUser');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');


Route::middleware('userSess')->group(function () {

    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/bedSpaceList', [ProductController::class, 'bedSpaceList'])->name('product.bedSpaceList');

    Route::get('/admin/addBedSpace', [ProductController::class, 'addBedSpace'])->name('product.addBedSpace');
    Route::post('/admin/addBedSpace', [ProductController::class, 'insertBedSpace'])->name('product.insertBedSpace');

    Route::get('/admin/editBedSpace/{id}', [ProductController::class, 'editBedSpace'])->name('product.editBedSpace');
    Route::post('/admin/editBedSpace/{id}', [ProductController::class, 'updateBedSpace'])->name('product.updateBedSpace');

    Route::get('/admin/deleteBedSpace/{id}', [ProductController::class, 'deleteBedSpace'])->name('product.deleteBedSpace');



    Route::get('/admin/roomList', [ProductController::class, 'roomList'])->name('product.roomList');

    Route::get('/admin/addRoom', [ProductController::class, 'addRoom'])->name('product.addRoom');
    Route::post('/admin/addRoom', [ProductController::class, 'insertRoom'])->name('product.insertRoom');

    Route::get('/admin/editRoom/{id}', [ProductController::class, 'editRoom'])->name('product.editRoom');
    Route::post('/admin/editRoom/{id}', [ProductController::class, 'updateRoom'])->name('product.updateRoom');

    Route::get('/admin/deleteRoom/{id}', [ProductController::class, 'deleteRoom'])->name('product.deleteRoom');



    Route::get('/admin/flatList', [ProductController::class, 'flatList'])->name('product.flatList');

    Route::get('/admin/addFlat', [ProductController::class, 'addFlat'])->name('product.addFlat');
    Route::post('/admin/addFlat', [ProductController::class, 'insertFlat'])->name('product.insertFlat');

    Route::get('/admin/editFlat/{id}', [ProductController::class, 'editFlat'])->name('product.editFlat');
    Route::post('/admin/editFlat/{id}', [ProductController::class, 'updateFlat'])->name('product.updateFlat');

    Route::get('/admin/deleteFlat/{id}', [ProductController::class, 'deleteFlat'])->name('product.deleteFlat');
});
