<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Kategori;
use App\Models\Artikel;
use App\Models\Tag;
use App\Models\Bobot;


use Illuminate\Support\Facades\Hash;


class BobotController extends Controller
{

    public function index()
    {
        $ktg = Kategori::all();
        $atk = Artikel::all();

        return view('admin.databobot', compact('atk'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nilai' => 'required',
        ]);

        $a = Artikel::find($id);

        if (is_null($a->bobot)) {
            $bobot = new Bobot();
            $bobot->nilai = $request->nilai;
            $bobot->artikels_id = $id;
            $bobot->save();
        } else {
            $a->bobot->nilai = $request->nilai;
            $a->bobot->save();
        }

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

}