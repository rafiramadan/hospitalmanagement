<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //penggunaan Query Builder

class ObatController extends Controller
{
    public function home()
     {
         return view('home');
     }

     public function dataobat()
     {
        $dataobat = DB::table('dataobat')->get();
        //return $datapasien;
        return view('main.dataobat', ['dataobat' => $dataobat]);
     }

    public function tambahobat()
    {
        return view('main.tambahobat');
    }

    public function simpanobat(Request $request)
    {
    DB::table('dataobat')->insert([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'stok' => $request->stok,
        ]);
        return redirect('dataobat')->with('status', 'Data obat berhasil ditambah!');
     }

    public function editobat($id)
    {
        $dataobat = DB::table('dataobat')->where('id', $id)->first();
        return view('main.editobat', compact('dataobat'));
    }

    public function editobatprocess(Request $request, $id)
    {
        DB::table('dataobat')->where('id', $id)
            ->update([
                'kode' => $request->kode,
                'nama' => $request->nama,
                'stok' => $request->stok,
            ]);
        return redirect('dataobat')->with('status', 'Data obat berhasil diupdate!');
    }

    public function hapusdata($id)
    {
        DB::table('dataobat')->where('id', $id)->delete();
        return redirect('dataobat')->with('status', 'Data obat berhasil dihapus');
    }

}
