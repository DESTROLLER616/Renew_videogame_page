<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\Order_MController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\Type_employeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideogameController;
use App\Models\Classification;
use Illuminate\Support\Facades\Auth;
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
    return view('videojuego');
});

Route::get('/home', function(){
    return view('welcome');
});


Route::view('videojuego','videojuego')->name('videojuego');
Route::view('nosotros','nosotros')->name('nosotros');
Route::view('nosotros','nosotros')->name('nosotros');
Route::view('xbox','xbox')->name('xbox');
Route::view('playstation4','playstation4')->name('playstation4');
Route::view('playstation5','playstation5')->name('playstation5');
Route::view('nitendo','nitendo')->name('nitendo');
Route::view('consolas','consolas')->name('consolas');




//**!Ruta de los controladores, NO MOVER ESTO Y SIEMPRE DEBE DE ESTAR HASTA ABAJO DE TODO ESTE DOCUMENTO
//**TODO: Creacion de rutas para el CRUD de la pagina

// Route::controller(AdministrationController::class)->group(function(){
//     Route::get('administration/index', 'index');
//     Route::get('administration/create', 'create');
//     Route::get('administration/update', 'update');
//     Route::get('administration/show', 'show');
// });

// Route::controller(ClassificationController::class)->group(function(){
//     Route::get('classification/index', 'index');
//     Route::get('classification/create', 'create');
//     Route::get('classification/update', 'update');
//     Route::get('classification/show', 'show');
// });

// Route::controller(ClientController::class)->group(function(){
//     Route::get('client/index', 'index');
//     Route::get('client/create', 'create');
//     Route::get('client/update', 'update');
//     Route::get('client/show', 'show');
// });

// Route::controller(ConsoleController::class)->group(function(){
//     Route::get('console/index', 'index');
//     Route::get('console/create', 'create');
//     Route::get('console/update', 'update');
//     Route::get('console/show', 'show');
// });

// Route::controller(EmployerController::class)->group(function(){
//     Route::get('employee/index', 'index');
//     Route::get('employee/create', 'create');
//     Route::get('employee/update', 'update');
//     Route::get('employee/show', 'show');
// });

// Route::controller(GenderController::class)->group(function(){
//     Route::get('gender/index', 'index');
//     Route::get('gender/create', 'create');
//     Route::get('gender/update', 'update');
//     Route::get('gender/show', 'show');
// });

Route::controller(OrderController::class)->group(function(){
    Route::get('order/index', 'index');
    Route::get('order/create', 'create');
    Route::get('order/update', 'update');
});

// Route::controller(RegionController::class)->group(function(){
//     Route::get('region/index', 'index');
//     Route::get('region/create', 'create');
//     Route::get('region/update', 'update');
//     Route::get('region/show', 'show');
// });

// Route::controller(StateController::class)->group(function(){
//     Route::get('state/index', 'index');
//     Route::get('state/create', 'create');
//     Route::get('state/update', 'update');
//     Route::get('state/show', 'show');
// });

// Route::controller(StatusController::class)->group(function(){
//     Route::get('status/index', 'index');
//     Route::get('status/create', 'create');
//     Route::get('status/update', 'update');
//     Route::get('status/show', 'show');
// });

// Route::controller(Type_employeeController::class)->group(function(){
//     Route::get('temployee/index', 'index');
//     Route::get('temployee/create', 'create');
//     Route::get('temployee/update', 'update');
//     Route::get('temployee/show', 'show');
// });

// Route::controller(UserController::class)->group(function(){
//     Route::get('user/index', 'index');
//     Route::get('user/create', 'create');
//     Route::get('user/update', 'update');
// });

// Route::controller(VideogameController::class)->group(function(){
//     Route::get('videogame/index', 'index');
//     Route::get('videogame/create', 'create');
//     Route::get('videogame/update', 'update');
//     Route::get('videogame/show', 'show');
// });

Route::resource('console', ConsoleController::class);
Route::resource('region', RegionController::class);
Route::resource('gender', GenderController::class);
Route::resource('classification', ClassificationController::class);
Route::resource('temployee', Type_employeeController::class);
Route::resource('status', StatusController::class);
Route::resource('state', StateController::class);
Route::resource('videogame', VideogameController::class);
Route::resource('client', ClientController::class);
Route::resource('administration', AdministrationController::class);
Route::resource('employee', EmployerController::class);
Route::resource('product', ProductController::class);
Route::resource('order', CartController::class);

Auth::routes();

Auth::routes();