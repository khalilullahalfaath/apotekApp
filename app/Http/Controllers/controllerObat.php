<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Obat;

class controllerObat extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obats = Obat::all(); // model; wadah data-data yang ada di database
        return view('view', compact('obats')); // view utama 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create'); //view create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // sesuai model
        Obat::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan,
        ]);
        return redirect()->route('view'); //memasukkan data yang ada di form create kemudian auto redirect viewnya ke view default
    }


    public function edit(string $id)
    {
        $obatId = Obat::find($id); // model
        return view('edit', compact('obatId')); // compact: untuk melempar data sehingga bisa digunakan di halaman edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $obat = Obat::find($request->id);
        $obat->kode = $request->kode;
        $obat->nama = $request->nama;
        $obat->deskripsi = $request->deskripsi;
        $obat->tipe = $request->tipe;
        $obat->jumlah = $request->jumlah;
        $obat->harga_satuan = $request->harga_satuan;
        $obat->save();
        return redirect()->route('view');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $obat = Obat::find($request->id);
        $obat->delete();
        return redirect()->route('view');
    }
}