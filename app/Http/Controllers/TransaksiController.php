<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

use App\Models\Barang;
use App\Models\JenisBarang;

class TransaksiController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'title'         => 'Data Transaksi',
            'data_transaksi'    => Transaksi::all(),
        );

        //return view('home', $data);
        return view('kasir.transaksi.list', $data);
    }

    public function create()
    {
        $data = array(
            'title'         => 'Create Data Transaksi',
            'data_jenis'    => JenisBarang::all(),
            'data_barang'   => Barang::join('tbl_jenis_barang', 'tbl_jenis_barang.id', '=', 'tbl_barang.id_jenis')
                ->select('tbl_barang.*', 'tbl_jenis_barang.nama_jenis')
                ->get(),
        );

        //return view('home', $data);
        return view('kasir.transaksi.add', $data);
    }
}
