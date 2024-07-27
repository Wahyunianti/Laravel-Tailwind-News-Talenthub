<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Kategori;
use App\Models\Artikel;
use App\Models\Komentar;
use App\Models\Balasan;
use App\Models\Tag;
use App\Models\Iklan;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function Tagnama($nama)
    {
        $atk = Artikel::with('bobot', 'tag')
            ->leftJoin('bobots', 'artikels.id', '=', 'bobots.artikels_id')
            ->leftJoin('tags', 'artikels.id', '=', 'tags.artikels_id')
            ->orderBy('bobots.nilai', 'desc')
            ->select('artikels.*')
            ->where('tags.nama', $nama)
            ->paginate(6);

        return view('pembaca.berita', compact('atk'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('query');
        $atk = Artikel::with('bobot')
            ->leftJoin('bobots', 'artikels.id', '=', 'bobots.artikels_id')
            ->orderBy('bobots.nilai', 'desc')
            ->select('artikels.*')
            ->where('artikels.judul', 'LIKE', "%{$searchTerm}%")
            ->paginate(6);

        return view('pembaca.berita', compact('atk'));
    }

    public function viewberita($id)
    {
        $atk = Artikel::find($id);
        $kmt = DB::table('komentars as k')
            ->leftJoin('balasans as b', 'k.id', '=', 'b.komentars_id')
            ->select(
                'k.id as komentar_id',
                'k.nama as komentar_nama',
                'k.komentar as komentar_isi',
                'k.updated_at as komentar_tanggal',
                'b.id as balasan_id',
                'b.nama as balasan_nama',
                'b.balasan as balasan_isi',
                'b.updated_at as balasan_tanggal'
            )
            ->where('k.artikels_id', $id)
            ->get()
            ->groupBy('komentar_id');

        $ikl = Iklan::where('posisi', 'Halaman Berita')->orderBy('updated_at')->first();

        return view('pembaca.tampil-berita', compact('atk', 'kmt', 'ikl'));
    }

    public function komentar(Request $request, $id)
    {
        $request->validate([
            'komentar' => 'required|string|max:255',
        ]);
        $randomNames = ['Anonymous123', 'Anonymous456', 'Anonymous789', 'Anonymous101', 'Anonymous202'];
        $randomName = $randomNames[array_rand($randomNames)];

        Komentar::create([
            'nama' => $randomName,
            'komentar' => $request->komentar,
            'artikels_id' => $id,

        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan');
    }

    public function balasan(Request $request, $id, $komen)
    {
        $request->validate([
            'balasan' => 'required|string|max:255',
        ]);
        $randomNames = ['Anonymous123', 'Anonymous456', 'Anonymous789', 'Anonymous101', 'Anonymous202'];
        $randomName = $randomNames[array_rand($randomNames)];

        Balasan::create([
            'nama' => $randomName,
            'balasan' => $request->balasan,
            'komentars_id' => $komen,
            'artikels_id' => $id,
        ]);

        return redirect()->back()->with('success', 'Balasan berhasil ditambahkan');
    }

    public function allberita()
    {
        $atk = Artikel::with('bobot')
            ->leftJoin('bobots', 'artikels.id', '=', 'bobots.artikels_id')
            ->orderBy('bobots.nilai', 'desc')
            ->select('artikels.*')
            ->paginate(6);

        return view('pembaca.berita', compact('atk'));
    }

    public function allkategori()
    {

        $ktg = Kategori::with([
            'artikel' => function ($query) {
                $query->orderBy('updated_at', 'desc')->take(3);
            }
        ])->get();

        $ktg = DB::table('kategoris as k')
        ->leftJoin('artikels as a', 'k.id', '=', 'a.kategoris_id')
        ->select(
            'k.id as kategori_id',
            'k.nama as kategori_nama',
            'a.id as artikel_id',
            'a.judul as artikel_judul',
            'a.konten as artikel_konten',
            'a.foto as artikel_foto',
            'a.updated_at as artikel_tanggal'
        )
        ->get()
        ->groupBy('kategori_id');


        return view('pembaca.kategori', compact('ktg'));
    }

    public function subkategori($id)
    {
        $ktg = Kategori::with([
            'artikel' => function ($query) {
                $query->orderBy('updated_at', 'desc')->paginate(3);
            }
        ])->where('id', $id)->get();

        return view('pembaca.sub-kategori', compact('ktg'));
    }

}