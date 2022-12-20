<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', [AuthController::class, 'registerView'])->name("register_view");
Route::post('/registration', [AuthController::class, 'registration'])->name("register");
Route::get('/login', [AuthController::class, "loginView"])->name("login_view");
Route::post("/loggingIn", [AuthController::class, "loggingIn"])->name("login");
Route::get('/logout', [AuthController::class, "loggin"])->name("logout");

// Route::get('/users/all', [UserController::class, 'allUsers'])->name("all_users");
// Route::get('/user/{userId}', UserController::class, 'getUser')->name("get_user");
// Route::pos('/user/update/{userId}', [UserController::class, "updateUser"])->name("update_user");
// Route::delete("/user/delete", [UserController::class, "deleteUser"])->name("delete_user");
