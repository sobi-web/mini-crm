<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        if ($request->has('keyword')) {
           $customers = Customer::where('name', 'LIKE', "%{$request->keyword}%")
               ->orWhere('email', 'LIKE', "%{$request->keyword}%")
               ->orWhere('phone', 'LIKE', "%{$request->keyword}%")
               ->orWhere('last_name', 'LIKE', "%{$request->keyword}%")
               ->orWhere('card_number', 'LIKE', "%{$request->keyword}%")
               ->get();

        } else {
            $customers = Customer::query();
        }
         if ($request->has('order_by')) {
             $customers = Customer::orderBy('id', $request->order_by ?? 'desc');
         }
        return view('customer.index',[
            'customers' => $customers->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        Customer::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'card_number' => $request->card_number,
            'birth_date' => 1000,
            'about' => $request->about

      ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.show',['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit',['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
