<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class DashboardController extends Controller
{

    public function penulis()
    {
        return view('penulis.dashboard');
    }
    public function admins()
    {
        return view('admin.dashboard');
    }
}