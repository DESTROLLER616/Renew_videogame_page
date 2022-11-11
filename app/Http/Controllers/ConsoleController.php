<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Console;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        $console = new Console();

        $console -> nombre_consola = strtoupper($request -> nombre);

        $console -> save();

        return view('crud.console.show') -> with('consoles', Console::all()) -> with('mensaje', "creado correctamente");
    }

    public function index(){
        return view('crud.console.data');
    }

    public function create(){
        return view('crud.console.create');
    }

    public function show(){
        return view('crud.console.show')->with('consoles', Console::all());
    }

    public function update(){

    }

    public function edit(){
        
    }

    public function destroy(){

    }
}

?>