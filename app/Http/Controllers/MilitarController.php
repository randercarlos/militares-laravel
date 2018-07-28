<?php

namespace App\Http\Controllers;

use App\Models\Militar;
use Illuminate\Http\Request;

class MilitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $militares = Militar::orderBy('nome')->get();
        
        return view('militar.index', compact('militares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patentes = Militar::patentes;
        
        return view('militar.form', compact('patentes'));
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
     * @param  \App\Models\Militar  $militar
     * @return \Illuminate\Http\Response
     */
    public function show(Militar $militar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Militar  $militar
     * @return \Illuminate\Http\Response
     */
    public function edit(Militar $militar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Militar  $militar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Militar $militar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Militar  $militar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Militar $militar)
    {
        //
    }
}
