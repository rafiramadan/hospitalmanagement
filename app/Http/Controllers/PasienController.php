<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //penggunaan Query Builder

class PasienController extends Controller
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
            'nopasien' => $request->nopasien,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'tempatlahir' => $request->tempatlahir,
            'tgllahir' => $request->tgllahir,
            'umur' => $request->umur,
            'kategori' => $request->kategori,
            'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'goldar' => $request->goldar,
            'pekerjaan' => $request->pekerjaan,
            'jenisbayar' => $request->jenisbayar,
        ]);
        return redirect('datapasien')->with('status', 'Data pasien berhasil ditambah!');
     }

    public function editpasien($id)
    {
        $datapasien = DB::table('datapasien')->where('id', $id)->first();
        return view('main.editpasien', compact('datapasien'));
    }

    public function editpasienprocess(Request $request, $id)
    {
        DB::table('datapasien')->where('id', $id)
            ->update([
                'nopasien' => $request->nopasien,
                'nama' => $request->nama,
                'nik' => $request->nik,
                'tempatlahir' => $request->tempatlahir,
                'tgllahir' => $request->tgllahir,
                'umur' => $request->umur,
                'kategori' => $request->kategori,
                'jeniskelamin' => $request->jeniskelamin,
                'alamat' => $request->alamat,
                'notelp' => $request->notelp,
                'goldar' => $request->goldar,
                'pekerjaan' => $request->pekerjaan,
                'jenisbayar' => $request->jenisbayar,
            ]);
        return redirect('datapasien')->with('status', 'Data pasien berhasil diupdate!');
    }

    public function hapusdata($id)
    {
        DB::table('datapasien')->where('id', $id)->delete();
        return redirect('datapasien')->with('status', 'Data pasien berhasil dihapus');
    }

}
