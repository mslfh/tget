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
Route::get('/getTradingHistory', [App\Http\Controllers\HomeController::class, 'getTradingHistory']);
Route::post('/changeMoney', [App\Http\Controllers\HomeController::class, 'changeMoney']);


//master of trading
Route::prefix('mtrading')->group(function () {
    Route::get('/getServiceFee', [App\Http\Controllers\MasterTradingController::class, 'getServiceFee']);
    Route::post('/updateAdminFee', [App\Http\Controllers\MasterTradingController::class, 'updateAdminFee']);
    Route::post('/updateTaxFee', [App\Http\Controllers\MasterTradingController::class, 'updateTaxFee']);


    Route::get('/getEnergyList', [App\Http\Controllers\MasterTradingController::class, 'getEnergyList']);
    Route::get('/getTradingHistory', [App\Http\Controllers\MasterTradingController::class, 'getTradingHistory']);
    Route::post('/addNewEnergy', [App\Http\Controllers\MasterTradingController::class, 'addNewEnergy']);
    Route::delete('/deleteEnergy', [App\Http\Controllers\MasterTradingController::class, 'deleteEnergy']);
    Route::get('/getEnergyDetai', [App\Http\Controllers\MasterTradingController::class, 'getEnergyDetai']);
    Route::post('/updateEnergy', [App\Http\Controllers\MasterTradingController::class, 'updateEnergy']);
    Route::post('/uploadEnergyImage', [App\Http\Controllers\MasterTradingController::class, 'uploadEnergyImage']);

});

//trading
Route::prefix('trading')->group(function () {
    Route::post('/submitOrder', [App\Http\Controllers\OrderController::class, 'submitOrder']);
    Route::post('/submitEnergy', [App\Http\Controllers\OrderController::class, 'submitEnergy']);
});
//manage
Route::prefix('manage')->group(function () {
    Route::get('/getAllUser', [App\Http\Controllers\ManageController::class, 'getAllUser']);
    Route::post('/addNewUser', [App\Http\Controllers\ManageController::class, 'addNewUser']);
    Route::post('/removeUser', [App\Http\Controllers\ManageController::class, 'removeUser']);
    Route::post('/changeUserStatus', [App\Http\Controllers\ManageController::class, 'changeUserStatus']);
});

//manage
Route::prefix('dashboard')->group(function () {
    Route::get('/getActiveUserSummary', [App\Http\Controllers\DashboardController::class, 'getActiveUserSummary']);
    Route::get('/getMarketSummary', [App\Http\Controllers\DashboardController::class, 'getMarketSummary']);
    Route::get('/getPriceHistory', [App\Http\Controllers\DashboardController::class, 'getPriceHistory']);
    Route::get('/getTradingHistory', [App\Http\Controllers\DashboardController::class, 'getTradingHistory']);
    Route::post('/getTradingHistory', [App\Http\Controllers\DashboardController::class, 'getTradingHistory']);
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

//Route::get('/dashboard', function () {
//    return view('dashboard');
//});
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/manage', [App\Http\Controllers\ManageController::class, 'index'])->name('manage');

Route::get('/profile', function(){
    return view('profile');
})->name('profile');
Route::get('/forgotPasswd', function(){
    return view('auth.forgot-password');
})->name('forgot-password');

//add trading page
Route::get('/trading', function(){
    return view('trading');
})->name('trading');

Route::get('/trading/energyDetail', function(){
    return view('energyDetail');
})->name('energyDetail');

//add masterTrading
Route::get('/masterTrading', function(){
    return view('masterTrading');
})->name('masterTrading');
