<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //penggunaan Query Builder

class PerawatController extends Controller
{
    public function home()
     {
         return view('home');
     }

     public function dataperawat()
     {
        $dataperawat = DB::table('dataperawat')->get();
        return view('main.dataperawat', ['dataperawat' => $dataperawat]);
     }

     public function tambahperawat()
     {
        return view('main.tambahperawat');
     }

     public function simpanperawat(Request $request)
     {
        DB::table('dataperawat')->insert([
            'noperawat' => $request->noperawat,
            'nama' => $request->nama,
        ]);
        return redirect('dataperawat')->with('status', 'Data perawat berhasil ditambah!');
     }

    public function editperawat($id)
    {
        $dataperawat = DB::table('dataperawat')->where('id', $id)->first();
        return view('main.editperawat', compact('dataperawat'));
    }

    public function editperawatprocess(Request $request, $id)
    {
        DB::table('dataperawat')->where('id', $id)
            ->update([
                'noperawat' => $request->noperawat,
                'nama' => $request->nama,
            ]);
        return redirect('dataperawat')->with('status', 'Data perawat berhasil diupdate!');
    }

    public function hapusdata($id)
    {
        DB::table('dataperawat')->where('id', $id)->delete();
        return redirect('dataperawat')->with('status', 'Data perawat berhasil dihapus');
    }

}
