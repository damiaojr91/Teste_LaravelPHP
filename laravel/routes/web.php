<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/admin', [HomeController::class, 'zerbinao'])->name('admin.index');
Route::post('/admin/produto/criar', [HomeController::class, 'create'])->name('admin.create');
Route::put('/admin/produto/update/{id}', [HomeController::class, 'update'])->name('admin.update');
Route::get('/admin/produto/edit/{id}', [HomeController::class, 'edit'])->name('admin.edit');
Route::get('/admin/produto/deletar/{id}', [HomeController::class, 'delete'])->name('admin.delete');
Route::delete('/admin/produto/destroy/{id}', [HomeController::class, 'destroy'])->name('admin.destroy');


