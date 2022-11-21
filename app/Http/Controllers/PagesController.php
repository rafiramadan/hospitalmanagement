<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //penggunaan Query Builder

class PagesController extends Controller
{
    public function home()
     {
         return view('home');
     }

     public function datapasien()
     {
        $datapasien = DB::table('datapasien')->get();
        //return $datapasien;
        return view('main.datapasien', ['datapasien' => $datapasien]);
     }

     public function tambahpasien()
     {
        return view('main.tambahpasien');
     }

     public function simpanpasien(Request $request)
     {
        DB::table('datapasien')->insert([
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'nik' => $request->nik,
            'tipependaftaran' => $request->tipependaftaran,
            'kategoripasien' => $request->kategoripasien,
            'nobpjs' => $request->nobpjs,
            'nosurat' => $request->nosurat,
            'faskesrujuk' => $request->faskesrujuk,
            'jenisasuransi' => $request->jenisasuransi,
            'noasuransi' => $request->noasuransi,
            'politujuan' => $request->politujuan,
        ]);
        return redirect('datapasien')->with('status', 'Data pasien berhasil ditambah!');
     }
}
