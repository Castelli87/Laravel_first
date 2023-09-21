@extends('layout')

@section('content')
    <h2 class="">{{ $pizza['name'] }}</h2>

    <p>{{ $pizza['toppings'] }}</p>

    <p>{{ $pizza['price'] }}</p>

    <p>{{ $pizza['preparation_time'] }} mins</p>
@endsection
