<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Obatpasien;
use Illuminate\Http\Request;

class ObatpasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obatpasien = Obatpasien::all();
        return view('main.dataobatpasien', compact('obatpasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapasien = Pasien::all();
        $dataobat = Obat::all();
        $obatpasien = Obatpasien::all();
        return view('main.tambahobatpasien', compact('datapasien', 'dataobat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obatpasien = new obatpasien;
        $obatpasien->datapasien_id = $request->datapasien_id;
        $obatpasien->dataobat_id = $request->dataobat_id;
        $obatpasien->diagnosa = $request->diagnosa;
        $obatpasien->jumlah = $request->jumlah;
        $obatpasien->save();

        return redirect('obatpasien')->with('status', 'Data obat pasien berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obatpasien  $obatpasien
     * @return \Illuminate\Http\Response
     */
    public function show(Obatpasien $obatpasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obatpasien  $obatpasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Obatpasien $obatpasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obatpasien  $obatpasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obatpasien $obatpasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obatpasien  $obatpasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obatpasien $obatpasien)
    {
        //
    }
}
