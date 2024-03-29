<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

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

Route::get('/', [ HomeController::class, "index" ])->name("home");

Route::get("/register", [ RegisterController::class, "index" ])->name("register");
Route::post("/register", [ RegisterController::class, "action" ]);

Route::get("/login", [ LoginController::class, "index" ])->name("login");
Route::post("/login", [ LoginController::class, "action" ]);

Route::get('/logout', [ LogoutController::class, "logout" ])->name("logout");

Route::get('/profile', [ ProfileController::class, "index" ])->name("profile");
Route::post('/profile/update', [ ProfileController::class, "update_profile" ])->name("update_profile");
Route::post('/profile/update_password', [ ProfileController::class, "update_password" ])->name("update_password");

Route::get('/posts/new', [PostController::class, "index"])->name("new_post");
Route::post('/posts/create', [PostController::class, "create"])->name("create_post");
