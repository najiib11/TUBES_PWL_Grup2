<?php
use App\Http\Controllers\CashierController;
use App\Http\Controllers\KepalaTokoController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SupervisorController;
use App\Models\Product;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("index");

Route::get('/dashboard', function () {
    $products = Product::all();
    return view('dashboard' , compact('products'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('{role}/profile', [ProfileController::class, 'index'])->name('profile.index');
//     Route::get('{role}/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::delete('{role}/profile/save', [ProfileController::class, 'destroy'])->name('profile.save');
// });

Route::middleware('auth')->prefix("admin")->group(callback: function (){
    Route::get("/", [AdminController::class, "index"])->name("admin.index");
    Route::get("role",  [AdminController::class, "viewRole"])->name("role.edit");
    Route::get("laporan", [AdminController::class, "viewLaporan"])->name("admin.laporan");
    Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::delete('profile/save', [ProfileController::class, 'destroy'])->name('admin.profile.save');

});

Route::middleware("auth")->prefix("gudang")->group(function(){
    Route::get("/", [WarehouseController::class, "index"])->name("gudang.index");
    Route::get("input-data", [WarehouseController::class, "inputData"])->name("gudang.input");
    Route::get('profile', [ProfileController::class, 'index'])->name('gudang.profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('gudang.profile.edit');
    Route::delete('profile/save', [ProfileController::class, 'destroy'])->name('gudang.profile.save');
});

Route::middleware("auth")->prefix("kasir")->group(function(){
    Route::get("/", [CashierController::class, "index"])->name("kasir.index");
    Route::post("tambahData", [CashierController::class,"tambahData"])->name("kasir.tambah");
    Route::get('profile', [ProfileController::class, 'index'])->name('kasir.profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('kasir.profile.edit');
    Route::delete('profile/save', [ProfileController::class, 'destroy'])->name('kasir.profile.save');
});

Route::middleware("auth")->prefix("kepala_toko")->group(function(){
    Route::get("/", [KepalaTokoController::class, "index"])->name("kepala_toko.index");
    Route::get("inputStaf", [KepalaTokoController::class, "inputDataStaf"])->name("kepala_toko.input");
    Route::get("proses", [KepalaTokoController::class, "inputDataProses"])->name("kepala_toko.proses");
    Route::get('profile', [ProfileController::class, 'index'])->name('kepala_toko.profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('kepala_toko.profile.edit');
    Route::delete('profile/save', [ProfileController::class, 'destroy'])->name('kepala_toko.profile.save');
});

Route::middleware("auth")->prefix("manager")->group(function(){
    Route::get("/", [ManagerController::class, "index"])->name("manager.index");
    Route::post("tambahData", [ManagerController::class,"tambahData"])->name("manager.tambah");
    Route::get('profile', [ProfileController::class, 'index'])->name('manager.profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('manager.profile.edit');
    Route::delete('profile/save', [ProfileController::class, 'destroy'])->name('manager.profile.save');
});

Route::middleware("auth")->prefix(  "supervisor")->group(function(){
    Route::get("/", [SupervisorController::class, "index"])->name("supervisor.index");
    Route::post("tambahData", [SupervisorController::class,"tambahData"])->name("supervisor.tambah");
    Route::get('profile', [ProfileController::class, 'index'])->name('supervisor.profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('supervisor.profile.edit');
    Route::delete('profile/save', [ProfileController::class, 'destroy'])->name('supervisor.profile.save');
});

// Route::middleware("auth")->group(function(){
//     Route::get("profile", [ProfileController::class, "index"])->name("profile.index");
//     Route::get("profile/edit", [ProfileController::class,"edit"])->name("profile.edit");
//     Route::post("profile/edit/save", [ProfileController::class,"saveEdit"])->name("profile.save");

// });

Route::middleware("auth")->group(function(){
    Route::get("logout", [AuthenticatedSessionController::class, "destroy"])->name("logout.user");
});


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/dasboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
