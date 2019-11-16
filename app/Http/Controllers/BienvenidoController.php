<?php

namespace App\Http\Controllers;

use App\Models\Bienvenido;
use Illuminate\Http\Request;

class BienvenidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Bienvenidos.bienvenido');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bienvenido  $bienvenido
     * @return \Illuminate\Http\Response
     */
    public function show(Bienvenido $bienvenido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bienvenido  $bienvenido
     * @return \Illuminate\Http\Response
     */
    public function edit(Bienvenido $bienvenido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bienvenido  $bienvenido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bienvenido $bienvenido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bienvenido  $bienvenido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bienvenido $bienvenido)
    {
        //
    }
}
