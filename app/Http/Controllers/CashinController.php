<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cashin;

class CashinController extends Controller
{
    public function index()
    {
        $cashins = Cashin::all();
        //totalRevenue dari jumlah cashin
        $totalRevenue = Cashin::sum('jumlah');
        // return view('pages.cashin.index', compact('cashins'));
        return view('pages.cashin.index', compact('cashins', 'totalRevenue')); // Tambahkan $totalRevenue

    }

    public function create()
    {
        return view('pages.cashin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_transaksi' => 'required',
            'jenis_penerimaan' => 'required',
            'diterima_dari' => 'required',
            'jumlah' => 'required',
            // 'total' => 'required',
        ]);

        Cashin::create($request->all());
        return redirect()->route('cashin.index')
            ->with('success', 'Cashin berhasil dibuat.');
    }

    public function show(Cashin $cashin)
    {
        return view('cashin.show', compact('cashin'));
    }

    public function edit(Cashin $cashin)
    {
        return view('pages.cashin.edit', compact('cashin'));
    }

    public function update(Request $request, Cashin $cashin)
    {
        $request->validate([
            'tanggal_transaksi' => 'required',
            'jenis_penerimaan' => 'required',
            'diterima_dari' => 'required',
            'jumlah' => 'required',
            // 'total' => 'required',
        ]);

        $cashin->update($request->all());
        return redirect()->route('cashin.index')
            ->with('success', 'Cashin updated successfully');
    }

    public function destroy(Cashin $cashin)
    {
        $cashin->delete();
        return redirect()->route('cashin.index')
            ->with('success', 'Cashin deleted successfully');
    }
}
