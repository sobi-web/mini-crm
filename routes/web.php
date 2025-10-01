<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TrashedCustomerController;

Route::get('/' , function (){
   return  redirect()->route('customer.index');
});

//Route::resource('/customer/trashed' , TrashedCustomerController::class)->only(['index' , 'destroy' , 'restore'])->names('customer.trashed')->;


Route::get('/customer/trashed', [TrashedCustomerController::class, 'index'])->name('customer.trashed.index');
Route::delete('/customer/trashed/{id}', [TrashedCustomerController::class, 'destroy'])->name('customer.trashed.destroy');
Route::patch('/customer/trashed/{id}', [TrashedCustomerController::class, 'restore'])->name('customer.trashed.restore');

Route::resource('customer' ,CustomerController::class);

