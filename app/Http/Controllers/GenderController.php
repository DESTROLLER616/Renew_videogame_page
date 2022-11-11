<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        $gender = new Gender();

        $gender -> nombre_genero = strtoupper($request -> nombre);

        $gender -> save();

        return view('crud.gender.show') -> with('genders', Gender::all()) -> with('mensaje', 'genero correctamente creado');
    }

    public function index(){
        return view('crud.gender.data');
    }

    public function create(){
        return view('crud.gender.create');
    }

    public function show(){
        return view('crud.gender.show')->with('genders', Gender::all());
    }

    public function update(){

    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
