<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::group(['prefix' => 'user', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/home', [BarangController::class,'userIndex'])->name('user.dashboard');
    Route::get('/detailBarang/{id}', [BarangController::class,'userShow'])->name('user.detail');
    Route::get('/formSewa/{id}', [UserController::class,'show'])->name('user.formSewa');
});


Route::group(['prefix' => 'admin', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/barangTambah', function () {
        return view('admin.tambahBarang');
    })->name('admin.tambahBarang');
    Route::get('/barang', [BarangController::class,'index'])->name('admin.barang');
    Route::post('/barang', [BarangController::class, 'store'])->name('admin.barangStore');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [RoleController::class, 'redirectUser'])->name('dashboard');
});
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');