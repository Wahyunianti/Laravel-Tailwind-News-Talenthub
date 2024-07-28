<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Kategori;
use App\Models\Artikel;
use App\Models\Tag;
use App\Models\User;
use App\Models\Balasan;
use App\Models\Komentar;
use App\Models\Iklan;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $tag = Tag::withCount('artikel')
        ->select('nama')
        ->distinct()
        ->take(50)
        ->get();

        $atk = Artikel::orderBy('updated_at', 'desc')->paginate(5);
        
        $atm = Artikel::with('bobot')
        ->leftJoin('bobots', 'artikels.id', '=', 'bobots.artikels_id')
        ->orderBy('bobots.nilai', 'desc')
        ->select('artikels.*')
        ->take(3)
        ->get();

        $ktg = Kategori::all();

        $afoto = Artikel::withCount(['komentar as total_komentar' => function ($query) {
            $query->select(DB::raw('count(*)'));
        }])
        ->withCount(['komentar as total_balasan' => function ($query) {
            $query->join('balasans', 'komentars.id', '=', 'balasans.komentars_id')
                  ->select(DB::raw('count(balasans.id)'));
        }])
        ->orderBy(DB::raw('total_komentar + total_balasan'), 'desc')
        ->first();

        $ikl = Iklan::where('posisi', 'Halaman Depan')->orderBy('updated_at')->first();


        return view('index', compact('tag', 'atk', 'afoto', 'ktg', 'ikl', 'atm'));
    }

    public function penulis()
    {
        $id_atk = auth()->user()->id;
        $count = Artikel::where('users_id', $id_atk)->count();
        $atk = Artikel::where('users_id', $id_atk)->orderBy('updated_at')->get();

        return view('penulis.dashboard', compact('atk', 'count'));
    }
    public function admins()
    {
        $ctu = User::where('role_id', 2)->count();
        $cta = Artikel::count();
        $cti = Balasan::count() + Komentar::count();

        return view('admin.dashboard', compact('ctu', 'cta', 'cti'));
    }
}