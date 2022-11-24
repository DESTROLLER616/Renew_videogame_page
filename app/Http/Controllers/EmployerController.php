<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\Status;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmployerController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        $imagen = "";

        $url = "http://localhost/api/public/api/empleados";

        if ($image = $request->file('image')) {
                $destinationPath = 'img/empleado/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $imagen = "$profileImage";
            }

        $response = Http::post($url, [
            'nombre' => $request -> nombre, 
            'apellido_p' => $request -> apellido_p,
            'apellido_m' => $request -> apellido_m,
            'direccion' => $request -> direction,
            'codigo_postal' => $request -> codigo_postal,
            'telefono' => $request -> telefono,
            'salario' => $request -> salario,
            'fecha_contratacion' => $request -> fecha_contratacion,
            'estado' => $request -> estado,            
            'email' => $request -> email,
            'password' => $request -> password,
            'image' => $imagen,
            'id_status' => 1,
            'id_type_user' => 3,
        ]);

        $respuesta = json_decode($response->getBody());

        $url = "http://localhost/api/public/api/empleados"; 

        $response = Http::get($url);

        $listado = json_decode($response->getBody());

        $employers = $listado;

        return view('crud.employers.show') -> with('employers', (DB::table('users')
        -> join('type__employees', 'type__employees.id', '=', 'users.id_type_user')
        -> join('states', 'users.id_state', '=', 'states.id')
        -> join('statuses', 'users.id_status', '=', 'statuses.id')
        -> select('users.*', 'type__employees.tipo_empleado', 'states.nombre_estado', 'statuses.nombre_status') -> get()));
    }

    public function index(){
        return view('crud.employers.data');
    }

    public function create(){
        return view('crud.employers.create') -> with('states', State::all());
    }

    public function show(){
        $url = "http://localhost/api/public/api/empleados"; 

        $response = Http::get($url);

        $responseBody = json_decode($response -> getBody());

        //dd($responseBody);

        $employers = $responseBody;

        return view('crud.employers.show') -> with('employers', (DB::table('users')
        -> join('type__employees', 'type__employees.id', '=', 'users.id_type_user')
        -> join('states', 'users.id_state', '=', 'states.id')
        -> join('statuses', 'users.id_status', '=', 'statuses.id')
        -> select('users.*', 'type__employees.tipo_empleado', 'states.nombre_estado', 'statuses.nombre_status') -> get()));
    }

    public function update(Request $request, $id){
        // $employer = User::find($id);

        // $employer -> name = $request -> nombre;
        // $employer -> apellido_p = $request -> apellido_p;
        // $employer -> apellido_m = $request -> apellido_m;
        // $employer -> direction = $request -> direccion;
        // $employer -> postcode = $request -> codigo_postal;
        // $employer -> number_phone = $request -> telefono;
        // $employer -> salario = $request -> salario;
        // $employer -> fecha_contratacion = $request -> fecha_contratacion;
        // $employer -> id_state = $request -> estado;
        // $employer -> id_status = $request -> status;
        // $employer -> email = $request -> email;
        // $employer -> password = $request -> contraseña;

        // $employer -> save();

        // return redirect() -> route('employee.show', $employer);

        $imagen = "";

        $url = "http://localhost/api/public/api/empleados/".$id;

        $response = Http::post($url, [
            'nombre' => $request -> nombre, 
            'apellido_p' => $request -> apellido_p,
            'apellido_m' => $request -> apellido_m,
            'direccion' => $request -> direccion,
            'codigo_postal' => $request -> codigo_postal,
            'telefono' => $request -> telefono,
            'salario' => $request -> salario,
            'contratacion' => $request -> contratacion,
            'estado' => $request -> estado,            
            'email' => $request -> email,
            'contraseña' => $request -> contraseña,
            'estatus' => $request -> status,
            '_method' => 'PUT',
        ]);

        $respuesta = json_decode($response->getBody());

        $url = "http://localhost/api/public/api/empleados"; 

        $response = Http::get($url);

        $listado = json_decode($response->getBody());

        $employers = $listado;

        return view('crud.employers.show') -> with('employers', (DB::table('users')
        -> join('type__employees', 'type__employees.id', '=', 'users.id_type_user')
        -> join('states', 'users.id_state', '=', 'states.id')
        -> join('statuses', 'users.id_status', '=', 'statuses.id')
        -> select('users.*', 'type__employees.tipo_empleado', 'states.nombre_estado', 'statuses.nombre_status') -> get()));
    }

    public function edit($id){
        $employer = User::find($id);

        return view('crud.employers.edit', compact('employer')) -> with('states', State::all()) -> with('statuses', Status::all());
    }

    public function destroy($id){
        $url = "http://localhost/api/public/api/empleados/".$id;

        $response = Http::post($url, [
            '_method' => 'DELETE',
        ]);

        $respuesta = json_decode($response->getBody());

        $url = "http://localhost/api/public/api/empleados"; 

        $response = Http::get($url);

        $listado = json_decode($response->getBody());

        $employers = $listado;

        return view('crud.employers.show') -> with('employers', (DB::table('users')
        -> join('type__employees', 'type__employees.id', '=', 'users.id_type_user')
        -> join('states', 'users.id_state', '=', 'states.id')
        -> join('statuses', 'users.id_status', '=', 'statuses.id')
        -> select('users.*', 'type__employees.tipo_empleado', 'states.nombre_estado', 'statuses.nombre_status') -> get()));
    }
}
