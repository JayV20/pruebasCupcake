<?php

namespace App\Http\Controllers;

use App\Conocenos;
use Illuminate\Http\Request;

class ConocenosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $conocenos = Conocenos::all();
      return view('Conocenos.conocenos', compact('conocenos'));
        //
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
     * @param  \App\Conocenos  $conocenos
     * @return \Illuminate\Http\Response
     */
    public function show(Conocenos $conocenos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conocenos  $conocenos
     * @return \Illuminate\Http\Response
     */
    public function edit(Conocenos $conocenos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conocenos  $conocenos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conocenos $conocenos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conocenos  $conocenos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conocenos $conocenos)
    {
        //
    }
}
