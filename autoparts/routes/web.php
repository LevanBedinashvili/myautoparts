<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;




Auth::routes();
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', [GuestController::class, 'index'])->name('index');
Route::get('/about', [GuestController::class, 'about'])->name('about');
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
Route::get('/blog', [GuestController::class, 'blog'])->name('blog');
Route::get('/subcategory/{id}', [GuestController::class, 'subcategory'])->name('subcategory');
Route::get('/product/{id}', [GuestController::class, 'product'])->name('product');
Route::get('/product_detail/{id}', [GuestController::class, 'product_detail'])->name('product_detail');
Route::get('/blog_detail/{id}', [GuestController::class, 'blog_detail'])->name('blog_detail');
Route::get('/photo_gallery', [GuestController::class, 'photo_gallery'])->name('photo_gallery');
Route::get('/video_gallery', [GuestController::class, 'video_gallery'])->name('video_gallery');

Route::post('sendmail', [MailController::class, 'sendmail'])->name('sendmail');


Route::prefix('adminadmin')->name('admin.')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::post('/mtavari_update', [HomeController::class, 'mtavari_update'])->name('mtavari_update');

    Route::get('/main', [HomeController::class, 'main'])->name('main');
    Route::post('/main_update', [HomeController::class, 'main_update'])->name('main_update');
    Route::get('/about',  [HomeController::class, 'about'])->name('about');

    Route::post('/about_update', [HomeController::class, 'about_update'])->name('about_update');
    Route::post('/about_update_img', [HomeController::class, 'about_update_img'])->name('about_update_img');

    Route::get('/products_all', [HomeController::class, 'products_all'])->name('products_all');
    Route::get('/product_add', [HomeController::class, 'product_add'])->name('product_add');
    Route::post('/product_add_insert', [HomeController::class, 'product_add_insert'])->name('product_add_insert');
    Route::get('/product_details/{id}', [HomeController::class, 'product_details'])->name('product_details');
    Route::post('/product_update/{id}', [HomeController::class, 'product_update'])->name('product_update');
    Route::post('/product_update_image', [HomeController::class, 'product_update_image'])->name('product_update_image');
    Route::get('/product_drop/{id}', [HomeController::class, 'product_drop'])->name('product_drop');

    Route::get('/media/photo', [HomeController::class, 'media_photo'])->name('media_photo');
    Route::post('/media_photo_add_insert', [HomeController::class, 'media_photo_add_insert'])->name('media_photo_add_insert');
    Route::get('/media_photo_drop/{id}', [HomeController::class, 'media_photo_drop'])->name('media_photo_drop');

    Route::get('/media/video', [HomeController::class, 'media_video'])->name('media_video');
    Route::post('/media_video_add_insert', [HomeController::class, 'media_video_add_insert'])->name('media_video_add_insert');
    Route::get('/media_video_drop/{id}', [HomeController::class, 'media_video_drop'])->name('media_video_drop');
    Route::get('/media_video_edit/{id}', [HomeController::class, 'media_video_edit'])->name('media_video_edit');
    Route::post('/media_video_update/{id}', [HomeController::class, 'media_video_update'])->name('media_video_update');

    Route::get('/media/blogs', [HomeController::class, 'media_blogs'])->name('media_blogs');
    Route::get('/media/blogs_add', [HomeController::class, 'media_blogs_add'])->name('media_blogs_add');
    Route::get('/media_blogs_drop/{id}', [HomeController::class, 'media_blogs_drop'])->name('media_blogs_drop');
    Route::post('/media_blogs_add_insert', [HomeController::class, 'media_blogs_add_insert'])->name('media_blogs_add_insert');
    Route::get('/media_blogs_details/{id}', [HomeController::class, 'media_blogs_details'])->name('media_blogs_details');
    Route::post('/media_blogs_post_update/{id}', [HomeController::class, 'media_blogs_post_update'])->name('media_blogs_post_update');

    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('/contact_update', [HomeController::class, 'contact_update'])->name('contact_update');


    Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
    Route::get('/category_add', [HomeController::class, 'category_add'])->name('category_add');
    Route::post('/category_add_insert', [HomeController::class, 'category_add_insert'])->name('category_add_insert');
    Route::get('/category_edit/{id}', [HomeController::class, 'category_edit'])->name('category_edit');
    Route::patch('/category_update/{id}', [HomeController::class, 'category_update'])->name('category_update');
    Route::get('/category_delete/{id}', [HomeController::class, 'category_delete'])->name('category_delete');

    Route::get('/sub_categories', [HomeController::class, 'sub_categories'])->name('sub_categories');
    Route::get('/sub_add', [HomeController::class, 'sub_add'])->name('sub_add');
    Route::post('/sub_add_insert', [HomeController::class, 'sub_add_insert'])->name('sub_add_insert');
    Route::get('/subcat_edit/{id}', [HomeController::class, 'subcat_edit'])->name('subcat_edit');
    Route::patch('/sub_update/{id}', [HomeController::class, 'sub_update'])->name('sub_update');
    Route::get('/sub_delete/{id}', [HomeController::class, 'sub_delete'])->name('sub_delete');


    Route::get('getSubCategory/{id}', [HomeController::class, 'getSubCategory'])->name('getSubCategory');
    Route::get('product_details/getMySubCategory/{id}', [HomeController::class, 'getMySubCategory'])->name('getMySubCategory');


});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/user', UserController::class)->except(['show']);

