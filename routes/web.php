<?php

use App\Http\Controllers\Auth\LoginController;
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
    return view('admin.login.login');
});

// Auth::routes();
Route::get('admin/login', [LoginController::class, 'showFormLogin'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logoutt');
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:Administrator'], 'prefix' => 'admin'], function () {
        Route::resource('dashboard', Dashboard::class);
    });
});
Route::get('/home', 'HomeController@index')->name('home');
