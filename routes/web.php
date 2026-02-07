<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('pages.dashboard');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/login', function () {
    return view('pages.login');
});

// Customer Master Routes
Route::prefix('masters/customer')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/list', [CustomerController::class, 'index'])->name('customer.list');
    Route::get('/add', [CustomerController::class, 'create'])->name('customer.add');
    Route::post('/store', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('/view/{id}', [CustomerController::class, 'show'])->name('customer.view');
    Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::put('/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.delete');
    Route::get('/billing-history/{id}', [CustomerController::class, 'billingHistory'])->name('customer.billing-history');
    Route::get('/payment-history/{id}', [CustomerController::class, 'paymentHistory'])->name('customer.payment-history');
});

// Dealer Master Routes
Route::prefix('masters/dealer')->group(function () {
    Route::get('/', [DealerController::class, 'index'])->name('dealer.index');
    Route::get('/list', [DealerController::class, 'index'])->name('dealer.list');
    Route::get('/add', [DealerController::class, 'create'])->name('dealer.add');
    Route::post('/store', [DealerController::class, 'store'])->name('dealer.store');
    Route::get('/view/{id}', [DealerController::class, 'show'])->name('dealer.view');
    Route::get('/edit/{id}', [DealerController::class, 'edit'])->name('dealer.edit');
    Route::put('/update/{id}', [DealerController::class, 'update'])->name('dealer.update');
    Route::delete('/delete/{id}', [DealerController::class, 'destroy'])->name('dealer.delete');
    Route::get('/purchase-orders/{id}', [DealerController::class, 'purchaseOrders'])->name('dealer.purchase-orders');
    Route::get('/payments/{id}', [DealerController::class, 'payments'])->name('dealer.payments');
    Route::get('/pending-balance/{id}', [DealerController::class, 'pendingBalance'])->name('dealer.pending-balance');
});
