<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LogoutController;

Route::apiResource('/reservations', ReservationController::class);
Route::post('/register', [RegisterController::class, 'post']);
Route::post('/login', [LoginController::class, 'post']);
Route::get('/user/{user_id}', [UsersController::class, 'get']);
Route::get('/like', [LikesController::class, 'get']);
Route::post('/like', [LikesController::class, 'post']);
Route::delete('/like', [LikesController::class, 'delete']);
Route::get('/shops', [ShopsController::class, 'get']);
Route::get('/shops/{shop_id}', [ShopsController::class, 'getDetail']);
Route::post('/logout', [LogoutController::class, 'post']);
Route::get('/user/{user_id}/reservations', [ReservationController::class, 'get']);

Route::delete('/reservations', [ReservationController::class, 'delete']);