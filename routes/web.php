<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClienteController;


 route::get('/product', [ProductController::class, 'inicio']);

Route::get('/', function () {
    return view('home');
});

//Ruta para mostrar la vista de show.blade.php
Route::get('/products/show', [ProductController::class, 'index']);

Route::get('/products/create',  [ProductController::class, 'create']);


//Ruta para mostrar la vista de show.blade.php
Route::get('/products/edit/{product}', [ProductController::class, 'edit']);

//Ruta para mostrar la vista de show.blade.php
Route::post('/products/store', [ProductController::class, 'store']);

Route::put('/products/update/{product}', [ProductController::class, 'update']);
Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy']);

//categoria

Route::get('/categoria/show', function () {
    return view('categoria/show');
});

Route::get('/categoria/create', function () {
    return view('categoria/create');
});

Route::get('/categoria/update', function () {
    return view('categoria/update');
});

//cliente

//Route::get('/cliente/show', function () {
//  return view('cliente/show');
//});

//Route::get('/cliente/create', function () {
//    return view('cliente/create');
//});

//Route::get('/cliente/update', function () {
//    return view('cliente/update');
//});

Route::get('/cliente/show', [ClienteController::class, 'index']);

Route::get('/cliente/create',  [ClienteController::class, 'create']);


//Ruta para mostrar la vista de show.blade.php
Route::get('/cliente/edit/{product}', [ClienteController::class, 'edit']);

//Ruta para mostrar la vista de show.blade.php
Route::post('/cliente/store', [ClienteController::class, 'store']);

Route::put('/cliente/update/{product}', [ClienteController::class, 'update']);
Route::delete('/cliente/destroy/{id}', [ClienteController::class, 'destroy']);

//nombre

Route::get('/inicio/nombre', function () {
    return view('inicio/nombre',['nombre'=>'Santos Enmanuel'],['apellido'=>'Chicas Garcia']);
});