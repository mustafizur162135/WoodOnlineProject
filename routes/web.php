<?php

use App\Http\Controllers\backend\dashboard\dashboardcontroller;
use App\Http\Controllers\backend\user\userscontroller;
use App\Http\Controllers\frontent\pagecontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('admin')->group(function () {
    Route::get('/', [dashboardcontroller::class, 'index'])->name('admin.index');
    Route::get('/users', [userscontroller::class, 'index'])->name('admin.users.index');
    Route::get('/users/create', [userscontroller::class, 'create'])->name('admin.users.create');
    Route::get('/users/edit/{id}', [userscontroller::class, 'edit'])->name('admin.users.edit');
    Route::post('/users/store', [userscontroller::class, 'store'])->name('admin.users.store');
    Route::put('/users/update/{id}', [userscontroller::class, 'update'])->name('admin.users.update');

});
Route::get('/', [pagecontroller::class, 'index'])->name('index');
