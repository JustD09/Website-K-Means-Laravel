<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClusterController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\User;
use App\Models\Cluster;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        $dataHasil = Cluster::all();
        $category = Product::selectRaw('categories, SUM(categories) AS total')->groupBy('categories')->get();
        $jumlahCategory = $category->pluck('categories')->toArray();
        $totalCategory = $category->pluck('total')->toArray();
        $userCount = User::count();
        $productCount = Product::count();
        $clusterCount = Cluster::count();
        return view('dashboard', compact('category', 'totalCategory', 'jumlahCategory', 'userCount', 'productCount', 'dataHasil', 'clusterCount'));
    })->name('dashboard');
 
    // CRUD table Product
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    // CRUD table Cluster
    Route::controller(ClusterController::class)->prefix('clusters')->group(function () {
        Route::get('', 'index')->name('clusters');
        Route::get('create', 'create')->name('clusters.create');
        Route::post('store', 'store')->name('clusters.store');
        Route::get('show/{id}', 'show')->name('clusters.show');
        Route::get('edit/{id}', 'edit')->name('clusters.edit');
        Route::put('edit/{id}', 'update')->name('clusters.update');
        Route::delete('destroy/{id}', 'destroy')->name('clusters.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::post('/profile.post', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile.post');
    Route::get('/showData', [App\Http\Controllers\AuthController::class,'showData'])->name('showData');
    
});