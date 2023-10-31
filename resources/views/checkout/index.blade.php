@extends('layout')
@section('content')
<div class="container mx-auto p-6">

    <div class="mx-auto p-6 bg-gray-300 rounded">
        <h2 class="text-2xl text-center font-semibold mb-4">Checkout</h2>
        <form method="" >
            @csrf
    
            <!-- Name on Card Field -->
            <div class="mb-4">
                <label for="name_on_card" class="block text-md  font-semibold">Name on Card</label>
                <input type="text" name="name_on_card" class="w-full p-2 border rounded" required>
            </div>
    
            <!-- Card Number Field -->
            <div class="mb-4">
                <label for="card_number" class="block text-md font-semibold">Card Number</label>
                <input type="text" name="card_number" class="w-full p-2 border rounded" required>
            </div>
    
            <div class="md:flex md:justify-between">
                <!-- Expiration Date Field -->
                <div class="mb-4 md:w-1/2 md:pr-2">
                    <label for="expiration_date" class="block  text-md font-semibold">Expiration Date</label>
                    <input type="text" name="expiration_date" class="w-full p-2 border rounded" required>
                </div>
    
                <!-- CVV Field -->
                <div class="md:w-1/2">
                    <label for="cvv" class="block text-md  font-semibold">CVV</label>
                    <input type="text" name="cvv" class="w-full p-2 border rounded" required>
                </div>
            </div>
    
            <!-- Address Field -->
            <div class="mb-4">
                <label for="address" class="block text-md font-semibold">Address</label>
                <input type="text" name="address" class="w-full p-2 border rounded" required>
            </div>
    
            <!-- City Field -->
            <div class="mb-4">
                <label for="city" class="block text-md font-semibold">City</label>
                <input type="text" name="city" class="w-full p-2 border rounded" required>
            </div>
    
            <div class="mb-4 md:flex md:justify-between">
                <!-- State/Province Field -->
                <div class="mb-4 md:w-1/2 md:pr-2">
                    <label for="state" class="block text-md font-semibold">State/Province</label>
                    <input type="text" name="state" class="w-full p-2 border rounded" required>
                </div>
    
                <!-- Postal Code Field -->
                <div class="mb-4 md:w-1/2">
                    <label for="postal_code" class="block text-md font-semibold">Postal Code</label>
                    <input type="text" name="postal_code" class="w-full p-2 border rounded" required>
                </div>
            </div>
    
            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"  class="bg-laravel text-white font-semibold py-2 px-4 rounded  hover:bg-red-700 mt-4">Place Order: £ {{Cart::subtotal()}}</button>
                
            </div>
        </form>
    </div>
    
@endsection