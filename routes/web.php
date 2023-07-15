<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('newUser', [UserController::class, 'newUser'])->name('newUser');
Route::post('auth', [UserController::class, 'check'])->name('check');
Route::get('logout',[UserController::class, 'logout'])->name('logout');

Route::get('/',[UserController::class, 'Home'])->name('Home');


Route::post('admin/addPro',[AdminController::class, 'addProduct'])->name('addProduct');
Route::get('admin/add',[AdminController::class, 'add'])->name('add');


Route::group(['middleware'=>['AuthCheck']], function() {
    Route::get('/auth/login',[UserController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[UserController::class, 'register'])->name('auth.register');

    Route::get('dashboard',[UserController::class, 'dashboard'])->name('dashboard');
});
