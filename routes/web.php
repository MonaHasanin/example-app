<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BeveragesController;
use app\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ---------------categories-----------

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/addCategory', [CategoryController::class, 'create'])->name('addCategory');
Route::post('/addCategory', [CategoryController::class, 'store'])->name('addCategory');
Route::get('/editCategory/{category}', [CategoryController::class, 'edit'])->name('editCategory');
Route::post('/editCategory/{category}', [CategoryController::class, 'update'])->name('editCategory');

// ---------------Beverages-----------

Route::get('/Beverages', [BeveragesController::class, 'index'])->name('Beverages');
Route::get('/addBeverages', [BeveragesController::class, 'create'])->name('addCategory');
Route::post('/addBeverages', [BeveragesController::class, 'store'])->name('addBeverages');
Route::get('/editBeverages/{Beverages}', [BeveragesController::class, 'edit'])->name('editBeverages');
Route::post('/editBeverages/{Beverages}', [BeveragesController::class, 'update'])->name('editBeverages');

