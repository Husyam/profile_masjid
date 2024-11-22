<?php

namespace App\Http\Controllers;

use App\Models\cashout;
use Illuminate\Http\Request;

class CashoutController extends Controller
{
    public function index()
    {
        $cashouts = \App\Models\cashout::all();
        // $totalRevenue = cashout::sum('jumlah');
        $totalRevenue = cashout::sum('jumlah_pengeluaran'); // Corrected column name
        return view('pages.cashout.index', compact('cashouts', 'totalRevenue'));
    }

    public function create()
    {
        return view('pages.cashout.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_transaksi' => 'required|date',
            'jenis_pengeluaran' => 'required|string',
            'jumlah_pengeluaran' => 'required|numeric',
        ]);

        cashout::create($request->all());

        return redirect()->route('cashout.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $cashout = \App\Models\cashout::find($id);
        return view('cashout.edit', compact('cashout'));
    }

    public function update(Request $request, $id)
    {
        $cashout = \App\Models\cashout::find($id);
        $cashout->update($request->all());
        return redirect('/cashout')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $cashout = \App\Models\cashout::find($id);
        $cashout->delete();
        return redirect('/cashout')->with('success', 'Data berhasil dihapus');
    }
}
