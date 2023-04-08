<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddMoneyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('paywithpaypal', [AddMoneyController::class,'payWithPaypal'])->name('addmoney.paywithpaypal');
Route::post('paypal', [AddMoneyController::class,'postPaymentWithpaypal'])->name('addmoney.paypal');
Route::get('paypal', [AddMoneyController::class,'getPaymentStatus'])->name('payment.status');

