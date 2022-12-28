<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssetImageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ViewerController;
use App\Http\Controllers\WisataController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/table', function () {
    return view('dashboard/table');
});
// Route::get('/admin', function () {
//     return view('dashboard/index');
// });
// Route::get('/admin2', function () {
//     return view('dashboard/index2');
// });
// Route::get('/admin3', function () {
//     return view('dashboard/index3');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([''], function () {
    // Route::get('/', [DashboardController::class, 'index']);
    Route::get('/chart-tahun', [DashboardController::class, 'charttahun']);

    Route::get('/admin', [DashboardController::class, 'index']);
    Route::get('/wisata', [WisataController::class, 'index']);
    Route::get('/reset-viewer', [ViewerController::class, 'resetjumlah']);

    Route::get('/admin/produk', [ProdukController::class, 'index']);
    Route::get('/admin/produk/create', [ProdukController::class, 'create']);
    Route::post('/admin/produk/tambah', [ProdukController::class, 'store']);
    Route::post('/admin/produk/edit', [ProdukController::class, 'update']);
    Route::get('/admin/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::get('/admin/produk/hapus/{id}', [ProdukController::class, 'destroy']);
    Route::get('/admin/produk/detail/{id}', [ProdukController::class, 'show']);

    Route::get('/admin/category', [CategoryController::class, 'index']);
    Route::get('/admin/category/create', [CategoryController::class, 'create']);
    Route::post('/admin/category/tambah', [CategoryController::class, 'store']);
    Route::post('/admin/category/edit', [CategoryController::class, 'update']);
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::get('/admin/category/hapus/{id}', [CategoryController::class, 'destroy']);

    Route::get('/admin/admin', [AdminController::class, 'index']);
    Route::get('/admin/admin/create', [AdminController::class, 'create']);
    Route::post('/admin/admin/tambah', [AdminController::class, 'store']);
    Route::post('/admin/admin/edit', [AdminController::class, 'update']);
    Route::get('/admin/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::get('/admin/admin/hapus/{id}', [AdminController::class, 'destroy']);

    Route::get('/admin/comment', [CommentController::class, 'index']);
    Route::get('/admin/comment/create', [CommentController::class, 'create']);
    Route::post('/admin/comment/tambah', [CommentController::class, 'store']);
    Route::post('/admin/comment/edit', [CommentController::class, 'update']);
    Route::get('/admin/comment/edit/{id}', [CommentController::class, 'edit']);
    Route::get('/admin/comment/detail/{id}', [CommentController::class, 'show']);
    Route::get('/admin/comment/hapus/{id}', [CommentController::class, 'destroy']);

    Route::get('/admin/asset-image', [AssetImageController::class, 'index']);
    Route::get('/admin/asset-image/create', [AssetImageController::class, 'create']);
    Route::post('/admin/asset-image/tambah', [AssetImageController::class, 'store']);
    Route::post('/admin/asset-image/edit', [AssetImageController::class, 'update']);
    Route::post('/admin/asset-image/update-icon-logo', [AssetImageController::class, 'updateIconLogo']);
    Route::get('/admin/asset-image/edit/{id}', [AssetImageController::class, 'edit']);
    Route::get('/admin/asset-image/edit-icon-logo/{id}', [AssetImageController::class, 'editIconLogo']);
    Route::get('/admin/asset-image/detail/{id}', [AssetImageController::class, 'show']);
    Route::get('/admin/asset-image/hapus/{id}', [AssetImageController::class, 'destroy']);


    Route::get('/admin/contact', [ContactController::class, 'index']);
    Route::post('/admin/contact/edit', [ContactController::class, 'update']);
    Route::get('/admin/contact/edit/{id}', [ContactController::class, 'edit']);


    Route::get('/admin/about', [AboutController::class, 'index']);
    Route::post('/admin/about/edit', [AboutController::class, 'update']);
    Route::get('/admin/about/edit/{id}', [AboutController::class, 'edit']);
    Route::get('/category-update', [CategoryController::class, 'updateEn']);
    Route::get('/Produk-update', [ProdukController::class, 'updateEn']);
});