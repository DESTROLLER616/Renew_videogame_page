<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Administrator;
use App\Models\State;
use App\Models\Status;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function __invoke()
    {
        return view('crud.administration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){

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
        $administrator -> id_status = 1;
        $administrator -> id_type_user = 3;

        if ($image = $request->file('image')) {
            $destinationPath = 'img/administracion/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $administrator -> image = "$profileImage";
        }

        $administrator -> save();

        return view('crud.administration.show') -> with('administrations', DB::table('users')
        -> join('type__employees', 'users.id_type_user', '=', 'type__employees.id')
        -> join('states', 'users.id_state', '=', 'states.id')
        -> join('statuses', 'users.id_status', '=', 'statuses.id')
        -> select('users.*', 'type__employees.tipo_empleado', 'states.nombre_estado', 'statuses.nombre_status') -> get());
    }

    public function index(){
        return view('crud.administration.data');
    }

    public function create(){
        return view('crud.administration.create') -> with('states', State::all());
    }

    public function show(){
        return view('crud.administration.show') -> with('administrations', DB::table('users')
        -> join('states', 'users.id_state', '=', 'states.id')
        -> join('statuses', 'users.id_status', '=', 'statuses.id')
        -> join('type__employees', 'users.id_type_user', '=', 'type__employees.id')
        -> select('users.*', 'type__employees.tipo_empleado', 'states.nombre_estado', 'statuses.nombre_status') -> get());
        ;
    }

    public function update(Request $request, $id){
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

        return redirect() -> route('administration.show', $administration);
    }

    public function edit($id){
        $administration = User::find($id);

        return view('crud.administration.edit', compact('administration')) -> with('states', State::all()) -> with('statuses', Status::all());
    }

    public function destroy($id){
        $administration = User::find($id);

        $administration -> delete();

        return redirect() -> route('administration.show', $administration);
    }
}
