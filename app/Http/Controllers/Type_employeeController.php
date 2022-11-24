<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Type_Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Type_employeeController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        // $temployee = new  Type_Employee();

        // $temployee -> tipo_empleado = strtoupper($request -> nombre);

        // $temployee -> save();

        // return view('crud.employes.show') -> with('employers', Type_Employee::all()) -> with('mensaje', 'Tipo de empleado creado correctamente');
        $url = "http://localhost/api/public/api/tipo_empleo"; 

        $response = Http::post($url, [
            'tipo' => $request -> tipo
        ]);

        $responseBody = json_decode($response -> getBody());

        $url = "http://localhost/api/public/api/tipo_empleo"; 

        $response = Http::get($url);

        $responseBody = json_decode($response -> getBody());

        $employers = $responseBody;

        return view('crud.employes.show') -> with('employers', Type_Employee::all()) -> with('mensaje', 'Tipo de empleado creado correctamente');
    }

    public function index(){
        return view('crud.employes.data');
    }

    public function create(){
        return view('crud.employes.create');
    }

    public function show(){
        $url = "http://localhost/api/public/api/tipo_empleo"; 

        $response = Http::get($url);

        $responseBody = json_decode($response -> getBody());

        $employers = $responseBody;

        return view('crud.employes.show') -> with('employers', Type_Employee::all()) -> with('mensaje', 'Tipo de empleado creado correctamente');
    }

    public function update(){

    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
