<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list() {

         

        $custom = ['wan', 'hani', 'zalia'];

        //return view('contact');

       return view('internal.customers', [
            'customers'=> $custom  
        ]);
    } 
}
