
@extends('layout')

@section('content')
    

    <h1> Customers </h1>

    <ul> 

        <li> customer 1 </li>
        <li> customer 2 </li>
        <li> customer 3 </li>

        @foreach ($customers as $item)

            <li> {{ $item}} </li>

        @endforeach
    </ul>
@endsection
