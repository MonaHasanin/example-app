<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BeveragesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
//---- Authentication is done to check the email verify and login
Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('contact', [ContactController::class, 'create'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact');


Route::group(['middleware' => 'admin'] , function(){
// ---------------categories-----------

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/addCategory', [CategoryController::class, 'create'])->name('addCategory');
Route::post('/addCategory', [CategoryController::class, 'store'])->name('addCategory');
Route::get('/editCategory/{category}', [CategoryController::class, 'edit'])->name('editCategory');
Route::post('/editCategory/{category}', [CategoryController::class, 'update'])->name('editCategory');
Route::delete('deleteCategory/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');

// ---------------Beverages-----------

Route::get('/Beverages', [BeveragesController::class, 'index'])->name('Beverages');
Route::get('/addBeverages', [BeveragesController::class, 'create'])->name('addBeverages');
Route::post('/addBeverages', [BeveragesController::class, 'store'])->name('addBeverages');
Route::get('/editBeverages/{Beverages}', [BeveragesController::class, 'edit'])->name('editBeverages');
Route::post('/editBeverages/{Beverages}', [BeveragesController::class, 'update'])->name('editBeverages');
Route::delete('deleteBeverage/{id}', [BeveragesController::class, 'destroy'])->name('deleteBeverage');

// ---------------User-----------

Route::get('/Users', [UserController::class, 'index'])->name('Users');
Route::get('/addUser', [UserController::class, 'create'])->name('addUser');
Route::post('/addUser', [UserController::class, 'store'])->name('addUser');
Route::get('/editUser/{User}', [UserController::class, 'edit'])->name('editUser');
Route::post('/editUser/{User}', [UserController::class, 'update'])->name('editUser');

// ----------------- Messages ------------
Route::get('/contactUs', [ContactController::class, 'index'])->name('contactUs');

Route::get('showMessage/{message}', [ContactController::class, 'show'])->name('showMessage');
Route::delete('deleteMessage/{id}', [ContactController::class, 'destroy'])->name('deleteMessage');

});