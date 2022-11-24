<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\employer;
use App\Models\User;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employer = User::all() -> where('id_type_user', 1);

        return $employer -> toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employeer = new User();

        $employeer -> name = $request -> nombre;
        $employeer -> apellido_p = $request -> apellido_p;
        $employeer -> apellido_m = $request -> apellido_m;
        $employeer -> direction = $request -> direccion;
        $employeer -> postcode = $request -> codigo_postal;
        $employeer -> number_phone = $request -> telefono;
        $employeer -> salario = $request -> salario;
        $employeer -> fecha_contratacion = $request -> contratacion;
        $employeer -> id_state = $request -> estado;
        $employeer -> email = $request -> email;
        $employeer -> password = $request -> contraseña;
        $employeer -> image = $request -> image;
        $employeer -> id_status = 1;
        $employeer -> id_type_user = 1;

        $employeer -> save();

        return $employeer -> toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employer = User::find($id);

        return $employer -> toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employeer = User::find($id);

        $employeer -> name = $request -> nombre;
        $employeer -> apellido_p = $request -> apellido_p;
        $employeer -> apellido_m = $request -> apellido_m;
        $employeer -> direction = $request -> direccion;
        $employeer -> postcode = $request -> codigo_postal;
        $employeer -> number_phone = $request -> telefono;
        $employeer -> salario = $request -> saldo;
        $employeer -> fecha_contratacion = $request -> contratacion;
        $employeer -> id_state = $request -> estado;
        $employeer -> email = $request -> email;
        $employeer -> password = $request -> contraseña;
        $employeer -> id_status = $request -> estatus;

        $employeer -> save();

        return $employeer -> toJson();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employer = User::find($id);

        $employer -> delete();

        return $employer -> toJson();
    }
}
