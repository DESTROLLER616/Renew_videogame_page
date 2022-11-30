<?php

use App\Http\Controllers\api\AdministradoresController;
use App\Http\Controllers\api\ClasificacionesController;
use App\Http\Controllers\api\ClientesController;
use App\Http\Controllers\api\ConsolasController;
use App\Http\Controllers\api\EmpleadoController;
use App\Http\Controllers\api\EstadosController;
use App\Http\Controllers\api\EstatusController;
use App\Http\Controllers\api\GenerosController;
use App\Http\Controllers\api\RegionesController;
use App\Http\Controllers\api\Tipo_empleoController;
use App\Http\Controllers\api\VideojuegosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VideogameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('session', [SessionController::class], 'login');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::put('update', [AuthController::class, 'update']);
    Route::delete('delete', [AuthController::class, 'delete']);
    Route::get('videogames', [VideojuegosController::class, 'index']);
    Route::post('store', [VideojuegosController::class, 'store']);
    Route::put('updatev', [VideogameController::class, 'update']);
    Route::delete('destroy', [VideogameController::class, 'destroy']);
});

Route::apiResource('clientes', ClientesController::class);
Route::apiResource('administradores', AdministradoresController::class);
Route::apiResource('empleados', EmpleadoController::class);
Route::apiResource('videojuegos', VideojuegosController::class);
Route::apiResource('clasificaciones', ClasificacionesController::class);
Route::apiResource('consolas', ConsolasController::class);
Route::apiResource('estados', EstadosController::class);
Route::apiResource('estatus', EstatusController::class);
Route::apiResource('generos', GenerosController::class);
Route::apiResource('regiones', RegionesController::class);
Route::apiResource('tipo_empleo', Tipo_empleoController::class);