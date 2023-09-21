@props(['pizza'])

<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{asset('images/').'/'.$pizza->name.'.jpg'}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/pizzas/{{$pizza['id']}}">{{ $pizza->name }}</a>
            </h3>
            {{-- <div class="text-xl font-bold mb-4">{{$pizza['category']}}</div> --}}

           <x-pizza-toppings :toppings='$pizza->toppings'/>
            
            <div class="text-lg mt-4">
                <p>£: {{ $pizza->price }}</p>
            </div>
        </div>
    </div>
</div>