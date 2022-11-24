<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Console;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegionController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        // $region = new Region();

        // $region -> nombre_region = strtoupper($request -> nombre);

        // $region -> save();

        // return view('crud.region.show') -> with('regions', Region::all()) -> with('mensaje', 'Region agregada correctamente');

        $url = 'http://localhost/api/public/api/regiones';

        $response = Http::post($url, [
            'nombre' => $request -> nombre
        ]);

        $responseBody = json_decode($response -> getBody());

        $url = 'http://localhost/api/public/api/regiones';

        $response = Http::get($url);

        $responseBody = json_decode($response -> getBody());

        $regions = $responseBody;

        return view('crud.region.show') -> with('regions', Region::all()) -> with('mensaje', 'Region agregada correctamente');
    }

    public function index(){
        return view('crud.region.data');
    }

    public function create(){
        return view('crud.region.create');
    }

    public function show(){
        $url = 'http://localhost/api/public/api/regiones';

        $response = Http::get($url);

        $responseBody = json_decode($response -> getBody());

        $regions = $responseBody;

        return view('crud.region.show') -> with('regions', Region::all()) -> with('mensaje', 'Region agregada correctamente');
    }

    public function update(){

    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
