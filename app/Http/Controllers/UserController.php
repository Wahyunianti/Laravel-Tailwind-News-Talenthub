<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index()
    {
        $user = User::all();
        $ctu = User::count();

        return view('admin.datauser', compact('user', 'ctu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        // Membuat user baru
        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);


        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'username' => 'required|string|max:255',
            'password' => 'nullable',
            'role_id' => 'required|string|max:255',
        ]);

        $user = User::find($id);
        $user->email = $request->email;
        $user->nama = $request->nama;
        $user->username = $request->username;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function delete(Request $request, $id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}