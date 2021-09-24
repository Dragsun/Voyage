<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
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

// Route::get('/',[StaticController::class,'home']);

Route::prefix('fruits')->group(function()
{
	Route::get('/',[StaticController::class,'home']);
	Route::get('create',[StaticController::class,'create'])->name('createFruit');
	Route::post('store',[StaticController::class,'store'])->name('createData');
	Route::delete('delete/{id}', [StaticController::class,'destroy'])->name('deleteFruit');
	Route::get('fruit/{id}', [StaticController::class,'fruit'])->name('fruit');
});

