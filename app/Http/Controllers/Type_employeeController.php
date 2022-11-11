<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Type_Employee;
use Illuminate\Http\Request;

class Type_employeeController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        $temployee = new  Type_Employee();

        $temployee -> tipo_empleado = strtoupper($request -> nombre);

        $temployee -> save();

        return view('crud.employes.show') -> with('employers', Type_Employee::all()) -> with('mensaje', 'Tipo de empleado creado correctamente');
    }

    public function index(){
        return view('crud.employes.data');
    }

    public function create(){
        return view('crud.employes.create');
    }

    public function show(){
        return view('crud.employes.show')->with('employers', Type_Employee::all());
    }

    public function update(){

    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
