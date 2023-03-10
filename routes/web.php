<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::post('/registration', [AuthController::class, 'register'])->name("register");
Route::get('/login', [AuthController::class, "loginView"])->name("login_view");
Route::post("/loggingIn", [AuthController::class, "loggingIn"])->name("login");
