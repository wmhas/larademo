<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list() {

         

        $custom = ['wan', 'hani', 'zalia'];

        $customers = Customer::all();

        //dd($customers);


       return view('internal.customers', [
            'customers'=> $customers  
        ]);
    } 

    public function store() {
        
        //dd(request('custname'));

        $customer = new Customer();
        $customer->name=request('custname');
        $customer->save();

        return back();
    }
}
