<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Kategori;
use Illuminate\Support\Facades\Hash;


class KategoriController extends Controller
{

    public function index()
    {
        $ktg = Kategori::all();
        $ctk = Kategori::count();

        return view('admin.datakategori', compact('ktg', 'ctk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $ktg = Kategori::create([
            'nama' => $request->nama,
        ]);


        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required',
        ]);

        $ktg = Kategori::find($id);
        $ktg->nama = $request->nama;
        
        $ktg->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function delete(Request $request, $id)
    {

        $ktg = Kategori::find($id);
        $ktg->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}