<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataRumahSakitControllers;
use App\Http\Controllers\DataPasienControllers;

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

Route::group(['middleware' => 'auth'],function(){
    
    Route::get('/home', [DataRumahSakitControllers::class, 'index'])->name('home');
    Route::get('/insert-data/DRS',[DataRumahSakitControllers::class, 'create'])->name('insertDRS');
    Route::post('/insert-data/DRS/progress',[DataRumahSakitControllers::class, 'store'])->name('insertDRSprogress');
    Route::get('/update-data/{DataRumahSakit}/DRS',[DataRumahSakitControllers::class, 'edit'])->name('updateDRS');
    Route::patch('/update-data/{DataRumahSakit}/DRS/progress',[DataRumahSakitControllers::class, 'update'])->name('updateDRSprogress');
    Route::delete('/delete-data/{DataRumahSakit}/DRS',[DataRumahSakitControllers::class, 'destroy'])->name('deleteDRS');
    Route::get('/show-data/{DataRumahSakit}/DRS',[DataRumahSakitControllers::class, 'show'])->name('showDRS');


    Route::get('/home/DP',[DataPasienControllers::class, 'index'])->name('home-DP');
    Route::get('/insert-data/DP',[DataPasienControllers::class, 'create']);
    Route::post('/insert-data/DP/progress',[DataPasienControllers::class, 'store']);
    Route::get('/show-data/{DataPasien}/DP',[DataPasienControllers::class, 'show']);
    Route::get('/update-data/{DataPasien}/DP',[DataPasienControllers::class, 'edit']);
    Route::patch('update-data/{DataPasien}/DP/progress',[DataPasienControllers::class, 'update']);
    Route::delete('/delete-data/{DataPasien}',[DataPasienControllers::class, 'destroy']);

});