<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillboardsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/create', [HomeController::class, 'create'])->name('billboard.create');
Route::post('/home', [HomeController::class, 'store'])->name('billboard.store');
Route::get('/home/{billboard}/edit', [HomeController::class, 'edit'])->name('billboard.edit');
Route::patch('/home/{billboard}', [HomeController::class, 'update'])->name('billboard.update');
Route::get('/home/{billboard}/delete', [HomeController::class, 'delete'])->name('billboard.delete');
Route::delete('/home/{billboard}', [HomeController::class, 'destroy'])->name('billboard.destroy');
Auth::routes();
Route::get('/', [BillboardsController::class, 'index'])->name('index');
Route::get('/{billboard}', [BillboardsController::class, 'detail'])->name('billboard.detail');
