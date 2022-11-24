<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\client;
use App\Models\State;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = User::all();

        return $client -> toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new User();

        $client -> name = $request -> nombre;
        $client -> apellido_p = $request -> apellido_p;
        $client -> apellido_m = $request -> apellido_m;
        $client -> direction = $request -> direccion;
        $client -> postcode = $request -> codigo_postal;
        $client -> number_phone = $request -> telefono;
        $client -> saldo = $request -> saldo;
        $client -> id_state = $request -> estado;
        $client -> email = $request -> email;
        $client -> image = $request -> image;
        $client -> password = $request -> contraseña;
        $client -> id_status = 1;
        $client -> id_type_user = 2;

        $client -> save();

        return 'cliente ' . $client -> toJson() . ' registrado correctamente';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = User::find($id);

        return $client -> toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = User::find($id);

        $client -> name = $request -> nombre;
        $client -> apellido_p = $request -> apellido_p;
        $client -> apellido_m = $request -> apellido_m;
        $client -> direction = $request -> direccion;
        $client -> postcode = $request -> codigo_postal;
        $client -> number_phone = $request -> telefono;
        $client -> saldo = $request -> saldo;
        $client -> id_state = $request -> estado;
        $client -> email = $request -> email;
        $client -> password = $request -> contraseña;
        $client -> id_status = $request -> status;
        
        $client -> save();

        return 'cliente actualizado ' . $client -> toJson();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = User::find($id);

        $client -> delete();

        return 'el cliente ' . $client -> toJson() . ' se elimino correctamente';
    }
}
