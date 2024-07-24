<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;
use Illuminate\Support\Facades\Storage;

class IklanController extends Controller
{
    public function index()
    {
        $iklan = Iklan::all();
        $count = Iklan::count();

        return view('admin.dataiklan', compact('iklan', 'count'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'posisi' => 'required|string|max:255',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
        }

        Iklan::create([
            'nama' => $request->nama,
            'url' => $request->url,
            'foto' => $filename,
            'posisi' => $request->posisi,
        ]);

        return redirect()->back()->with('success', 'Iklan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'posisi' => 'required|string|max:255',
        ]);

        $iklan = Iklan::find($id);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $iklan->foto = $filename;
        }

        $iklan->nama = $request->nama;
        $iklan->url = $request->url;
        $iklan->posisi = $request->posisi;
        
        $iklan->save();

        return redirect()->back()->with('success', 'Iklan berhasil diupdate');
    }

    public function delete($id)
    {
        $iklan = Iklan::find($id);
        $iklan->delete();

        return redirect()->back()->with('success', 'Iklan berhasil dihapus');
    }
}
