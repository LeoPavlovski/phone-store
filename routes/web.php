<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\RoleController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])->name("list-categories");
Route::get('/category/add',[CategoryController::class,'create'])->name("create-category");
Route::post('/category/add',[CategoryController::class,'store'])->name('add-category');
Route::get('/category/show/{category}',[CategoryController::class,'show'])->name("show-category");
Route::get('/category/{category}/edit',[CategoryController::class,'edit'])->name("edit-category");
Route::put('category/update/{category}',[CategoryController::class, 'update'])->name('update-category');
Route::delete('category/delete/{category}',[CategoryController::class,'destroy'])->name('delete-category');


Route::get('/roles', [RoleController::class, 'index'])->name('list-roles');
Route::get('/role/add',[RoleController::class,'create'])->name('create-role');
Route::post('/role/add',[RoleController::class,'store'])->name('add-role');
Route::get('/role/show/{role}',[RoleController::class,'show'])->name('show-role');
Route::get('/role/{role}/edit',[RoleController::class,'edit'])->name('edit-item');
Route::put('role/update/{role}',[RoleController::class, 'update'])->name('update-role');
Route::delete('/role/delete/{role}',[RoleController::class,'destroy'])->name('delete-role');


Route::get('/orders', [OrderController::class, 'index'])->name('list-orders');
Route::get('/order/add',[OrderController::class,'create'])->name('create-order');
Route::post('/order/add',[OrderController::class,'store'])->name('add-order');
Route::get('/order/show/{uuid}',[OrderController::class,'show'])->name('show-order');
Route::delete('/order/delete/{order}',[OrderController::class,'destroy'])->name('delete-record');



Route::get('/phones',[PhoneController::class,'index'])->name('list-phones');
Route::get('/phone/add',[PhoneController::class,'create'])->name('create-phone');
Route::post('/phone/add',[PhoneController::class,'store'])->name('add-phone');
Route::get('/phone/show/{phone}',[PhoneController::class,'show'])->name('show-phone');
Route::get('/phone/edit/{phone}',[PhoneController::class,'edit'])->name('edit-phone');
Route::put('/phone/update/{phone}',[PhoneController::class,'update'])->name('update-phone');
Route::delete('/phone/delete/{phone}',[PhoneController::class,'destroy'])->name('delete-phone');


Route::get('/users',[UserController::class,'index'])->name('list-users');
Route::get('/user/add',[UserController::class,'create'])->name('add-user');
Route::post('/user/add',[UserController::class,'store'])->name('create-user');
Route::get('/user/show/{user}',[UserController::class,'show'])->name('show-user');
Route::get('/user/edit/{user}',[UserController::class,'edit'])->name('edit-user');
Route::put('/user/update/{user}',[UserController::class,'update'])->name('update-user');
Route::delete('/user/delete/{user}',[UserController::class,'destroy'])->name('delete-user');

    
