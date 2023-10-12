<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //Show the pizzas into the cart

    public function index(){
        
        return view('cart.index');
    }

    public function store(Request $request){
        dd($request->all());
    }

}