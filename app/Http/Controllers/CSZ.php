<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_FeliSC; // <-- Removed "Http\" here

class CSZ extends Controller
{
    public function index($value='')
    {
        $data['page'] = 'dashboard';
        return view('template',$data);
    }

    public function barang($value='')
    {
        $luoyunxi = new M_FeliSC(); // <-- Match exact capitalization
        $data['luoyunxi'] = $luoyunxi->tampil('barang');
        $data['page'] = 'barang';
        return view('template', $data);
    }

    public function add($value='')
    {
        $data['page'] = 'tambah';
        return view('template',$data);
    }
   
    public function Actadd(Request $request)
    {
        $validated = $request->validate([
            'namabarang' => 'required|string|max:255',
            'kodebarang' => 'required|integer',
        ]);

        \Illuminate\Support\Facades\DB::table('barang')->insert($validated + ['stok' => 0]);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

}