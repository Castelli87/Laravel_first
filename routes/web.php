<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\Pizza;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',function(){
    return view ('pizzas',['pizzas' => Pizza::all()]);
});

Route::get('/pizzas/{id}',function($id){
    return view ('pizza',['pizza'=>Pizza::find($id)]);
});












// //first page of demostration 
// Route::get('/', function () {
//     return view('welcome');
// });







//change this page for demostrative pourpose SHOW ALL  
Route::get('/listings', function () {
    return view('listings', [
        'heading' => 'latest listings', 'listings' => Listing::all()
    ]);
});


//Show just one listing 

Route::get('/listings/{id}',function($id){
    return view('listing',[
         'listing' => Listing::find($id)
    ]);
});

//use the plain text 
Route::get('/hello', function () {
    return response('Hello World From Laravel');
});

//use the id into the url 
Route::get('/hello/{id}', function ($id) {
    return response('Sample ' . $id);
});

//responding a html page that is into the resources/views 
Route::get('/ciao', function () {
    return view('ciao');
});
//Use the request city and name into the url 
Route::get('/search', function (Request $request) {
    return $request->city . ' ' . $request->name;
});

// to debug and show all querys contained into the request
Route::get('/try', function (Request $request) {
    return dd($request);
});