<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Kategori;
use App\Models\Artikel;
use App\Models\Tag;
use App\Models\User;



use Illuminate\Support\Facades\Hash;


class ArtikelController extends Controller
{

    public function index()
    {
        $id_atk = auth()->user()->id;
        $count = Artikel::where('users_id', $id_atk)->count();
        $atk = Artikel::where('users_id', $id_atk)->get();
       
        return view('penulis.dashboard', compact('atk', 'count'));
    }

    public function tambah()
    {
        $ktg = Kategori::all();
        return view('penulis.tambah-artikel', compact('ktg'));
    }

    public function tampil($id)
    {
        $ktg = Kategori::all();
        $atk = Artikel::find($id);
        $tg = Tag::where('artikels_id', $id)->get();

        return view('penulis.edit-artikel', compact('ktg', 'atk', 'tg'));
    }

    public function show($id)
    {
        $ktg = Kategori::all();
        $atk = Artikel::find($id);
        $tg = Tag::where('artikels_id', $id)->get();
        

        return view('penulis.tampil-artikel', compact('ktg', 'atk', 'tg'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategoris_id' => 'required|integer',
            'tags' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'konten' => 'required|string',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
        } else {
            $filename = null;
        }

        $article = Artikel::create([
            'judul' => $request->judul,
            'kategoris_id' => $request->kategoris_id,
            'foto' => $filename,
            'konten' => $request->konten,
            'users_id' => auth()->user()->id,

        ]);

        $tags = explode(',', $request->tags);
        foreach ($tags as $tagName) {
            Tag::create([
                'nama' => trim($tagName),
                'artikels_id' => $article->id,
            ]);
        }
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'judul' => 'required|string|max:255',
            'kategoris_id' => 'required|integer',
            'tags' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'konten' => 'required|string',
        ]);

        $atk = Artikel::find($id);

        if ($request->hasFile('foto')) {

            if ($atk->foto && file_exists(public_path('uploads/' . $atk->foto))) {
                unlink(public_path('uploads/' . $atk->foto));
            }

            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $atk->foto = $filename;
        } else {
            $filename = null;
        }

        $atk->judul = $request->judul;
        $atk->kategoris_id = $request->kategoris_id;
        $atk->konten = $request->konten;

        $atk->save();

        $tag = Tag::where('artikels_id', $id);
        $tag->delete();

        $tags = explode(', ', $request->tags);
        foreach ($tags as $tagName) {
            Tag::create([
                'nama' => trim($tagName),
                'artikels_id' => $id,
            ]);
        }
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function delete(Request $request, $id)
    {

        $atk = Artikel::find($id);
        $atk->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}