<?php

namespace App\Http\Controllers;

use App\Models\Pengantarlab;
use Illuminate\Http\Request;

class PengantarlabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengantarlab = Pengantarlab::all();
		//return $pengantarlab;
        return view('main.datapengantarlab', compact('pengantarlab'));
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
     * @param  \App\Models\Pengantarlab  $pengantarlab
     * @return \Illuminate\Http\Response
     */
    public function show(Pengantarlab $pengantarlab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengantarlab  $pengantarlab
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengantarlab $pengantarlab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengantarlab  $pengantarlab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengantarlab $pengantarlab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengantarlab  $pengantarlab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengantarlab $pengantarlab)
    {
        //
    }
}
