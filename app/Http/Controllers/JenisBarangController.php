<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBarang;

class JenisBarangController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'title'         => 'Data Jenis Barang',
            'data_jenis'    => JenisBarang::all()
        );

        //return view('home', $data);
        return view('admin.master.jenisbarang.list', $data);
    }

    public function store(Request $req)
    {
        JenisBarang::create([
            'nama_jenis'      => $req->nama_jenis,
        ]);
        return redirect('/jenisbarang')->with('success', 'Data berhasil ditambah');
    }

    public function update(Request $req, $id)
    {
        JenisBarang::where('id', $id)
            ->where('id', $id)
                ->update([
                    'nama_jenis'      => $req->nama_jenis,
                ]);
        
        return redirect('/jenisbarang')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $JenisBarang = JenisBarang::where('id', $id)->delete();
        return redirect('/jenisbarang')->with('success', 'Data berhasil dihapus');
    }
}
