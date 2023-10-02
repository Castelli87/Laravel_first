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

                        <div class="flex justify-center items-center space-x-7">
                            <i class="fa-solid fa-circle-minus" id="decrease"></i>
                            <p class="text-2xl font-bold" id="number">0</p>
                            <i class="fa-solid fa-circle-plus" id="increase"></i>
                        </div>

                        <a href='#' class="block bg-laravel text-white mt-6  p-3 py-2 rounded-xl hover:opacity-80">
                            ORDER THIS PIZZA</a>
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

        // Initialize a variable to store the current number
        let currentNumber = 0;

        // Function to update the number element
        function updateNumber() {
            numberElement.textContent = currentNumber;
        }

        // Event listener for the plus button
        increaseButton.addEventListener('click', () => {
            currentNumber++; // Increment the number
            updateNumber(); // Update the displayed number
        });

        // Event listener for the minus button
        decreaseButton.addEventListener('click', () => {
            if (currentNumber > 0) {
                currentNumber--; // Decrement the number (if greater than 1)
                updateNumber(); // Update the displayed number
            }
        });
    </script>
@endsection
