<?php
use App\Http\Controllers\CashierController;
use App\Http\Controllers\KepalaTokoController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SupervisorController;
use App\Models\Product;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WarehouseController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $products = Product::all();
    return view('dashboard' , compact('products'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(callback: function (){
    Route::get("admin", [AdminController::class, "index"])->name("admin.index");
    Route::get("admin/role", action: [AdminController::class, "viewRole"])->name("role.edit");
    Route::get("admin/laporan", [AdminController::class, "viewLaporan"])->name("admin.laporan");
    Route::get("admin/pengaturan", [AdminController::class, "viewPengaturan"])->name("admin.pengaturan");

});

Route::middleware("auth")->group(function(){
    Route::get("gudang", [WarehouseController::class, "index"])->name("gudang.index");
    Route::get("gudang/input-data", [WarehouseController::class, "inputData"])->name("gudang.input");
});

Route::middleware("auth")->group(function(){
    Route::get("kasir", [CashierController::class, "index"])->name("kasir.index");
    Route::post("kasir/tambahData", [CashierController::class,"tambahData"])->name("kasir.tambah");
});

Route::middleware("auth")->group(function(){
    Route::get("kepala_toko", [KepalaTokoController::class, "index"])->name("kepala_toko.index");
    Route::get("kepala_toko/inputStaf", [KepalaTokoController::class, "inputDataStaf"])->name("kepala_toko.input");
    Route::get("kepala_toko/proses", [KepalaTokoController::class, "inputDataProses"])->name("kepala_toko.proses");
});

Route::middleware("auth")->group(function(){
    Route::get("manager", [ManagerController::class, "index"])->name("manager.index");
    Route::post("manager/tambahData", [ManagerController::class,"tambahData"])->name("manager.tambah");
});

Route::middleware("auth")->group(function(){
    Route::get("supervisor", [SupervisorController::class, "index"])->name("supervisor.index");
    Route::post("supervisor/tambahData", [SupervisorController::class,"tambahData"])->name("supervisor.tambah");
});



require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
