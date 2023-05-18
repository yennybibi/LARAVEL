<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientesController;
use Illuminate\Routing\RouteGroup;

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
    return view('auth.login');
});


/*Route::get('/Clientes', function () {
    return view('Clientes.index');
});

//routa del metodo create
Route::get('/Clientes/create',[ClientesController::class, 'create']);
*/

//Acceder a todas las url(vistas)
Route::resource('Clientes', ClientesController::class)->middleware('auth');
//solo si desea desaparecer algunas opciones
//Auth::routes(['register' =>false, 'reset' =>false]);
Auth::routes();


Route::get('/home', [App\Http\Controllers\ClientesController::class, 'index'])->name('home');


//grupo al que pertenece la autentificacion
Route::group(['middleware' => 'auth'], function (){

Route::get('/', [App\Http\Controllers\ClientesController::class, 'index'])->name('home');
});