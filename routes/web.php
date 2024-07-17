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

Route::get("/contato", function() {
    return view("contact");
});

Route::get('/home', function () {

    $names = ["Arthur", "Levy"];
    $nome = "Arthur";
    return view('home', [
        "nome" => $nome, 
        "idade" => 17,
        "names" => $names
    ]
    );
});