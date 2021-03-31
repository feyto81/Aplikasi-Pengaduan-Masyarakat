<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SocietyController;
use App\Http\Controllers\UsersController;
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



// Auth::routes();
Route::get('/', [DashboardController::class, 'welcome']);
Route::get('user/register', [FrontendController::class, 'register'])->name('user_register');
Route::post('user/register/save', [FrontendController::class, 'save']);
Route::get('user/login', [FrontendController::class, 'login'])->name('user_login');
Route::post('user/login/cek', [FrontendController::class, 'postlogin'])->name('postlogin');
Route::get('user/logout', [FrontendController::class, 'logout'])->name('user_logout');

Route::get('admin/login', [LoginController::class, 'showFormLogin'])->name('login');
Route::get('user/home', [FrontendController::class, 'home'])->name('user_home');
Route::get('user/complaint/add', [FrontendController::class, 'add_complaint'])->name('add_complaint');
Route::post('user/complaint/save', [FrontendController::class, 'save_complaint'])->name('save_complaint');
Route::get('user/complaint', [FrontendController::class, 'complaint'])->name('complaint');
Route::get('user/complaint/detail/{id}', [FrontendController::class, 'detail_complaint'])->name('detail_complaint');


Route::post('admin/login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logoutt');
Route::group(['middleware' => ['auth', 'checkRole:1'], 'prefix' => 'admin'], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('users', UsersController::class);
    Route::get('users/delete/{id}', [UsersController::class, 'destroy']);
    Route::get('users/edit/{id}', [UsersController::class, 'edit']);
    Route::post('users/update/{id}', [UsersController::class, 'update']);
    Route::resource('society', SocietyController::class);
    Route::get('society/delete/{id}', [SocietyController::class, 'destroy']);
    Route::get('society/edit/{id}', [SocietyController::class, 'edit']);
    Route::post('society/update/{id}', [SocietyController::class, 'update']);
    Route::resource('complaints', ComplaintController::class);
});
Route::get('/home', 'HomeController@index')->name('home');
