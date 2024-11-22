<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatas; // Use Kegiatas model

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatas::all(); // Use Kegiatas model
        return view('pages.kegiatan.index', compact('kegiatans'));
    }

    public function create()
    {
        return view('pages.kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
            'waktu_kegiatan' => 'required',
            'tempat_kegiatan' => 'required',
            'status_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
        ]);

        Kegiatas::create($request->all()); // Use Kegiatas model
        return redirect()->route('kegiatan.index')
            ->with('success', 'Kegiatan berhasil dibuat.');
    }

    public function show(Kegiatas $kegiatan) // Use Kegiatas model
    {
        return view('kegiatan.show', compact('kegiatan'));
    }

    public function edit(Kegiatas $kegiatan) // Use Kegiatas model
    {
        return view('pages.kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, Kegiatas $kegiatan) // Use Kegiatas model
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
            'waktu_kegiatan' => 'required',
            'tempat_kegiatan' => 'required',
            'status_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
        ]);

        $kegiatan->update($request->all());
        return redirect()->route('kegiatan.index')
            ->with('success', 'Kegiatan updated successfully');
    }

    public function destroy(Kegiatas $kegiatan) // Use Kegiatas model
    {
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')
            ->with('success', 'Kegiatan deleted successfully');
    }
}
