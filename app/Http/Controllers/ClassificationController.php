<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Classification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClassificationController extends Controller
{
    public function __invoke()
    {
        
    }

    public function store(Request $request){
        // $classification = new Classification();

        // $classification -> nombre_clasificacion = strtoupper($request -> nombre);

        // $classification -> save();

        // return view('crud.classification.show') -> with('classifications', Classification::all()) -> with('mensaje', 'Registro de clasificacion hecho');

        $url = "http://localhost/api/public/api/clasificaciones";

        $response = Http::post($url, [
            'nombre' => $request -> nombre 
        ]);

        $respuesta = json_decode($response -> getBody());

        $url = "http://localhost/api/public/api/clasificaciones";

        $response = Http::get($url);

        $listado = json_decode($response -> getBody());

        $classifications = $listado;

        return view('crud.classification.show') -> with('classifications', Classification::all()) -> with('mensaje', 'Registro de clasificacion hecho');
    }

    public function index(){
        return view('crud.classification.data');
    }

    public function create(){
        return view('crud.classification.create');
    }

    public function show(){
        $url = "http://localhost/api/public/api/clasificaciones"; 

        $response = Http::get($url);

        $responseBody = json_decode($response -> getBody());

        //dd($responseBody);

        $classifications = $responseBody;

        return view('crud.classification.show') -> with('classifications', Classification::all()) -> with('mensaje', 'Registro de clasificacion hecho');
    }

    public function update(){
        return view('crud.classification.edit');
    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
