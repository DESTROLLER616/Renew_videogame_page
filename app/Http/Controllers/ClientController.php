<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
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
        $client -> password = $request -> contraseña;
        $client -> id_status = 1;
        $client -> id_type_user = 2;

        if ($image = $request->file('image')) {
            $destinationPath = 'img/cliente/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $client -> image = "$profileImage";
        }

        $client -> save();

        return redirect() -> route('client.show', $client);
    }

    public function index(){
        return view('crud.client.data');
    }

    public function create(){
        return view('crud.client.create') -> with('states', State::all()) -> with('statuses', Status::all());
    }

    public function show(){
        return view('crud.client.show') -> with('clients', (DB::table('users')
        -> join('type__employees', 'type__employees.id', '=', 'users.id_type_user')
        -> join('states', 'users.id_state', '=', 'states.id')
        -> join('statuses', 'users.id_status', '=', 'statuses.id')
        -> select('users.*', 'type__employees.tipo_empleado', 'states.nombre_estado', 'statuses.nombre_status') -> get()));
    }

    public function update(Request $request,$id){
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

        return redirect() -> route('client.show', $client);
    }

    public function edit($id){
        $client = User::find($id);

        return view('crud.client.edit', compact('client')) -> with('states', State::all()) -> with('statuses', Status::all());
    }

    public function destroy($id){
        $client = User::find($id);

        $client -> delete();

        return redirect() -> route('client.show', $client);
    }
}
