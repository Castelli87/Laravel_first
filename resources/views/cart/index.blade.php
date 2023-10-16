@extends('layout')
@section('content')
    @include('partials._search')

    <div class="bg-gray-100 min-h-screen p-4">
        <div class="  bg-white p-4 rounded-md shadow-lg ">
            <h1 class="text-4xl text-center font-semibold mt-4 mb-9">Basket Shop</h1>
            <div class="hidden md:flex items-center border-b-2 border-gray-300 mb-4 font-black text-2xl">
                <div class="w-1/6 font-black text-2xl m-4">Image</div>
                <div class="w-2/6 m-4">Details</div>
                <div class="w-1/6 m-4 ml-5">Price</div>
                <div class="w-1/6 m-4">Quantity</div>
                <div class="w-1/6 m-4 ">Total</div>
                <div class="w-1/6 m-4 text-right"><a class="border border-2 border-black p-1" href="/cart/clear">Clear All</a></div>
            </div>
            @foreach (Cart::content() as $pizza)
                <div class="flex flex-col mx-auto md:flex-row items-center border-b-2 border-gray-300 py-5 mb-3 text-xl">
                    <div class="mb-3 md:w-1/6 mb-2 md:mb-0">
                        <img src="{{ asset('images/') . '/' . $pizza->name . '.jpg' }}" alt="Product Image"
                            class="w-40 rounded-md">
                    </div>
                    <div class="mb-3 md:w-2/6 md:pl-2">
                        <p class="text-extrabold text-2xl">{{ $pizza->name }}</p>
                    </div>
                    <div class="mb-3 md:w-1/6 md:pl-4">
                        <p>£{{ $pizza->price }}</p>
                    </div>
                    <div class="mb-3 md:w-1/6 md:pl-4">
                        <div class="flex items-center">
                            {{-- <button type="button"><i class="fa-solid fa-circle-minus text-xl " id="increase"></i></button> --}}
                            <input type="text" readonly
                                value="{{ $pizza->qty }}"class="h-10 w-10 text-center text-2xl font-bold mx-2"
                                id="number">
                            {{-- <button type="button"><i class="fa-solid fa-circle-plus text-xl" id="increase"></i></button> --}}
                        </div>
                    </div>
                    <div class="mb-3 md:w-1/6 md:pl-4">
                        <p>£{{ $pizza->qty * $pizza->price }}</p>
                    </div>
                    <div class="md:w-1/6 md:pl-4 text-right">
                        <a  href="/cart/{{$pizza->rowId}}"
                            class="w-8 h-8 border rounded-md text-white font-bold bg-laravel hover:bg-red-700">X</a>

                    </div>
                </div>
            @endforeach
            @if (Cart::content()->count() === 0)
                <h2 class="text-3xl text-center font-semibold mt-12 mb-4 ">Cart is empty</h2>
            @endif


        </div>
        <div class="md:w-2/4 bg-white p-4 rounded-md shadow-lg mt-6 mx-auto">
            <div class="mt-4 flex justify-between">
                <p class="text-2xl font-semibold">Total Cart:</p>
                <p class="text-2xl font-semibold"> £{{ Cart::subtotal() }}</p>
            </div>
            <button
                class="w-full mt-4 p-2 bg-laravel text-white font-bold rounded-md hover:bg-red-700">Checkout</button>
        </div>
    </div>

    </div>
@endsection
@section('footer-scripts')
<script>
console.log();
</script>
@endsection