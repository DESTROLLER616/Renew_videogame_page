<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\videogame;
use Illuminate\Http\Request;

class VideojuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videogame = videogame::all();

        return $videogame -> toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $videogame -> image = $request -> image;

        $videogame -> save();

        return $videogame -> toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videogame = videogame::find($id);

        return $videogame -> toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $videogame = videogame::find($id);

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

        $videogame -> save();

        return $videogame -> tojson();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videogame = videogame::find($id);

        $videogame -> delete();

        return $videogame -> toJson();
    }
}
