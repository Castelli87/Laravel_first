@extends('layout')

@section('content')
    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($pizzas) == 0)
            @foreach ($pizzas as $pizza)
                <x-pizza-card :pizza='$pizza' />
            @endforeach
        @else
            <p>No laravel pizzas</p>
        @endunless
    </div>
@endsection
