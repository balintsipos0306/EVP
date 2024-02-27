<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asd', function () {
    $nev = "Bálint";
    return view('Hello',[
        'nev' => $nev
    ]);
});

Route::get('/tombkiiras', function () {
    $array = ["Lajos", "Béla", "Tibi"];
    return view('ArrayView',[
        'tomb' => $array
    ]);
});

Route::get('/post/{cim}', function ($cim) {
    $array = ["Lajos", "Béla", "Tibi"];
    return view('post',[
        'nev' =>$array[$cim] ?? "Nincs ilyen név"
    ]);
});
