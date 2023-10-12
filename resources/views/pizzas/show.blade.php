@extends('layout')

@section('content')
    @include('partials._search')

    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-49 mr-6 mb-6" src="{{ asset('images/') . '/' . $pizza->name . '.jpg' }}" alt="" />

                <h3 class="text-2xl mb-2">{{ $pizza->name }}</h3>
                <div class="text-xl font-bold mb-4">{{ $pizza->category }}</div>
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

                        {{-- IN HERE SHOULD START AND FINISH THE FORM THAT GONNA BE USED TO STORE INTO THE CART --}}

                        <form method="POST" action="/cart" id="modal_add_to_cart_form">
                            @csrf
                            <input type="hidden" name="pizza_id" value="{{ $pizza->id }}">
                            <input type="hidden" name="name" value="{{ $pizza->name }}">
                            <input type="hidden" name="total_price" id="total_price" value="{{$pizza->price}}">

                            <div class="flex justify-center items-center space-x-7 mb-7">
                                <button type="button"><i class="fa-solid fa-circle-minus" id="decrease"></i></button>
                                <input type="text" name="quantity" placeholder="1" value="1" readonly
                                    class=" font-bold" id="number">
                                <button type="button"><i class="fa-solid fa-circle-plus" id="increase"></i></button>
                                <input type="hidden" name='price' id="price" value="{{ $pizza->price }}">

                            </div>
                            <button type="submit"
                                class=" bg-laravel text-white mt-6  p-3 py-2 rounded-xl hover:opacity-80">
                                ORDER THIS PIZZA</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-scripts')
    <script>
        // Get references to the plus and minus icons and the number element
        const increaseButton = document.getElementById('increase');
        const decreaseButton = document.getElementById('decrease');
        const numberElement = document.getElementById('number');
        const price = document.getElementById('price')
        const totalPriceElement= document.getElementById('total_price')

        // Initialize a variable to store the current number
        let currentNumber = parseInt(numberElement.value);
        let currenPrice = parseFloat(totalPriceElement.value)
    

        // Event listener for the minus button
        decreaseButton.addEventListener('click', () => {
            if (currentNumber > 1) {
                currentNumber--; // Decrement the number (if greater than 1)
                numberElement.value = currentNumber
                currenPrice= currentNumber* price.value
                totalPriceElement.value =  currenPrice
                console.log(currentNumber* price.value)

            }
        });
        // Event listener for the plus button
        increaseButton.addEventListener('click', () => {
            currentNumber++; // Increment the number
            // Update the displayed number
            numberElement.value = currentNumber
            currenPrice= currentNumber* price.value
            totalPriceElement.value =  currenPrice
            console.log(currentNumber * price.value)
        });
    </script>
@endsection
