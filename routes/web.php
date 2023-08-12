<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AchievementListController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PhotoListController;
use App\Http\Controllers\PostListController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);
Route::view('/about', 'about');

Auth::routes();

Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/members/home",[HomeController::class, 'userHome'])->name("home");
});

Route::middleware(['auth','user-role:staff'])->group(function()
{
    Route::get("/staff/home",[HomeController::class, 'staffHome'])->name("staff.home");
    Route::resource('/staff/list-gallery', PhotoListController::class);
    Route::resource('/staff/list-post', PostListController::class);
    Route::resource('/staff/list-achievement', AchievementListController::class);
    Route::resource('pemasukan', PemasukanController::class);
    Route::resource('pengeluaran', PengeluaranController::class);
    Route::resource('/staff/keuangan', KeuanganController::class);
});

Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'adminHome'])->name("admin.home");
    Route::resource('/admin/static', AdminController::class);
    Route::get("/admin/keuangan", [AdminController::class, 'keuangan'])->name('admin.keuangan');
});

// Post Route
Route::resource('post', 'App\Http\Controllers\PostController');

// Photo Route 
Route::resource('photo', PhotoController::class);

// Achievement Route
Route::resource('achievement', AchievementController::class);