<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Models\Post;

Route::get('/', function () {
    return view('auth.login');
});


// Rute untuk sistem Login dan Register
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Autentikasi setelah login
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    // create, read, update, delete Controller
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    // Post data
    Route::controller(PostController::class)->prefix('post')->group(function () {
        Route::get('', 'index')->name('post');
        // Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('post.store');
        Route::get('show/{id}', 'show')->name('post.show');
        // Route::get('edit/{id}', 'edit')->name('products.edit');
        // Route::put('edit/{id}', 'update')->name('products.update');
        // Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('users.dashboard');
    Route::get('/showData', [App\Http\Controllers\AuthController::class,'showData'])->name('showData');
});