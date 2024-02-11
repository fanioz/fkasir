<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\JenisBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'title'         => 'Data Barang',
            'data_jenis'    => JenisBarang::all(),
            'data_barang'   => Barang::join('tbl_jenis_barang', 'tbl_jenis_barang.id','=','tbl_barang.id_jenis')
                    ->select('tbl_barang.*', 'tbl_jenis_barang.nama_jenis')
                    ->get(),
        );

        //return view('home', $data);
        return view('admin.master.barang.list', $data);
    }

    public function store(Request $req)
    {
        Barang::create([
            'id_jenis'      => $req->id_jenis,
            'nama_barang'   => $req->nama_barang,
            'harga'         => $req->harga,
            'stok'          => $req->stok,
        ]);
        return redirect('/barang')->with('success', 'Data berhasil ditambah');
    }

    public function update(Request $req, $id)
    {
        Barang::where('id', $id)
            ->where('id', $id)
                ->update([
                    'id_jenis'      => $req->id_jenis,
                    'nama_barang'   => $req->nama_barang,
                    'harga'         => $req->harga,
                    'stok'          => $req->stok,
                ]);
        
        return redirect('/barang')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $Barang = Barang::where('id', $id)->delete();
        return redirect('/barang')->with('success', 'Data berhasil dihapus');
    }
}
