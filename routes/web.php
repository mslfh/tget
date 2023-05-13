<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

//user
Route::get('/getUserInfo', [App\Http\Controllers\HomeController::class, 'getUserInfo']);
Route::get('/getRole', [App\Http\Controllers\HomeController::class, 'getRole']);
Route::post('/updateUser', [App\Http\Controllers\HomeController::class, 'updateUser']);
Route::post('/changePicture', [App\Http\Controllers\HomeController::class, 'changePicture']);
Route::get('/getUserStatus', [App\Http\Controllers\HomeController::class, 'getUserStatus']);


//master of trading
Route::prefix('mtrading')->group(function () {
    Route::get('/getServiceFee', [App\Http\Controllers\MasterTradingController::class, 'getServiceFee']);
    Route::post('/updateAdminFee', [App\Http\Controllers\MasterTradingController::class, 'updateAdminFee']);
    Route::post('/updateTaxFee', [App\Http\Controllers\MasterTradingController::class, 'updateTaxFee']);


    Route::get('/getEnergyList', [App\Http\Controllers\MasterTradingController::class, 'getEnergyList']);
    Route::post('/addNewEnergy', [App\Http\Controllers\MasterTradingController::class, 'addNewEnergy']);
    Route::delete('/deleteEnergy', [App\Http\Controllers\MasterTradingController::class, 'deleteEnergy']);
    Route::get('/getEnergyDetai', [App\Http\Controllers\MasterTradingController::class, 'getEnergyDetai']);
    Route::post('/updateEnergy', [App\Http\Controllers\MasterTradingController::class, 'updateEnergy']);
    Route::post('/uploadEnergyImage', [App\Http\Controllers\MasterTradingController::class, 'uploadEnergyImage']);


});


//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//static page entry
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/profile', function(){
    return view('profile');
})->name('profile');
