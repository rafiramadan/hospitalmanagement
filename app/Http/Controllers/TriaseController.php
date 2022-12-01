<?php

namespace App\Http\Controllers;

use App\Models\Triase;
use Illuminate\Http\Request;

class TriaseController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatriase = Triase::all();
        // dd($datatriase[0]->pasien);
        //return $datatriase;
        return view('main.datatriase', compact('datatriase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datatriase = Triase::all();
        return view('main.tambahtriase', compact('datatriase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datatriase::create($request->all());
        
        // return redirect('datatriase')->with('status', 'Data Triase berhasil ditambah!');
        $datatriase = new Triase;
        $datatriase->datapasien_id = $request->datapasien_id;
        $datatriase->caradatang = $request->caradatang;
        $datatriase->jeniskasus = $request->jeniskasus;
        $datatriase->kategori = $request->kategori;
        $datatriase->kesadaran = $request->kesadaran;
        $datatriase->respontime = $request->respontime;
        $datatriase->ruang = $request->ruang;
        $datatriase->urgensi = $request->urgensi;
        $datatriase->jenispelayanan = $request->jenispelayanan;
        $datatriase->alasandatang = $request->alasandatang;
        $datatriase->caramasuk = $request->caramasuk;
        $datatriase->keadaanprars = $request->keadaanprars;
        $datatriase->tindakprars = $request->tindakprars;
        $datatriase->keluhan = $request->keluhan;
        $datatriase->anamnesa = $request->anamnesa;
        $datatriase->riwayatpenyakit = $request->riwayatpenyakit;
        $datatriase->statuspsikolog = $request->statuspsikolog;
        $datatriase->riwayatalergi = $request->riwayatalergi;
        $datatriase->pengkajianairway = $request->pengkajianairway;
        $datatriase->pengkajianbreathing = $request->pengkajianbreathing;
        $datatriase->pengkajiancirculation = $request->pengkajiancirculation;
        $datatriase->tgldatang = $request->tgldatang;
        $datatriase->dataperawat_id = $request->dataperawat_id;
        $datatriase->save();

        return redirect('datatriase')->with('status', 'Data Triase berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Triase  $triase
     * @return \Illuminate\Http\Response
     */
    public function show(Triase $triase)
    {
        $datatriase = Triase::all();
        // dd($datatriase[0]->pasien);
        // return $datatriase;
        return view('main.detailtriase', compact('datatriase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Triase  $triase
     * @return \Illuminate\Http\Response
     */
    public function edit(Triase $triase)
    {
        $datatriase = Triase::all();
        return view('main.edittriase', compact('datatriase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Triase  $triase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Triase $triase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Triase  $triase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Triase $triase)
    {
        $triase->delete();
        return redirect('datatriase')->with('status', 'Data tidak bisa dihapus! Hapus master data pada Menu "Data Pasien"');
    }
}