<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/' , function (){
   return  redirect()->route('customer.index');
});

Route::resource('customer' , \App\Http\Controllers\CustomerController::class);
