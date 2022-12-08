<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BannerHomeController;
use App\Http\Controllers\CauhoiController;
use App\Http\Controllers\CollectedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoLayoutController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TulieuController;
use App\Models\PhotoLayout;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/trang-chu', [PageController::class, 'index']);
Route::get('/whats-new', [PageController::class, 'whatsnew']);
Route::get('/bo-suu-tap', [PageController::class, 'bosuutap']);
Route::get('/phu-kien', [PageController::class, 'phukien']);
Route::get('/chat-lieu', [PageController::class, 'chatlieu']);
Route::get('/khach-hang', [PageController::class, 'khachhang']);
Route::get('/dich-vu', [PageController::class, 'dichvu']);
Route::get('/dich-vu/{id}', [PageController::class, 'chitiet_dichvu']);
Route::get('/tu-lieu', [PageController::class, 'tulieu']);
Route::get('/about-khang', [PageController::class, 'about']);
Route::get('/page-stories/{id}', [PageController::class, 'stories']);

Route::post('/search', [PageController::class, 'search']);


Route::get('/cau-hoi-thuong-gap', [PageController::class, 'cau_hoi']);
Route::get('/huong-dan-lay-so-do', [PageController::class, 'lay_so_do']);
Route::get('/huong-dan-dat-may', [PageController::class, 'dat_may']);
Route::get('/chinh-sach-doi-tra', [PageController::class, 'chinh_sach']);
Route::get('/lien-he', [PageController::class, 'lien_he']);


Route::get('/bo-suu-tap/{slug}', [PageController::class, 'chitiet_sanpham']);
Route::get('/phu-kien/{slug}', [PageController::class, 'chitiet_sanpham']);
Route::get('/chat-lieu/{slug}', [PageController::class, 'chitiet_sanpham']);
Route::get('/whats-new/{id}', [PageController::class, 'chitiet_whatsnew']);
Route::get('/khach-hang/{id}', [PageController::class, 'chitiet_khachhang']);
Route::get('/tu-lieu/{id}', [PageController::class, 'chitiet_tulieu']);

Route::post('/loader-more', [HomeController::class, 'loader_more']);
Route::post('/loader-more-2', [HomeController::class, 'loader_more_2']);
Route::post('/loader-more-3', [HomeController::class, 'loader_more_3']);

Route::post('/loader-collected', [HomeController::class, 'loader_collected']);
Route::post('/loader-phukien', [HomeController::class, 'loader_phukien']);
Route::post('/loader-chatlieu', [HomeController::class, 'loader_chatlieu']);



// Back-end

Route::get('/auth/khang/admin', [AdminController::class, 'index'])->middleware('guest');
Route::post('/auth/khang/login', [AdminController::class, 'login']);


Route::group(['middleware' => ['auth']], function () {
    Route::get('/auth/khang/logout', [AdminController::class, 'logout']);

    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    
    Route::resource('home-banner', BannerHomeController::class);
    Route::resource('/photo-layout', PhotoLayoutController::class);
    Route::resource('/banner', BannerController::class);
    Route::resource('/sanpham', SanphamController::class);
    Route::resource('/collected', CollectedController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/tulieu', TulieuController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/cauhoi', CauhoiController::class);
    
    Route::get('/whatsnew/index', [PhotoLayoutController::class, 'whatsnew']);
    Route::get('/whatsnew/create', [PhotoLayoutController::class, 'whatsnew_create']);
    Route::post('/whatsnew/store', [PhotoLayoutController::class, 'whatsnew_store']);
    Route::get('/whatsnew/edit', [PhotoLayoutController::class, 'whatsnew_edit']);
    Route::get('/whatsnew/destroy/{id}', [PhotoLayoutController::class, 'whatsnew_destroy']);

    Route::get('/stories/index', [PhotoLayoutController::class, 'stories']);
    Route::get('/stories/create', [PhotoLayoutController::class, 'stories_create']);
    Route::post('/stories/store', [PhotoLayoutController::class, 'stories_store']);
    Route::get('/stories/destroy/{id}', [PhotoLayoutController::class, 'stories_destroy']);
    Route::get('/stories/active/{id}', [PhotoLayoutController::class, 'active_stories']);
    Route::get('/stories/unactive/{id}', [PhotoLayoutController::class, 'unactive_stories']);
    Route::get('/stories/gallery/{id}', [PhotoLayoutController::class, 'gallery_stories']);
    Route::post('stories/update-gallery/{id}', [PhotoLayoutController::class, 'add_gallery_stories']);
    
    Route::get('/collected/destroy/{id}', [PhotoLayoutController::class, 'collected_destroy']);
    Route::get('/tulieu/destroy/{id}', [PhotoLayoutController::class, 'tulieu_destroy']);
    
    
     
    Route::get('/home-banner/active/{id}', [BannerHomeController::class, 'active']);
    Route::get('/home-banner/unactive/{id}', [BannerHomeController::class, 'unactive']);
    
    Route::get('/photo-layout/active/{id}', [PhotoLayoutController::class, 'active']);
    Route::get('/photo-layout/unactive/{id}', [PhotoLayoutController::class, 'unactive']);

    Route::get('/whatsnew/gallery/{id}', [PhotoLayoutController::class, 'gallery']);
    Route::post('/update-gallery/{id}', [PhotoLayoutController::class, 'add_gallery']);


    Route::get('/collected/active/{id}', [CollectedController::class, 'active']);
    Route::get('/collected/unactive/{id}', [CollectedController::class, 'unactive']);
    Route::get('/collected/gallery/{id}', [CollectedController::class, 'gallery']);
    Route::post('collected/update-gallery/{id}', [CollectedController::class, 'add_gallery']);

    Route::get('/tulieu/active/{id}', [TulieuController::class, 'active']);
    Route::get('/tulieu/unactive/{id}', [TulieuController::class, 'unactive']);
    Route::get('/tulieu/gallery/{id}', [TulieuController::class, 'gallery']);
    Route::post('tulieu/update-gallery/{id}', [TulieuController::class, 'add_gallery']);
});
