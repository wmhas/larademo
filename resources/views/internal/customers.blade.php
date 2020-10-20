
@extends('layout')

@section('content')
    

    <h1> Customers </h1>

    <form action="my-customers" method="POST" class="pb-5">
    
        <div class="input-group">
            <input type="text" name="custname">
        </div>

        <button type="submit">Add Customer</button>

        @csrf
 
    </form>

    <ul> 

        <li> customer 1 </li>
        <li> customer 2 </li>
        <li> customer 3 </li>

        @foreach ($customers as $item)

            <li> {{ $item->name}} </li>

        @endforeach
    </ul>
@endsection
