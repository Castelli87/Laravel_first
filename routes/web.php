<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// //first page of demostration 
// Route::get('/', function () {
//     return view('welcome');
// });

//change this page for denostrativce porpuse 
Route::get('/', function () {
    return view('listings', ['heading' => 'latest listings', 'listings' => [
        [
            'id' => '1',
            'title' => 'Listing One',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio placeat excepturi minus, nostrum facere ducimus et cupiditate amet aspernatur iure.'
        ],
        [
            'id' => '2',
            'title' => 'Listing Two',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio placeat excepturi minus, nostrum facere ducimus et cupiditate amet aspernatur iure.'
        ]
    ]]);
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
