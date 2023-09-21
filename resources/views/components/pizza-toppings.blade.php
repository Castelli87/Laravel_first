@props(['toppings'])

@php
$toppings = explode(', ', $toppings);
@endphp
<ul class="flex flex-row">
@foreach ($toppings as $topping)
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="#">{{ $topping }}</a>
    </li>
@endforeach
</ul>