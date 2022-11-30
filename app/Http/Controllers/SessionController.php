<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function __invoke()
    {
        
    }

    public function editar(Request $request){
        $user = User::find($request -> id);

        $user -> name = $request -> nombre;
        $user -> apellido_p = $request -> apellido_p;
        $user -> apellido_m = $request -> apellido_m;
        $user -> direction = $request -> direction;
        $user -> postcode = $request -> codigo_postal;
        $user -> number_phone = $request -> telefono;
        $user -> saldo = $request -> saldo;
        $user -> id_state = $request -> estado;
        $user -> email = $request -> email;

        $user -> save();

        return redirect() -> to(url('/'));
    }
}
