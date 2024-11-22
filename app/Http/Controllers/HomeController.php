<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatas;
use App\Models\Cashin;
use App\Models\Cashout;

class HomeController extends Controller
{
    public function index()
    {
        // Get all data from each model

        // Calculate total revenue for cashin and cashout

        // Pass the data to the view
        return view('pages.home.home');
    }


    public function kegiatan()
    {
        $kegiatans = Kegiatas::all();
        return view('pages.home.kegiatan', compact('kegiatans'));
    }

    public function cashin()
    {
        $cashins = Cashin::all();
        $totalCashin = Cashin::sum('jumlah');
        return view('pages.home.masuk', compact('cashins', 'totalCashin'));
    }

    public function cashout()
    {
        $cashouts = Cashout::all();
        $totalCashout = Cashout::sum('jumlah_pengeluaran');

        return view('pages.home.keluar', compact('cashouts', 'totalCashout'));
    }
}
