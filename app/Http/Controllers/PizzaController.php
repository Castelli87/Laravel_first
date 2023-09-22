<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //
    public function index(){

        return view ('pizzas.index',['pizzas' => Pizza::latest()->filter(request(['search']))->get()]);
    }

    public function show(Pizza $pizza){
        return view ('pizzas.show',
        ['pizza'=>$pizza]);
    }
}