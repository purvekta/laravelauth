<?php

use Illuminate\Support\Facades\Route;
//use App\http\Controllers\Admin\DashBoardController;
use App\http\middleware\AdminAccess;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
//// admin access group////
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
  //  Route::get('dashboard', 'DashboardController@index')->name('dashboard');
  Route::get('/dashboard', [App\Http\Controllers\Admin\DashBoardController::class, 'index'])->name('dashboard');
});



///////////////User Access Group////////////////////////
Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
  //  Route::get('dashboard', 'DashboardController@index')->name('dashboard');
  Route::get('/dashboard', [App\Http\Controllers\User\DashBoardController::class, 'index'])->name('dashboard');
});
