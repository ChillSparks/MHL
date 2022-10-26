<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MHLController;

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
    return view('index');
});

Route::view('/fish_purchase','fish_purchase_report');
Route::get('/form7',[MHLController::class,'form7get'])->name('form7');
Route::get('edit/{created_at}',[MHLController::class,'formedit'])->name('formedit');
Route::get('/excel/{id}',[MHLController::class,'excel'])->name('excel');
Route::get('/csv/{id}',[MHLController::class,'csv'])->name('csv');
Route::get('/form10',[MHLController::class,'form10get'])->name('form10');
Route::post('/form7save',[MHLController::class,'form7save'])->name('form7save');
Route::post('/form10save',[MHLController::class,'form10save'])->name('form10save');
Route::post('/formupdate',[MHLController::class,'formupdate'])->name('formupdate');

