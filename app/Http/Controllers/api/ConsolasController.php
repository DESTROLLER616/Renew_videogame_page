<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Console;
use Illuminate\Http\Request;

class ConsolasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $console = Console::all();

        return $console -> toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $console = new Console();

        $console -> nombre_consola = $request -> nombre;

        $console -> save();

        return $console -> toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $console = Console::find($id);

        return $console -> toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Console $console)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function destroy(Console $console)
    {
        //
    }
}
