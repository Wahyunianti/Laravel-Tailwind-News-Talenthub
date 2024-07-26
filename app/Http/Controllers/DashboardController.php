<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Kategori;
use App\Models\Artikel;
use App\Models\Tag;

class DashboardController extends Controller
{
    public function index()
    {
        $tag = Tag::select('nama')
        ->distinct()
        ->get();
        $atk = Artikel::all();
        $ktg = Kategori::all();
        $afoto = Artikel::first();

        return view('index', compact('tag', 'atk', 'afoto', 'ktg'));
    }

    public function penulis()
    {
        $id_atk = auth()->user()->id;
        $count = Artikel::where('users_id', $id_atk)->count();
        $atk = Artikel::where('users_id', $id_atk)->get();

        return view('penulis.dashboard', compact('atk', 'count'));
    }
    public function admins()
    {
        return view('admin.dashboard');
    }
}