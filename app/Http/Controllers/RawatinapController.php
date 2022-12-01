<?php

namespace App\Http\Controllers;

use App\Models\Rawatinap;
use Illuminate\Http\Request;

class RawatinapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rawatinap = Rawatinap::all();
        // dd($datatriase[0]->pasien);
        // return $rawatinap;
        return view('main.datarawatinap', compact('rawatinap'));
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
     * @param  \App\Models\Rawatinap  $rawatinap
     * @return \Illuminate\Http\Response
     */
    public function show(Rawatinap $rawatinap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rawatinap  $rawatinap
     * @return \Illuminate\Http\Response
     */
    public function edit(Rawatinap $rawatinap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rawatinap  $rawatinap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rawatinap $rawatinap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rawatinap  $rawatinap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rawatinap $rawatinap)
    {
        //
    }
}
