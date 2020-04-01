<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

                                        //Middleware es para proteger las rutas
Route::get('pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
Route::get('orders/pizzas/create', 'PizzaController@create')->name('pizzas.create');
Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
Route::get('/pizzas/{id}', 'PizzaController@show')->middleware('auth')->name('pizzas.show');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->middleware('auth')->name('pizzas.destroy');

//'register' => false es para que no aparezca la funcion de registrarse
Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
