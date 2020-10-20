<?php
 

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact-us', function () {
    return view('contact');
});

Route::view('about-us','about');
Route::view('/','welcome');
Route::view('/','welcome');

Route::get('customers', function () {

    $custom = ['wan', 'hani', 'zalia'];

    return view('internal.customers', [
        'customers'=> $custom  
    ]);
});



