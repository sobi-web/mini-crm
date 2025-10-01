<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use phpDocumentor\Reflection\Types\Collection;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'last_name', 'phone', 'email', 'card_number', 'about'];


    protected static function fillter(?string $keyword , ?string $order_by )
    {
        if ($keyword) {
            $customers = Customer::where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('email', 'LIKE', "%{$keyword}%")
                ->orWhere('phone', 'LIKE', "%{$keyword}%")
                ->orWhere('last_name', 'LIKE', "%{$keyword}%")
                ->orWhere('card_number', 'LIKE', "%{$keyword}%");


        } else {
            $customers = Customer::query();
        }


        return $customers->orderBy('id', $order_by ?: 'desc')->get();


    }



}
