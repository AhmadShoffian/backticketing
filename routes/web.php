<?php

use App\Models\Permission;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicKategori;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/topic', [TopicController::class, 'index'])->name('topic.index');
Route::get('/topic/tambah', [TopicController::class, 'tambah'])->name('topic.tambah');
Route::post('/topic/prosesTambah', [TopicController::class, 'prosesTambah'])->name('topic.prosesTambah');




Route::get('/type', [TypeController::class, 'index'])->name('type.index');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/units', [UnitController::class, 'index'])->name('units.index');

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/add', [RoleController::class, 'add'])->name('roles.add');

Route::get('status', [StatusController::class, 'index'])->name('status.index');

Route::get('/permission', [PermissionsController::class, 'index'])->name('permission.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
