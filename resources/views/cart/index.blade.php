@extends('layout')
@section('content')
    @include('partials._search')

    <div class="bg-gray-100 min-h-screen p-4">
        <div class="  bg-white p-4 rounded-md shadow-lg ">
            <h1 class="text-4xl text-center font-semibold mt-4 mb-9">Basket Shop</h1>
            <div class="hidden md:flex items-center border-b-2 border-gray-300 mb-4 font-black text-2xl">
                <div class="w-1/6 font-black text-2xl">Image</div>
                <div class="w-2/6">Details</div>
                <div class="w-1/6 ml-5">Price</div>
                <div class="w-1/6">Quantity</div>
                <div class="w-1/6">Total</div>
                <div class="w-1/6 text-right">Clear All</div>
            </div>

            <!-- Sample cart item -->
            <div class="flex flex-col mx-auto md:flex-row items-center border-b-2 border-gray-300 py-5 mb-3 text-xl">
                <div class="mb-3 md:w-1/6 mb-2 md:mb-0">
                    <img src="/images/Margherita.jpg" alt="Product Image" class="w-40 rounded-md">
                </div>
                <div class="mb-3 md:w-2/6 md:pl-2">
                    <p class="text-extrabold text-2xl">Margherita</p>
                </div>
                <div class="mb-3 md:w-1/6 md:pl-4">
                    <p>£9.99</p>
                </div>
                <div class="mb-3 md:w-1/6 md:pl-4">
                    <div class="flex items-center">
                        <button type="button"><i class="fa-solid fa-circle-minus text-xl " id="increase"></i></button>
                        <input type="text" value="1"class="h-10 w-10 text-center text-2xl font-bold mx-2" id="number"">
                        <button type="button"><i class="fa-solid fa-circle-plus text-xl" id="increase"></i></button>
                    </div>
                </div>
                <div class="mb-3 md:w-1/6 md:pl-4">
                    <p>$9.99</p>
                </div>
                <div class="md:w-1/6 md:pl-4 text-right">
                    <button class="w-8 h-8 border rounded-md text-white font-bold bg-laravel hover:bg-red-700">X</button>

                </div>
            </div>
           

        </div>
    </div>
@endsection
