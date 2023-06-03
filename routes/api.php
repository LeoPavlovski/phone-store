<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\PhoneController;
use App\Http\Controllers\Api\RolesController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Ako ne e logiran
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// I nacin
Route::get('/listRoles', [RolesController::class, 'index']);
Route::post('/createRole', [RolesController::class, 'store']);
Route::get('/getRole/{role}', [RolesController::class, 'show']);
Route::put('/updateRole/{role}',[RolesController::class, 'update']);
Route::delete('/deleteRole/{role}',[RolesController::class ,'destroy']);


Route::get('/listCategories', [CategoryController::class, 'index']);
Route::post('/createCategory', [CategoryController::class, 'store']);
Route::get('/getCategory/{category}', [CategoryController::class, 'show']);
Route::put('/updateCategory/{category}',[CategoryController::class, 'update']);
Route::delete('/deleteCategory/{category}',[CategoryController::class ,'destroy']);

Route::get('/listUsers', [UsersController::class, 'index']);
Route::post('/createUser', [UsersController::class, 'store']);
Route::get('/getUser/{user}',[UsersController::class, 'show']);
Route::put('/updateUser/{user}',[UsersController::class, 'update']);
Route::delete('/deleteUser/{user}',[UsersController::class ,'destroy']);


Route::get('/listPhones', [PhoneController::class, 'index']);
Route::post('/createPhone', [PhoneController::class, 'store']);
Route::get('/getPhone/{phone}',[PhoneController::class, 'show']);
Route::put('/updatePhone/{phone}',[PhoneController::class, 'update']);
Route::delete('/deletePhone/{phone}',[PhoneController::class ,'destroy']);


Route::get('/listOrders', [OrderController::class, 'index']);
Route::post('/createOrder', [OrderController::class, 'store']);
Route::get('/getOrder/{order}',[OrderController::class, 'show']);
Route::put('/updateOrder/{orderId}',[OrderController::class, 'update']);
Route::delete('/deleteOrder/{order}',[OrderController::class ,'destroy']);






// II nacin samo za basic routes 
// Route::apiResources([
//     '/roles' => RolesController::class
// ]);