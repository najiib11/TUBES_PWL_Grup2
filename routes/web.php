<?php
use App\Http\Controllers\CashierController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SupervisorController;
use App\Models\Product;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PembeliController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("index");

// Route::get('/dashboard', function () {
//     $products = Product::all();
//     return view('dashboard' , compact('products'));
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('{role}/profile', [ProfileController::class, 'index'])->name('profile.index');
//     Route::get('{role}/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::delete('{role}/profile/save', [ProfileController::class, 'destroy'])->name('profile.save');
// });

Route::controller(PembeliController::class)->prefix("pembeli")->group(function(){
    Route::get("/", "viewPembeli")->name("pembeli.index");
    Route::get("input/{name}", "viewInputPembeli")->name("pembeli.input");
    ROute::get("input/save/{name}", "inputPembelian")->name("pembeli.save");
});

Route::middleware(["auth", "role:admin"])->prefix("admin")->group(callback: function (){
    Route::get("/", [AdminController::class, "index"])->name("admin.index");
    Route::get("input",  [AdminController::class, "viewInput"])->name("admin.input");
    Route::get("list", [AdminController::class, "viewListUser"])->name("admin.list");
    Route::get("list/{id}/edit", [AdminController::class, "viewEditUser"])->name("admin.edit");
    Route::post("list/edit/save/{id}", [AdminController::class, "saveEdit"])->name("admin.save");
    Route::get("laporan", [AdminController::class, "viewLaporan"])->name("admin.laporan");
    Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::post('profile/save', [ProfileController::class, 'saveProfile'])->name('admin.profile.save');
    Route::get("list/delete/{id}", [AdminController::class, "deleteUser"])->name("admin.delete");

});

Route::middleware(["auth", "role:warehouse"])->prefix("gudang")->group(function(){
    Route::get("/", [WarehouseController::class, "index"])->name("gudang.index");
    Route::get("input-data", [WarehouseController::class, "inputData"])->name("gudang.input");
    Route::get("edit-data", [WarehouseController::class, "editData"])->name("gudang.edit");
    Route::post('input-data/save', [WarehouseController::class, 'saveData'])->name('gudang.data.save');
    Route::post('edit/save', [WarehouseController::class, 'saveEdit'])->name('gudang.edit.save');
    Route::get('profile', [ProfileController::class, 'index'])->name('gudang.profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('gudang.profile.edit');
    Route::post('profile/save', [ProfileController::class, 'saveProfile'])->name('gudang.profile.save');
});

Route::middleware(["auth", "role:cashier"])->prefix("kasir")->group(function(){
    Route::get("/", [CashierController::class, "index"])->name("kasir.index");
    Route::post("tambahData", [CashierController::class,"tambahData"])->name("kasir.tambah");
    Route::get('profile', [ProfileController::class, 'index'])->name('kasir.profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('kasir.profile.edit');
    Route::delete('profile/save', [ProfileController::class, 'destroy'])->name('kasir.profile.save');
});

Route::middleware(["auth", "role:owner"])->prefix("owner")->group(function(){
    Route::get("/", [Controller::class, "index"])->name("owner.index");
    Route::get("inputStaf", [Controller::class, "inputDataStaf"])->name("owner.input");
    Route::get("proses", [Controller::class, "inputDataProses"])->name("owner.proses");
    Route::get('profile', [ProfileController::class, 'index'])->name('owner.profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('owner.profile.edit');
    Route::delete('profile/save', [ProfileController::class, 'destroy'])->name('owner.profile.save');
});

Route::middleware(["auth", "role:manager"])->prefix("manager")->group(function(){
    Route::get("/", [ManagerController::class, "index"])->name("manager.index");
    Route::post("tambahData", [ManagerController::class,"tambahData"])->name("manager.tambah");
    Route::get('profile', [ProfileController::class, 'index'])->name('manager.profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('manager.profile.edit');
    Route::delete('profile/save', [ProfileController::class, 'destroy'])->name('manager.profile.save');
});

Route::middleware(["auth", "role:supervisor"])->prefix(  "supervisor")->group(function(){
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

// Route::get('/dasboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
