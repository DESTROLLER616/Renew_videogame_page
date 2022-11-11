<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Type_employee;
use Illuminate\Http\Request;

class Tipo_empleoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Type_employee::all();

        return $employee -> toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Type_employee();

        $employee -> tipo_empleado = $request -> tipo;

        $employee -> save();

        return $employee -> toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type_employee  $type_employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Type_employee::find($id);

        return $employee -> toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type_employee  $type_employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type_employee $type_employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type_employee  $type_employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type_employee $type_employee)
    {
        //
    }
}
