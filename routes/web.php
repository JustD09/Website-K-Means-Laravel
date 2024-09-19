<?php

use App\Http\Controllers\AtasanClusteringController;
use App\Http\Controllers\AtasanKriteriaController;
use App\Http\Controllers\AtasanPehitunganController;
use App\Http\Controllers\AtasanProductController;
use App\Http\Controllers\AtasanRuasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClusterController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuasController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\ClusteringController;
use App\Models\Product;
use App\Models\User;
use App\Models\Cluster;
use App\Models\Kriteria;
use App\Models\Perhitungan;
use App\Models\Ruas;

Route::get('/', function () {
    return view('auth.login');
});


// Login Route
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Admin Route Login
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('admin_dashboard', function () {
        $dataHasil = Perhitungan::all()->map(function ($item) {
            // Ambil nilai referensi dari suatu sumber (misal, konstanta atau database)
            $ar9 = 1; // contoh nilai
            $as9 = 1; // contoh nilai
            $at9 = 1; // contoh nilai

            $ar10 = 3; // contoh nilai
            $as10 = 2; // contoh nilai
            $at10 = 3; // contoh nilai

            $ar11 = 3; // contoh nilai
            $as11 = 2; // contoh nilai
            $at11 = 4; // contoh nilai

            // Hitung Distance C1, C2, dan C3
            $item->distanceC1 = sqrt(pow(($item->kondisi - $ar9), 2) + pow(($item->jenis - $as9), 2) + pow(($item->ukuran_lubang - $at9), 2));
            $item->distanceC2 = sqrt(pow(($item->kondisi - $ar10), 2) + pow(($item->jenis - $as10), 2) + pow(($item->ukuran_lubang - $at10), 2));
            $item->distanceC3 = sqrt(pow(($item->kondisi - $ar11), 2) + pow(($item->jenis - $as11), 2) + pow(($item->ukuran_lubang - $at11), 2));

            return $item;
        });
        
        // Menghitung jumlah data untuk setiap cluster
        $jumlahC1 = $dataHasil->where('cluster', 'C1')->count();
        $jumlahC2 = $dataHasil->where('cluster', 'C2')->count();
        $jumlahC3 = $dataHasil->where('cluster', 'C3')->count();

        $userCount = User::count();
        $productCount = Product::count();
        $clusterCount = Perhitungan::count();
        $kriteriaCount = Kriteria::count();
        $ruasCount = Ruas::count();
        return view('admin_dashboard', compact('jumlahC1', 'jumlahC2', 'jumlahC3', 'userCount', 'productCount', 'dataHasil', 'clusterCount', 'kriteriaCount', 'ruasCount'));
    })->name('admin_dashboard');
});

// User/Atasan Route Login
Route::group(['prefix' => 'user', 'middleware' => ['auth'], 'as' => 'user.'], function () {
    Route::get('user_dashboard', function () {
        $dataHasil = Perhitungan::all()->map(function ($item) {
            // Ambil nilai referensi dari suatu sumber (misal, konstanta atau database)
            $ar9 = 1; // contoh nilai
            $as9 = 1; // contoh nilai
            $at9 = 1; // contoh nilai

            $ar10 = 3; // contoh nilai
            $as10 = 2; // contoh nilai
            $at10 = 3; // contoh nilai

            $ar11 = 3; // contoh nilai
            $as11 = 2; // contoh nilai
            $at11 = 4; // contoh nilai

            // Hitung Distance C1, C2, dan C3
            $item->distanceC1 = sqrt(pow(($item->kondisi - $ar9), 2) + pow(($item->jenis - $as9), 2) + pow(($item->ukuran_lubang - $at9), 2));
            $item->distanceC2 = sqrt(pow(($item->kondisi - $ar10), 2) + pow(($item->jenis - $as10), 2) + pow(($item->ukuran_lubang - $at10), 2));
            $item->distanceC3 = sqrt(pow(($item->kondisi - $ar11), 2) + pow(($item->jenis - $as11), 2) + pow(($item->ukuran_lubang - $at11), 2));

            return $item;
        });

        // Menghitung jumlah data untuk setiap cluster
        $jumlahC1 = $dataHasil->where('cluster', 'C1')->count();
        $jumlahC2 = $dataHasil->where('cluster', 'C2')->count();
        $jumlahC3 = $dataHasil->where('cluster', 'C3')->count();
        $userCount = User::count();
        $productCount = Product::count();
        $clusterCount = Perhitungan::count();
        $kriteriaCount = Kriteria::count();
        $ruasCount = Ruas::count();
        return view('user_dashboard', compact('jumlahC1', 'jumlahC2', 'jumlahC3', 'userCount', 'productCount', 'dataHasil', 'clusterCount', 'kriteriaCount', 'ruasCount'));
    })->name('user_dashboard');
});
 
    // Product Route
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    // Ruas Route
    Route::controller(RuasController::class)->prefix('ruas')->group(function () {
        Route::get('', 'index')->name('ruas');
        Route::get('create', 'create')->name('ruas.create');
        Route::post('store', 'store')->name('ruas.store');
        Route::get('show/{id}', 'show')->name('ruas.show');
        Route::get('edit/{id}', 'edit')->name('ruas.edit');
        Route::put('edit/{id}', 'update')->name('ruas.update');
        Route::delete('destroy/{id}', 'destroy')->name('ruas.destroy');
    });

    // Kriteria Route
    Route::controller(KriteriaController::class)->prefix('kriteria')->group(function () {
        Route::get('', 'index')->name('kriteria');
        Route::get('create', 'create')->name('kriteria.create');
        Route::post('store', 'store')->name('kriteria.store');
        Route::get('show/{id}', 'show')->name('kriteria.show');
        Route::get('edit/{id}', 'edit')->name('kriteria.edit');
        Route::put('edit/{id}', 'update')->name('kriteria.update');
        Route::delete('destroy/{id}', 'destroy')->name('kriteria.destroy');
    });
 
    // Profile Route
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile',[ProfileController::class, 'update'])->name('profile.update');
    

    // Perhitungan Route
    Route::resource('perhitungan', PerhitunganController::class);
    Route::get('/hitung-distance', [PerhitunganController::class, 'hitungDistance']);
    
    // Clustering Route
    Route::resource('clustering', ClusteringController::class);

    // atasanProduct Route
    Route::controller(AtasanProductController::class)->prefix('atasanProduct')->group(function () {
        Route::get('', 'index')->name('atasanProduct');
        Route::get('show/{id}', 'show')->name('atasanProduct.show');
    });

    // atasanClustering Route
    Route::resource('atasanClustering', AtasanClusteringController::class);

    // atasanPerhitungan Route
    Route::resource('atasanPerhitungan', AtasanPehitunganController::class);

    // atasanKriteria Route
    Route::controller(AtasanKriteriaController::class)->prefix('atasanKriteria')->group(function () {
        Route::get('', 'index')->name('atasanKriteria');
    });

    // atasanRuas Route
    Route::controller(AtasanRuasController::class)->prefix('atasanRuas')->group(function () {
        Route::get('', 'index')->name('atasanRuas');
    });