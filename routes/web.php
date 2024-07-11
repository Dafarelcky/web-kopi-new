<?php

use App\Http\Controllers\Dashboard\AboutSectionController;
use App\Http\Controllers\Dashboard\ContactSectionController;
use App\Http\Controllers\Dashboard\HomeSectionController;
use App\Http\Controllers\Dashboard\ProductSectionController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/product/{id}', [MainController::class, 'show'])->name('detail');
Route::post('/order', [TransactionController::class, 'order'])->name('order');

Route::get('/gate', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/gate', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Route::get('/dashboard', function() {
//     return view('dashboard.main');
// })->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::resource('/dashboard/home', HomeSectionController::class)->middleware('auth')->only(['edit', 'update', 'index']);
Route::resource('/dashboard/about', AboutSectionController::class)->middleware('auth')->only(['edit', 'update', 'index']);
Route::resource('/dashboard/contact', ContactSectionController::class)->middleware('auth')->only(['edit', 'update', 'index']);
Route::resource('/dashboard/product_list', ProductSectionController::class)->middleware('auth')->except(['show']);
Route::get('/dashboard/transactions', [TransactionController::class, 'index'])->middleware('auth');
Route::put('/dashboard/transactions-success/{id}', [TransactionController::class, 'statusPaid'])->middleware('auth');
Route::put('/dashboard/transactions/{id}', [TransactionController::class, 'statusFailed'])->middleware('auth');

Route::get('/dashboard/user/{id}/edit', [UserController::class, 'editUser'])->middleware('auth');
Route::put('/dashboard/user/{id}', [UserController::class, 'updateUser'])->middleware('auth');
