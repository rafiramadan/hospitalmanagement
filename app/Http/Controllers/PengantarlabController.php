<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Dokter;
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
        $datapasien = Pasien::all();
        $datadokter = Dokter::all();
        $pengantarlab = Pengantarlab::all();
        return view('main.tambahpengantarlab', compact('pengantarlab', 'datapasien', 'datadokter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengantarlab = new Pengantarlab;
        $pengantarlab->datapasien_id = $request->datapasien_id;
        $pengantarlab->diagnosaklinik = $request->diagnosaklinik;
        $pengantarlab->labhematologi = $request->labhematologi;
        $pengantarlab->laburine = $request->laburine;
        $pengantarlab->labfaeces = $request->labfaeces;
        $pengantarlab->labglukosadarah = $request->labglukosadarah;
        $pengantarlab->labfaalhati = $request->labfaalhati;
        $pengantarlab->labprofillipid = $request->labprofillipid;
        $pengantarlab->labtumormaker = $request->labtumormaker;
        $pengantarlab->labelektrolit = $request->labelektrolit;
        $pengantarlab->labmikrobiologi = $request->labmikrobiologi;
        $pengantarlab->labtiroid = $request->labtiroid;
        $pengantarlab->labmunoserologi = $request->labmunoserologi;
        $pengantarlab->labtorch = $request->labtorch;
        $pengantarlab->labhepatitis = $request->labhepatitis;
        $pengantarlab->datadokter_id = $request->datadokter_id;
        $pengantarlab->catatan = $request->catatan;
        $pengantarlab->save();

        return redirect('pengantarlab')->with('status', 'Data Pengantar Lab berhasil ditambahkan!');
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
