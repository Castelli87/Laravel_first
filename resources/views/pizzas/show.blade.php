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

                        <div class="flex  justify-center items-center space-x-7">
                            <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM184 232H328c13.3 0 24 10.7 24 24s-10.7 24-24 24H184c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/></svg>
                            <p class="text-2xl font-bold">1</p>
                            <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                        </div>


                        <a href='#'' class="block bg-laravel text-white mt-6  p-3 py-2 rounded-xl hover:opacity-80">
                            ORDER THIS PIZZA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
