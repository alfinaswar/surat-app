<?php

use App\Models\MasterSurat;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasterSuratController;
use App\Http\Controllers\ProductController;


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

Route::get('/home', [HomeController::class, 'index'])->name('home');


    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::PUT('update/{id}', [MasterSuratController::class, 'update']);
    Route::resource('pengajuan', MasterSuratController::class);
//Route::PUT('tolaksurat/{id}', [MasterSuratController::class, 'pengajuan.tolaksurat']);
// Route::PUT('tolaksurat/{id}', [MasterSuratController::class, 'tolaksurat'])->name('pengajuan.tolaksurat');
   // Route::resource('products', ProductController::class)