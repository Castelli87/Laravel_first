@extends('layout')

@section('content')
    @include('partials._search')
    {{-- <h2 class="">{{ $pizza['name'] }}</h2>

    <p>{{ $pizza['toppings'] }}</p>

    <p>{{ $pizza['price'] }}</p>

    <p>{{ $pizza['preparation_time'] }} mins</p> --}}
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-49 mr-6 mb-6" src="{{ asset('images/') . '/' . $pizza->name . '.jpg' }}" alt="" />

                <h3 class="text-2xl mb-2">{{ $pizza->name }}</h3>
                <div class="text-xl font-bold mb-4">{{$pizza->category}}</div>
                <ul class="flex m-3">

                    <x-pizza-toppings :toppings='$pizza->toppings' />

                </ul>
                <div class="text-lg my-4">
                    £: {{ $pizza->price }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <div class="text-lg space-y-6">
                        <p>Preparation time: {{ $pizza->preparation_time }} mins</p>

                        <a href='#'' class="block bg-laravel text-white mt-6  p-3 py-2 rounded-xl hover:opacity-80">
                            ORDER THIS PIZZA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
