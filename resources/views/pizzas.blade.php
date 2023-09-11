<h1>LARAVEL PIZZA'S</h1>

@unless (count($pizzas)== 0)

@foreach ($pizzas as $pizza)
<a href="/pizzas/{{$pizza['id']}}"><h2>{{$pizza['name']}}</h2></a>
<p>{{$pizza['price']}}</p>
@endforeach

@else
<p>No laravel pizzas</p>
@endunless
    
