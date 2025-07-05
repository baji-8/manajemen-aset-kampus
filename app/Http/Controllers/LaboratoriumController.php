<?php

namespace App\Http\Controllers;

use App\Models\Laboratorium;
use Illuminate\Http\Request;

class LaboratoriumController extends Controller
{
    public function index(Request $request)
{
    $keyword = $request->input('search');

    $laboratoria = Laboratorium::query()
        ->when($keyword, function ($query, $keyword) {
            $query->where('nama', 'like', "%{$keyword}%")
                  ->orWhere('lokasi', 'like', "%{$keyword}%")
                  ->orWhere('penanggung_jawab', 'like', "%{$keyword}%");
        })
        ->latest()
        ->paginate(10);

    return view('laboratorium.index', compact('laboratoria', 'keyword'));
}

    public function create()
    {
        return view('laboratorium.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'penanggung_jawab' => 'required',
            'fasilitas' => 'nullable',
        ]);

        Laboratorium::create($request->all());

        return redirect()->route('laboratorium.index')->with('success', 'Laboratorium berhasil ditambahkan!');
    }

    public function edit(Laboratorium $laboratorium)
    {
        return view('laboratorium.edit', compact('laboratorium'));
    }

    public function update(Request $request, Laboratorium $laboratorium)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'penanggung_jawab' => 'required',
            'fasilitas' => 'nullable',
        ]);

        $laboratorium->update($request->all());

        return redirect()->route('laboratorium.index')->with('success', 'Laboratorium berhasil diperbarui!');
    }

    public function destroy(Laboratorium $laboratorium)
    {
        $laboratorium->delete();
        return redirect()->route('laboratorium.index')->with('success', 'Laboratorium berhasil dihapus!');
    }
}
