<?php

use App\Http\Controllers\ClientsController;
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
Route::get('clients-list', [ClientsController::class, 'index'])->name('showClients');
Route::get('add-client', [ClientsController::class, 'create'])->name('create-client');
Route::post('store-client', [ClientsController::class, 'store'])->name('store-c');
Route::get('edit-form/{id}', [ClientsController::class, 'edit'])->name('edit-form');
Route::post('update/{id}', [ClientsController::class, 'update'])->name('update-c');
Route::post('update-status/{id}', [ClientsController::class, 'status'])->name('update-c');
Route::post('delete/{id}', [ClientsController::class, 'destroy']);
