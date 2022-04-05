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

//Coach Routes
Route::get('/coach', [UsersController::class, 'loadCoachView']);



Route::get('/profile',[UsersController::class, 'loadProfile'])->middleware('auth');
Route::get('/editprofile', [UsersController::class, 'loadEditProfile'])->middleware('auth');
Route::post('/editprofile', [UsersController::class, 'submitEditProfile']);

//Signup
Route::get('/signup',[UsersController::class, 'loadSignup'])->middleware('guest');
Route::post('/signup', [UsersController::class, 'addUser']);


//Login
Route::get('/login',[UsersController::class, 'loadLogin'])->middleware('guest')->name('login');
Route::post('/login', [UsersController::class, 'authenticate']);

//Logout
Route::get('/logout',[UsersController::class, 'logout']);



