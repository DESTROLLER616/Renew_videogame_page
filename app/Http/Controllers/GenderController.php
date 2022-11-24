<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GenderController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        // $gender = new Gender();

        // $gender -> nombre_genero = strtoupper($request -> nombre);

        // $gender -> save();

        // return view('crud.gender.show') -> with('genders', Gender::all()) -> with('mensaje', 'genero correctamente creado');

        $url = "http://localhost/api/public/api/generos";

        $response = Http::post($url, [
            'nombre' => $request -> nombre
        ]);

        $responseBody = json_decode($response -> getBody());

        $url = "http://localhost/api/public/api/generos";

        $response = Http::get($url);

        $responseBody = json_decode($response -> getBody());

        $genders = $responseBody;

        return view('crud.gender.show') -> with('genders', Gender::all()) -> with('mensaje', 'genero correctamente creado');
    }

    public function index(){
        return view('crud.gender.data');
    }

    public function create(){
        return view('crud.gender.create');
    }

    public function show(){
        $url = "http://localhost/api/public/api/generos";

        $response = Http::get($url);

        $responseBody = json_decode($response -> getBody());

        $genders = $responseBody;

        return view('crud.gender.show') -> with('genders', Gender::all()) -> with('mensaje', 'genero correctamente creado');
    }

    public function update(){

    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
