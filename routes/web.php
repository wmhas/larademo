<?php
 

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact-us', function () {
    return view('contact');
});

Route::view('about-us','about');
Route::view('/','home');
Route::view('/welcome','welcome');

Route::get('customers', function () {

    $custom = ['wan', 'hani', 'zalia'];

    return view('internal.customers', [
        'customers'=> $custom  
    ]);
});


Route::get('my-customers','CustomersController@list');

Route::post('my-customers','CustomersController@store');



