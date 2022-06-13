<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Routing\Route as RoutingRoute;
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

route::get("/nombre/{nombre}/{apellido?}", function($nombre,$apellido=""){
   return "Hola " . $nombre ." ".$apellido. " elao?"; 
})->name("SaludarNombreCompleto");

Route::resource("/estudiantes", StudentController::class);

Route::resource("/materias", SubjectController::class);
