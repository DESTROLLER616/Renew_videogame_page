<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Console;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        $region = new Region();

        $region -> nombre_region = strtoupper($request -> nombre);

        $region -> save();

        return view('crud.region.show') -> with('regions', Region::all()) -> with('mensaje', 'Region agregada correctamente');
    }

    public function index(){
        return view('crud.region.data');
    }

    public function create(){
        return view('crud.region.create');
    }

    public function show(){
        return view('crud.region.show')->with('regions', Region::all());
    }

    public function update(){

    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
