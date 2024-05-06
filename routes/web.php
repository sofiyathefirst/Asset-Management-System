<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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

// let Laravel name your routes and uri's
// Route::resource('products', ProductController::class)->names('products');
// php artisan route:list

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home',[HomeController::class, 'index'])->name('home');

// User Controller
Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::post('user-create', [UserController::class, 'create'])->name('user.create');
// Route::get('user-show', [UserController::class, 'show'])->name('user.show');
Route::get('user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('user-update', [UserController::class, 'update'])->name('user.update');
Route::post('user-destroy', [UserController::class, 'destroy'])->name('user.destroy');