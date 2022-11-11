<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\Status;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        $employeer = new User();

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
        $employeer -> id_status = 1;
        $employeer -> id_type_user = 1;

        if ($image = $request->file('image')) {
            $destinationPath = 'img/empleado/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $employeer -> image = "$profileImage";
        }

        $employeer -> save();

        return view('crud.employers.show') -> with('employers', DB::table('users')
        -> join('type__employees', 'users.id_type_user', '=', 'type__employees.id')
        -> join('states', 'users.id_state', '=', 'states.id')
        -> join('statuses', 'users.id_status', '=', 'statuses.id')
        -> select('*') -> get());
    }

    public function index(){
        return view('crud.employers.data');
    }

    public function create(){
        return view('crud.employers.create') -> with('states', State::all());
    }

    public function show(){
        return view('crud.employers.show') -> with('employers', DB::table('users')
        -> join('type__employees', 'users.id_type_user', '=', 'type__employees.id')
        -> join('states', 'users.id_state', '=', 'states.id')
        -> join('statuses', 'users.id_status', '=', 'statuses.id')
        -> select('users.*', 'type__employees.tipo_empleado', 'states.nombre_estado', 'statuses.nombre_status') -> get());
    }

    public function update(Request $request, $id){
        $employer = User::find($id);

        $employer -> name = $request -> nombre;
        $employer -> apellido_p = $request -> apellido_p;
        $employer -> apellido_m = $request -> apellido_m;
        $employer -> direction = $request -> direccion;
        $employer -> postcode = $request -> codigo_postal;
        $employer -> number_phone = $request -> telefono;
        $employer -> salario = $request -> salario;
        $employer -> fecha_contratacion = $request -> fecha_contratacion;
        $employer -> id_state = $request -> estado;
        $employer -> id_status = $request -> status;
        $employer -> email = $request -> email;
        $employer -> password = $request -> contraseña;

        $employer -> save();

        return redirect() -> route('employee.show', $employer);
    }

    public function edit($id){
        $employer = User::find($id);

        return view('crud.employers.edit', compact('employer')) -> with('states', State::all()) -> with('statuses', Status::all());
    }

    public function destroy($id){
        $employer = User::find($id);

        $employer -> delete();

        return redirect() -> route('employee.show', $employer);
    }
}
