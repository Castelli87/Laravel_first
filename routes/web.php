<?php

use App\Models\Pizza;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PizzaController;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  


Route::get('/',[PizzaController::class,'index']);

Route::get('/pizzas/{pizza}',[PizzaController::class,'show']);

//show the registration page
Route::get('/register',[UserController::class,'create'])->middleware('guest');

Route::post('/users',[UserController::class,'store']);

Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//Show just the login page 
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate',[UserController::class,'authenticate']);

//Cart Routes
Route::get('/cart',[CartController::class,'index']);


Route::post('/cart', [CartController::class, 'store']);



//////////////////////////// BELOW HERE IS JUST CODE THAT I WAS USING FOR LEARNING////////////////


/*  this one is to show somithing is there is not that id using a 404 page 
BUT WE ARE USING THE ROUTE BINDING 

Route::get('/pizzas/{id}',function($id){
    $pizza=Pizza::find($id);
    if($pizza){
        return view ('pizza',['pizza'=>$pizza]);
        
    }else {
        abort(404);
    }
});

 */
// // //first page of demostration 
// // Route::get('/', function () {
// //     return view('welcome');
// // });
// //change this page for demostrative pourpose SHOW ALL  
// Route::get('/listings', function () {
//     return view('listings', [
//         'heading' => 'latest listings', 'listings' => Listing::all()
//     ]);
// });
// //Show just one listing 
// Route::get('/listings/{id}',function($id){
//     return view('listing',[
//          'listing' => Listing::find($id)
//     ]);
// });
// //use the plain text 
// Route::get('/hello', function () {
//     return response('Hello World From Laravel');
// });
// //use the id into the url 
// Route::get('/hello/{id}', function ($id) {
//     return response('Sample ' . $id);
// });
// //responding a html page that is into the resources/views 
// Route::get('/ciao', function () {
//     return view('ciao');
// });
// //Use the request city and name into the url 
// Route::get('/search', function (Request $request) {
//     return $request->city . ' ' . $request->name;
// });
// // to debug and show all querys contained into the request
// Route::get('/try', function (Request $request) {
//     return dd($request);
// });