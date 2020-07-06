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

        return view('form/formular2')->with('seiten', session()->get(seitenzahl));
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

        $seiten = $request->seitenzahl;
        session()->put('prodName', $request->prodName);
        session()->put('formata', $request->formata);
        session()->put('seitenzahl', $request->seitenzahl);
        session()->put('papierSorte', $request->papierSorte);
        session()->put('auflage', $request->auflage);
        session()->put('seitenFarben', $request->seite);

        session()->put('benName', $request->benName);
        session()->put('firmName', $request->firmName);
        session()->put('adressStreet', $request->adressStreet);
        session()->put('adressPLZ', $request->adressPLZ);
        session()->put('telefon', $request->telefon);
        session()->put('email', $request->email);
        session()->put('drucktermin', $request->drucktermin);
        session()->put('kommentar', $request->kommentar);

//        dd($request->seite);
        return view('form/formular2')->with('seiten', $seiten);
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
