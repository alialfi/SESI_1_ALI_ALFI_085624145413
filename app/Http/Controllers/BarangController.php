<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.index');
    }

    public function create()
    {
        return view('barang.create');
    }

    
    public function getData()
    {
        $data = Barang::select(['id', 'nama'])->get();
    
        return response()->json(['data' => $data]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'  => 'required|string|max:255',
            'kode'  => 'required|string|max:255',
            'stok'  => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Barang::create($validated);

        return redirect()
            ->route('barang.index')
            ->with('success', 'Data berhasil ditambahkan');
    }


    public function delete($id)
    {
        $Barang = Barang::findOrFail($id);
        $Barang->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }

    public function edit($id)
    {
        $Barang = Barang::findOrFail($id);
        return view('barang.edit', compact('Barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'kode'  => 'required|string|max:255',
            'stok'  => 'required|integer',
            'harga' => 'required|numeric',
        ]);
        
        $Barang = Barang::findOrFail($id);
        $Barang->update([
            'name' => $request->name,
            'kode' => $request->kode,
            'stok' => $request->stok,
            'harga' => $request->harga,
        ]);

        return redirect()->route('barang.index')->with('success', 'Data berhasil ubah');
    }

}



