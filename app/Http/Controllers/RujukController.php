<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Rujuk;
use Illuminate\Http\Request;

class RujukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rujuk = Rujuk::all();
        // return $rujuk;
        return view('main.datarujuk', compact('rujuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapasien = Pasien::all();
        $rujuk = Rujuk::all();
        return view('main.tambahrujuk', compact('rujuk', 'datapasien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rujuk = new rujuk;
        $rujuk->datapasien_id = $request->datapasien_id;
        $rujuk->diagnosa = $request->diagnosa;
        $rujuk->rstujuan = $request->rstujuan;
        $rujuk->polirujukan = $request->polirujukan;
        $rujuk->save();

        return redirect('rujuk')->with('status', 'Data Rujuk RS lain berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rujuk  $rujuk
     * @return \Illuminate\Http\Response
     */
    public function show(Rujuk $rujuk)
    {
        $rujuk = Rujuk::all();
        // dd($datatriase[0]->pasien);
        // return $datatriase;
        return view('main.detailrujuk', compact('rujuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rujuk  $rujuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Rujuk $rujuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rujuk  $rujuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rujuk $rujuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rujuk  $rujuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rujuk $rujuk)
    {
        //
    }
}
