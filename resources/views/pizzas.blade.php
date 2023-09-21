@extends('layout')

@section('content')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($pizzas) == 0)
            @foreach ($pizzas as $pizza)
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img class="hidden w-48 mr-6 md:block" src="images/Margherita.jpg" alt="" />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/pizzas/{{$pizza['id']}}">{{ $pizza['name'] }}</a>
                            </h3>
                            {{-- <div class="text-xl font-bold mb-4">{{$pizza['category']}}</div> --}}
                            @php
                                $toppings = explode(', ', $pizza['toppings']);
                            @endphp
                            <ul class="flex flex-row">
                                @foreach ($toppings as $topping)
                                    <li
                                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                        <a href="#">{{ $topping }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="text-lg mt-4">
                                <p>£: {{ $pizza['price'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No laravel pizzas</p>
        @endunless
    </div>
@endsection
