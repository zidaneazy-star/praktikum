<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::all();

        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|unique:matakuliahs,kode_matakuliah|max:20',
            'nama_matakuliah' => 'required|max:100',
            'sks'             => 'required|integer|min:1|max:6',
        ], [
            'kode_matakuliah.required' => 'Kode mata kuliah wajib diisi.',
            'kode_matakuliah.unique'   => 'Kode mata kuliah sudah ada, gunakan kode lain.',
            'kode_matakuliah.max'      => 'Kode mata kuliah maksimal 20 karakter.',
            'nama_matakuliah.required' => 'Nama mata kuliah wajib diisi.',
            'nama_matakuliah.max'      => 'Nama mata kuliah maksimal 100 karakter.',
            'sks.required'             => 'Jumlah SKS wajib diisi.',
            'sks.integer'              => 'Jumlah SKS harus berupa angka.',
            'sks.min'                  => 'Jumlah SKS minimal 1.',
            'sks.max'                  => 'Jumlah SKS maksimal 6.',
        ]);

        // Simpan data ke database
        Matakuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks'             => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')
                         ->with('success', 'Data mata kuliah berhasil ditambahkan!');
    }

    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);

        return view('matakuliah.show', compact('matakuliah'));
    }
}
