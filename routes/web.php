<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

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
    return view('app');
});

//Route::get('/tareas', function () {
//    return view('tareas.index');
//});
Route::get('/tareas', [TareaController::class, 'index'])->name('tareas');

// Aui va una ruta POST,POST sirve para enviar datos 
// Esta ruta en el primer argumento va la ruta el segundo se refiere al controllador y el tercero a como se va a llamar la ruta
Route::post('/tareas', [TareaController::class, 'store'])->name('tareas');

