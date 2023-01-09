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
use App\Http\Controllers\DashuserController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ViewerController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'indexWisata']);
Route::get('/wisata/{nama}', [FrontController::class, 'getWisata']);
Route::get('/products', [FrontController::class, 'indexProduct']);
Route::get('/product/{nama}', [FrontController::class, 'getProduct']);
Route::get('/contact-us', [FrontController::class, 'indexContactUs']);
Route::get('/events', [FrontController::class, 'indexEvent']);
// Route::get('single-post-slider', function() {
//     return Inertia::render('Pages/Single-Post-Slider/Index');
// });
// Route::get('/', function () {
//     return view('frontend/index');
// });
Route::get('/user', function () {
    return view('user/index');
});
Route::get('/sales', function () {
    return view('user/sales');
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

Route::get('/update-viewer-produk/{id}', [ViewerController::class , 'viewerproduk']);
Route::get('/update-viewer-wisata/{id}', [ViewerController::class , 'viewerwisata']);
Route::get('/chart-viewer', [DashboardController::class , 'chartviewer']);
Route::get('/chart-viewer-user', [DashboardController::class , 'chartvieweruser']);

Route::get('/home', [App\Http\Controllers\HomeController::class , 'index'])->name('home');

Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/user/produk', [DashuserController::class , 'produk']);
    Route::get('/user/produk/tambah', [DashuserController::class , 'tambahproduk']);
    Route::get('/user/produk/edit/{id}', [DashuserController::class , 'editproduk'])->name('user.produk.edit');
    Route::get('/user/produk/hapus/{id}', [DashuserController::class , 'hapusproduk']);
    Route::post('/user/produk/store', [DashuserController::class , 'storeproduk']);
    Route::post('/user/produk/update', [DashuserController::class , 'updateproduk']);
    Route::get('/user/profile', [DashuserController::class , 'profile']);
    Route::post('/user/profile/edit', [DashuserController::class , 'editprofile']);
});
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    // Route::get('/', [DashboardController::class, 'index']);
    Route::get('/chart-tahun', [DashboardController::class , 'charttahun']);

    Route::post('/edit-chart-tahun/{id}', [DashboardController::class , 'editChartTahun']);

    Route::get('/admin', [DashboardController::class , 'index']);
    Route::get('/reset-viewer', [ViewerController::class , 'resetjumlah']);

    Route::get('/admin/produk', [ProdukController::class , 'index']);
    Route::get('/admin/produk/create', [ProdukController::class , 'create']);
    Route::post('/admin/produk/tambah', [ProdukController::class , 'store']);
    Route::post('/admin/produk/update', [ProdukController::class , 'update']);
    Route::get('/admin/produk/edit/{id}', [ProdukController::class , 'edit']);
    Route::get('/admin/produk/hapus/{id}', [ProdukController::class , 'destroy']);
    Route::get('/admin/produk/detail/{id}', [ProdukController::class , 'show']);

    Route::get('/admin/wisata', [WisataController::class , 'index']);
    Route::get('/admin/wisata/create', [WisataController::class , 'create']);
    Route::post('/admin/wisata/tambah', [WisataController::class , 'store']);
    Route::post('/admin/wisata/edit', [WisataController::class , 'update']);
    Route::get('/admin/wisata/edit/{id}', [WisataController::class , 'edit']);
    Route::get('/admin/wisata/hapus/{id}', [WisataController::class , 'destroy']);
    Route::get('/admin/wisata/detail/{id}', [WisataController::class , 'show']);

    Route::get('/admin/galery', [GaleryController::class , 'index']);
    Route::get('/admin/galery/create', [GaleryController::class , 'create']);
    Route::post('/admin/galery/tambah', [GaleryController::class , 'store']);
    Route::post('/admin/galery/edit', [GaleryController::class , 'update']);
    Route::get('/admin/galery/edit/{id}', [GaleryController::class , 'edit']);
    Route::get('/admin/galery/hapus/{id}', [GaleryController::class , 'destroy']);

    Route::get('/admin/admin', [AdminController::class , 'index']);
    Route::get('/admin/admin/create', [AdminController::class , 'create']);
    Route::post('/admin/admin/tambah', [AdminController::class , 'store']);
    Route::post('/admin/admin/edit', [AdminController::class , 'update']);
    Route::get('/admin/admin/edit/{id}', [AdminController::class , 'edit']);
    Route::get('/admin/admin/hapus/{id}', [AdminController::class , 'destroy']);

    Route::get('/admin/comment', [CommentController::class , 'index']);
    Route::get('/admin/comment/create', [CommentController::class , 'create']);
    Route::post('/admin/comment/tambah', [CommentController::class , 'store']);
    Route::post('/admin/comment/edit', [CommentController::class , 'update']);
    Route::get('/admin/comment/edit/{id}', [CommentController::class , 'edit']);
    Route::get('/admin/comment/detail/{id}', [CommentController::class , 'show']);
    Route::get('/admin/comment/hapus/{id}', [CommentController::class , 'destroy']);

    Route::get('/admin/asset-image', [AssetImageController::class , 'index']);
    Route::get('/admin/asset-image/create', [AssetImageController::class , 'create']);
    Route::post('/admin/asset-image/tambah', [AssetImageController::class , 'store']);
    Route::post('/admin/asset-image/edit', [AssetImageController::class , 'update']);
    Route::post('/admin/asset-image/update-icon-logo', [AssetImageController::class , 'updateIconLogo']);
    Route::get('/admin/asset-image/edit/{id}', [AssetImageController::class , 'edit']);
    Route::get('/admin/asset-image/edit-icon-logo/{id}', [AssetImageController::class , 'editIconLogo']);
    Route::get('/admin/asset-image/detail/{id}', [AssetImageController::class , 'show']);
    Route::get('/admin/asset-image/hapus/{id}', [AssetImageController::class , 'destroy']);


    Route::get('/admin/contact', [ContactController::class , 'index']);
    Route::post('/admin/contact/edit', [ContactController::class , 'update']);
    Route::get('/admin/contact/edit/{id}', [ContactController::class , 'edit']);


    Route::get('/admin/about', [AboutController::class , 'index']);
    Route::post('/admin/about/edit', [AboutController::class , 'update']);
    Route::get('/admin/about/edit/{id}', [AboutController::class , 'edit']);
    Route::get('/category-update', [CategoryController::class , 'updateEn']);
    Route::get('/Produk-update', [ProdukController::class , 'updateEn']);
});
