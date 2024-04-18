<?php

use App\Http\Controllers\Admin\AuthenticateController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AppStaticPageController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PortfolioController;
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

Route::get('/login', [AuthenticateController::class, 'loginView'])->name('admin.login');
Route::post('/authenticate', [AuthenticateController::class, 'loginPost'])->name('admin.login.post');
Route::get('/logout', [AuthenticateController::class, 'logout'])->name('admin.logout');
Route::get('images/{path}', [ImageController::class, 'show'])->where('path', '.*');

Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
    Route::view('dashboard', 'admin.dashboard')->name('admin.dashboard');
    // Route::get('dashboard', function(){return view('admin.dashboard');})->name('admin.dashboard');
    Route::resource('staff', StaffController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('appstaticpage', AppStaticPageController::class);
    Route::resource('portfolio', PortfolioController::class);
});
Route::post('change-status', [StaffController::class, 'change_status'])->name('change-status');
Route::get('reset_password_index', [StaffController::class, 'reset_password_index'])->name('reset_password_index');
Route::post('reset_password_post', [StaffController::class, 'reset_password_post'])->name('reset_password_post');
Route::get('reset_password_view/{id}', [StaffController::class, 'reset_password_view'])->name('reset_password_view');


