<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    //Show the pizzas into the cart

    public function index(){
        
        return view('cart.index');
    }

    public function store(Request $request){
        $pizza = Pizza::findOrFail($request -> pizza_id);

       Cart::add([
        'id'=>$pizza->id,
        'name'=>$pizza->name,
        'qty'=>$request ->quantity,
        'price'=>$pizza ->price,
        'weight'=>$request->total_price,    
       ]);

       return redirect('/')->with('message', 'Items added to cart');
    }
    

}