<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('/anasayfa','/home')->name('anasayfa');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::redirect('/anasayfa','/home')->name('anasayfa');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/search_page', [HomeController::class, 'search_page'])->name('search_page');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/car/{id}/{slug}', [HomeController::class, 'car'])->name('car');
Route::get('/categorycars/{id}/{slug}', [HomeController::class, 'categorycars'])->name('categorycars');
Route::post('/getcar', [HomeController::class, 'getcar'])->name('getcar');
Route::get('/carlist/{search}', [HomeController::class, 'carlist'])->name('carlist');


Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

    #araba kısmı

    Route::prefix('car')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\CarController::class,'index'])->name('admin_cars');
        Route::get('create',[\App\Http\Controllers\Admin\CarController::class,'create'])->name('admin_car_create');
        Route::post('store',[\App\Http\Controllers\Admin\CarController::class,'store'])->name('admin_car_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\CarController::class,'edit'])->name('admin_car_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\CarController::class,'update'])->name('admin_car_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\CarController::class,'destroy'])->name('admin_car_delete');
        Route::get('show',[\App\Http\Controllers\Admin\CarController::class,'show'])->name('admin_car_show');

    });

    Route::prefix('messages')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show',[\App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');

    });

    Route::prefix('image')->group(function (){

        Route::get('create/{car_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{car_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{car_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');

    });
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

    Route::prefix('faq')->group(function (){
        Route::get('/',[FaqController::class,'index'])->name('admin_faq');
        Route::get('create',[FaqController::class,'create'])->name('admin_faq_add');
        Route::post('store',[FaqController::class,'store'])->name('admin_faq_store');
        Route::get('edit/{id}',[FaqController::class,'edit'])->name('admin_faq_edit');
        Route::post('update/{id}',[FaqController::class,'update'])->name('admin_faq_update');
        Route::get('delete/{id}',[FaqController::class,'destroy'])->name('admin_faq_delete');
        Route::get('show',[FaqController::class,'show'])->name('admin_faq_show');

    });
});
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');

    Route::prefix('car')->group(function (){
        Route::get('/',[\App\Http\Controllers\CarController::class,'index'])->name('user_cars');
        Route::get('create',[\App\Http\Controllers\CarController::class,'create'])->name('user_car_create');
        Route::post('store',[\App\Http\Controllers\CarController::class,'store'])->name('user_car_store');
        Route::get('edit/{id}',[\App\Http\Controllers\CarController::class,'edit'])->name('user_car_edit');
        Route::post('update/{id}',[\App\Http\Controllers\CarController::class,'update'])->name('user_car_update');
        Route::get('delete/{id}',[\App\Http\Controllers\CarController::class,'destroy'])->name('user_car_delete');
        Route::get('show',[\App\Http\Controllers\CarController::class,'show'])->name('user_car_show');

    });
    Route::prefix('image')->group(function (){

        Route::get('create/{car_id}',[\App\Http\Controllers\ImageController::class,'create'])->name('user_image_add');
        Route::post('store/{car_id}',[\App\Http\Controllers\ImageController::class,'store'])->name('user_image_store');
        Route::get('delete/{id}/{car_id}',[\App\Http\Controllers\ImageController::class,'destroy'])->name('user_image_delete');
        Route::get('show',[\App\Http\Controllers\ImageController::class,'show'])->name('user_image_show');

    });





});

Route::get('/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');
Route::get('/admin/logout',[HomeController::class,'logout'])->name('admin_logout');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home.index');
})->name('dashboard');
