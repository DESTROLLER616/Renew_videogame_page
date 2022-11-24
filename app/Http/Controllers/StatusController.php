<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StatusController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        // $status = new Status();

        // $status -> nombre_status = strtoupper($request -> nombre);

        // $status -> save();

        // return view('crud.status.show')->with('statuses', Status::all()) -> with('mensaje', 'estatus creado correctamente');

        $url = 'http://localhost/api/public/api/estatus';

        $response = Http::post($url, [
            'nombre' => $request -> nombre
        ]);

        $responseBody = json_decode($response -> getBody());

        $url = 'http://localhost/api/public/api/estatus';

        $response = Http::get($url);

        $responseBody = json_decode($response -> getBody());

        return view('crud.status.show')->with('statuses', Status::all()) -> with('mensaje', 'estatus creado correctamente');
    }

    public function index(){
        return view('crud.status.data');
    }

    public function create(){
        return view('crud.status.create');
    }

    public function show(){
        $url = 'http://localhost/api/public/api/estatus';

        $response = Http::get($url);

        $responseBody = json_decode($response -> getBody());

        return view('crud.status.show')->with('statuses', Status::all()) -> with('mensaje', 'estatus creado correctamente');
    }

    public function update(){

    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
