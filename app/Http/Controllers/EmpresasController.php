<?php

namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresasController extends BaseController{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas=Empresa::all();
        return $empresas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa = new Empresa();
        $empresa->nombre = $request->nombre;
        $empresa->direccion = $request->direccion;
        $empresa->telefono = $request->telefono;
        $empresa->propietario = $request->propietario;
        $empresa->email = $request->email;
        $empresa->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empresa = Empresa::findOrfail($request->id);
        $empresa->nombre = $request->nombre;
        $empresa->direccion = $request->direccion;
        $empresa->telefono = $request->telefono;
        $empresa->propietario = $request->propietario;
        $empresa->email = $request->email;
        $empresa->save();
        return $empresa;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $empresa = Empresa::destroy($request->id);
        return $empresa;
    }
}
