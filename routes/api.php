<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\InvoiceController;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function() {
    Route::apiResource('customers', CustomerController::class);

    Route::apiResource('invoices', InvoiceController::class);

    Route::get('/customer/invoices/{id}', [CustomerController::class, 'getInvoices']);

    Route::get('/customer/{customer}', [CustomerController::class, 'show']);
});
