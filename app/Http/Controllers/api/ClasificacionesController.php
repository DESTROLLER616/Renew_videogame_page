<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\classification;
use Illuminate\Http\Request;

class ClasificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classification = classification::all();

        return $classification -> toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classification = new classification();

        $classification -> nombre_clasificacion = $request -> nombre;

        $classification -> save();

        return $classification -> toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classification = classification::find($id);

        return $classification -> toJSon();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, classification $classification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function destroy(classification $classification)
    {
        //
    }
}
