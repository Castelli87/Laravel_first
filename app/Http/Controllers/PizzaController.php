<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //
    public function index(){
        return view ('pizzas',['pizzas' => Pizza::all()]);
    }

    public function show(Pizza $pizza){
        return view ('pizza',
        ['pizza'=>$pizza]);
    }
}