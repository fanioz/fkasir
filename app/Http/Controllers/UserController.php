<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'title' => 'Data User',
            'user' => User::all()
        );

        //return view('home', $data);
        return view('admin.master.user.list', $data);
    }

    public function profile()
    {
        $user = Auth::user();
        $data = array(
            'title'         => 'Setting Profile',
            'data_profile'  => [$user],
        );
        return view('profile', $data);
    }

    public function store(Request $req)
    {
        User::create([
            'name'      => $req->name,
            'email'     => $req->email,
            'password'  => Hash::make($req->password),
            'role'      => $req->role,
        ]);
        return redirect('/user')->with('success', 'Data berhasil ditambah');
    }

    public function update(Request $req, $id)
    {
        User::where('id', $id)
            ->where('id', $id)
            ->update([
                'name'      => $req->name,
                'email'     => $req->email,
                'password'  => Hash::make($req->password),
                'role'      => $req->role,
            ]);

        return redirect('/user')->with('success', 'Data berhasil diubah');
    }

    public function updateprofile(Request $req, $id)
    {
        User::where('id', $id)
            ->where('id', $id)
            ->update([
                'name'      => $req->name,
                'email'     => $req->email,
                'password'  => Hash::make($req->password),
                'role'      => $req->role,
            ]);

        return redirect('/profile')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->delete();
        return redirect('/user')->with('success', 'Data berhasil dihapus');
    }
}
