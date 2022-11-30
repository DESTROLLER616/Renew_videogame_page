<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Classification;
use App\Models\Console;
use App\Models\Gender;
use App\Models\Region;
use App\Models\Status;
use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class VideogameController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function store(Request $request){
        $videogame = new Videogame();

        $videogame -> nombre = strtoupper($request -> nombre);
        $videogame -> desarrolladora = strtoupper($request -> desarrolladora);
        $videogame -> publicadora = strtoupper($request -> publicadora);
        $videogame -> fecha_estreno = $request -> fecha_estreno;
        $videogame -> descripcion = strtoupper($request -> descripcion);
        $videogame -> codigo = strtoupper($request -> codigo);
        $videogame -> stock = $request -> stock;
        $videogame -> precio = $request -> precio;
        $videogame -> id_clasificacion = $request -> clasificacion;
        $videogame -> id_region = $request -> region;
        $videogame -> id_genero = $request -> genero;
        $videogame -> id_consola = $request -> consola;

        if ($image = $request->file('image')) {
            $destinationPath = 'img/videojuego/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $videogame -> image = "$profileImage";
        }

        $videogame -> save();

        return 'videojuego creado';

        // return view('crud.videogames.show') -> with('videogames', DB::table('videogames')
        // -> join('classifications', 'videogames.id_clasificacion', '=', 'classifications.id')
        // -> join('regions', 'videogames.id_region', '=', 'regions.id')
        // -> join('genders', 'videogames.id_genero', '=', 'genders.id')
        // -> join('consoles', 'videogames.id_consola', '=', 'consoles.id')
        // -> select('videogames.*', 'classification.nombre_clasificacion', 'regions.nombre_region', 'genders.nombre_genero', 'consoles.nombre_consola') -> get());

        // return redirect() -> route('videogame.show', $videogame);

        // $image = null;

        // $url = "http://localhost/api/public/api/videojuegos";

        // if ($image = $request->file('image')) {
        //     $destinationPath = 'img/videojuegos/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $image = "$profileImage";
        // }

        // $response = Http::post($url, [
        //     'nombre' => $request -> nombre,
        //     'desarrolladora' => $request -> desarrolladora,
        //     'publicadora' => $request -> publicadora,
        //     'fecha_estreno' => $request -> fecha_estreno,
        //     'descripcion' => $request -> descripcion,
        //     'codigo' => $request -> codigo,
        //     'stock' => $request -> stock,
        //     'precio' => $request -> precio,
        //     'id_clasificacion' => $request -> clasificacion,
        //     'id_region' => $request -> region,
        //     'id_genero' => $request -> genero,
        //     'id_consola' => $request -> consola,
        //     'image' => $request -> image,
        // ]);

        // $respuesta = json_decode($response -> getBody());

        // $url = 'http://localhost/api/public/api/videojuegos';

        // $response = Http::get($url);

        // $listado = json_decode($response -> getBody());

        // $videogames = $listado;

        // return view('crud.videogames.show') -> with('videogames', DB::table('videogames')
        // -> join('classifications', 'videogames.id_clasificacion', '=', 'classifications.id')
        // -> join('regions', 'videogames.id_region', '=', 'regions.id')
        // -> join('genders', 'videogames.id_genero', '=', 'genders.id')
        // -> join('consoles', 'videogames.id_consola', '=', 'consoles.id')
        // -> select('videogames.*', 'classifications.nombre_clasificacion', 'regions.nombre_region', 'genders.nombre_genero', 'consoles.nombre_consola') -> get());

        return 'videojuego creado';
    }

    public function index(){
        return view('crud.videogames.data');
    }

    public function create(){
        return view('crud.videogames.create') 
        -> with('classifications', Classification::all()) 
        -> with('regions', Region::all())
        -> with('genders', Gender::all())
        -> with('consoles', Console::all());
    }

    public function show(){
        $url = 'http://localhost/api/public/api/videojuegos';

        $response = Http::get($url);

        $responseBody = json_decode($response -> getBody());

        //dd($responseBody);

        $videogames = $responseBody;

        return view('crud.videogames.show') -> with('videogames', DB::table('videogames')
        -> join('classifications', 'videogames.id_clasificacion', '=', 'classifications.id')
        -> join('regions', 'videogames.id_region', '=', 'regions.id')
        -> join('genders', 'videogames.id_genero', '=', 'genders.id')
        -> join('consoles', 'videogames.id_consola', '=', 'consoles.id')
        -> select('videogames.*', 'classifications.nombre_clasificacion', 'regions.nombre_region', 'genders.nombre_genero', 'consoles.nombre_consola') -> get());
    }

    public function update(Request $request, $id){
        $videogame = Videogame::find($id);

        $videogame -> nombre = $request -> nombre;
        $videogame -> desarrolladora = $request -> desarrolladora;
        $videogame -> publicadora = $request -> publicadora;
        $videogame -> fecha_estreno = $request -> fecha_estreno;
        $videogame -> descripcion = $request -> descripcion;
        $videogame -> codigo = $request -> codigo;
        $videogame -> precio = $request -> precio;
        $videogame -> stock = $request -> stock;
        $videogame -> id_clasificacion = $request -> clasificacion;
        $videogame -> id_region = $request -> region;
        $videogame -> id_genero = $request -> genero;
        $videogame -> id_consola = $request -> consola;
        
        $videogame -> save();

        //return redirect() -> route('videogame.show', $videogame);
        return 'videojuego actualizado';
    }

    public function edit($id){
        $videogame = Videogame::find($id);

        return view('crud.videogames.edit', compact('videogame')) -> with('classifications', Classification::all()) -> with('regions', Region::all()) -> with('genders', Gender::all()) -> with('consoles', Console::all()) -> with('statuses', Status::all());
    }

    public function destroy(Request $request){
        // $url = "http://localhost/api/public/api/videojuegos/".$id;

        // $response = Http::post($url, [
        //     '_method' => 'DELETE',
        // ]);

        // $respuesta = json_decode($response->getBody());

        // $url = "http://localhost/api/public/api/videojuegos"; 

        // $response = Http::get($url);

        // $listado = json_decode($response->getBody());

        // $videogames = $listado;

        // return view('crud.videogames.show') -> with('videogames', DB::table('videogames')
        // -> join('classifications', 'videogames.id_clasificacion', '=', 'classifications.id')
        // -> join('regions', 'videogames.id_region', '=', 'regions.id')
        // -> join('genders', 'videogames.id_genero', '=', 'genders.id')
        // -> join('consoles', 'videogames.id_consola', '=', 'consoles.id')
        // -> select('videogames.*', 'classifications.nombre_clasificacion', 'regions.nombre_region', 'genders.nombre_genero', 'consoles.nombre_consola') -> get());

        $videogame = Videogame::find($request -> id);

        $videogame -> delete();

        return 'Videojuego borrado';
    }
}
