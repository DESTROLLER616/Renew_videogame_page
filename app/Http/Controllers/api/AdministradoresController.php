<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\administrator;
use App\Models\User;
use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administration = User::all() -> where('id_type_user', 3);

        return $administration -> toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $administrator = new User();

        $administrator -> name = $request -> name;
        $administrator -> apellido_p = $request -> apellido_p;
        $administrator -> apellido_m = $request -> apellido_m;
        $administrator -> direction = $request -> direction;
        $administrator -> postcode = $request -> postcode;
        $administrator -> number_phone = $request -> number_phone;
        $administrator -> salario = $request -> salario;
        $administrator -> fecha_contratacion = $request -> fecha_contratacion;
        $administrator -> id_state = $request -> id_state;
        $administrator -> email = $request -> email;
        $administrator -> password = $request -> password;
        $administrator -> image = $request -> image;
        $administrator -> id_status = 1;
        $administrator -> id_type_user = 3;

        $administrator -> save();

        return 'el administrador '.$administrator -> toJson().' Se ha registrado correctamente';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administrator = User::find($id);

        return $administrator -> toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $administration = User::find($id);

        $administration -> name = $request -> nombre;
        $administration -> apellido_p = $request -> apellido_p;
        $administration -> apellido_m = $request -> apellido_m;
        $administration -> direction = $request -> direccion;
        $administration -> postcode = $request -> codigo_postal;
        $administration -> number_phone = $request -> telefono;
        $administration -> salario = $request -> salario;
        $administration -> fecha_contratacion = $request -> fecha_contratacion;
        $administration -> id_state = $request -> estado;
        $administration -> id_status = $request -> status;
        $administration -> email = $request -> email;
        $administration -> password = $request -> contraseña;

        $administration -> save();

        return 'administrador ' . $administration -> toJson() . 'se ha actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administration = User::find($id);

        $administration -> delete();

        return 'el cliente ' . $administration -> toJson() . 'se borro correctamente';
    }
}
