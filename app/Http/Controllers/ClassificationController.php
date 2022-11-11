<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    public function __invoke()
    {
        
    }

    public function store(Request $request){
        $classification = new Classification();

        $classification -> nombre_clasificacion = strtoupper($request -> nombre);

        $classification -> save();

        return view('crud.classification.show') -> with('classifications', Classification::all()) -> with('mensaje', 'Registro de clasificacion hecho');
    }

    public function index(){
        return view('crud.classification.data');
    }

    public function create(){
        return view('crud.classification.create');
    }

    public function show(){
        return view('crud.classification.show')->with('classifications', Classification::all());
    }

    public function update(){
        return view('crud.classification.edit');
    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
