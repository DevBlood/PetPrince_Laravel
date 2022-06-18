<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;


/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
    return view('index');
}); */

Route::get('/', HomeController::class);

/* Route::get('productos', function (){
    return 'Bienvenidos a productos';
}); */

Route::controller(ProductoController::class) -> group(function() {
    Route::get('productos', 'index');
    Route::get('productos/create', 'create');
    Route::get('productos/{pruebas}', 'show');
});



/* Route::get('productos/{producto}', function ($producto){
    return "Bienvenidos a: $producto";
});

Route::get('productos/{producto1}/{producto2}', function ($prueba1, $producto2){
    return "Bienvenidos a productos de: $prueba1 $producto2";
}); */
 


