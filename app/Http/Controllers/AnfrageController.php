<?php

namespace App\Http\Controllers;

use App\Anfrage;
use Illuminate\Http\Request;

class AnfrageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
//        die('hallo');
//        $anfrage1 = new Anfrage();
//        $storedName = $request->session()->get('benName');
        session(['benName' => $request->benName]);
//
        return view('form/formular2');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anfrage  $anfrage
     * @return \Illuminate\Http\Response
     */
    public function show(Anfrage $anfrage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anfrage  $anfrage
     * @return \Illuminate\Http\Response
     */
    public function edit(Anfrage $anfrage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anfrage  $anfrage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anfrage $anfrage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anfrage  $anfrage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anfrage $anfrage)
    {
        //
    }
}
