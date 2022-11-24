<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //penggunaan Query Builder

class DokterController extends Controller
{
    public function home()
     {
         return view('home');
     }

     public function datadokter()
     {
        $datadokter = DB::table('datadokter')->get();
        //return $datapasien;
        return view('main.datadokter', ['datadokter' => $datadokter]);
     }

    public function tambahdokter()
    {
    return view('main.tambahdokter');
    }

    public function simpandokter(Request $request)
    {
    DB::table('datadokter')->insert([
            'nid' => $request->nid,
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
        ]);
        return redirect('datadokter')->with('status', 'Data dokter berhasil ditambah!');
     }

    public function editdokter($id)
    {
        $datadokter = DB::table('datadokter')->where('id', $id)->first();
        return view('main.editdokter', compact('datadokter'));
    }

    public function editdokterprocess(Request $request, $id)
    {
        DB::table('datadokter')->where('id', $id)
            ->update([
                'nid' => $request->nid,
                'nama' => $request->nama,
                'spesialis' => $request->spesialis,
                'notelp' => $request->notelp,
                'alamat' => $request->alamat,
            ]);
        return redirect('datadokter')->with('status', 'Data dokter berhasil diupdate!');
    }

    public function hapusdata($id)
    {
        DB::table('datadokter')->where('id', $id)->delete();
        return redirect('datadokter')->with('status', 'Data dokter berhasil dihapus');
    }

}
