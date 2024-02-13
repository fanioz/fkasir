<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskon;

class DiskonController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'title'         => 'Setting Diskon',
            'data_diskon'    => Diskon::all()
        );

        //return view('home', $data);
        return view('admin.master.diskon.list', $data);
    }

    public function update(Request $req, $id)
    {
        Diskon::where('id', $id)
            ->where('id', $id)
                ->update([
                    'total_belanja'     => $req->total_belanja,
                    'diskon'            => $req->diskon,
                ]);
        
        return redirect('/setdiskon')->with('success', 'Data berhasil diubah');
    }

}
