<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        $state = new State();

        $state -> nombre_estado = strtoupper($request -> nombre);

        $state -> save();

        return view('crud.state.show')->with('states', State::all()) -> with('mensaje', 'Estado creado correctamente');
    }

    public function index(){
        return view('crud.state.data');
    }

    public function create(){
        return view('crud.state.create');
    }

    public function show(){
        return view('crud.state.show')->with('states', State::all());
    }

    public function update(){

    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
