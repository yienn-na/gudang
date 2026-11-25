<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_FeliSC; 

class CSZ extends Controller
{
    public function index($value='')
    {
        $data['page'] = 'dashboard';
        return view('template',$data);
    }

    public function barang($value='')
    {
        $luoyunxi = new M_FeliSC(); 
        $data['luoyunxi'] = $luoyunxi->tampil('barang');
        $data['page'] = 'barang';
        return view('template', $data);
    }

    public function add($value='')
    {
        $data['page'] = 'tambah';
        return view('template',$data);
    }
   
    public function aksitambah( request $request)
    {
        $luoyunxi = new M_FeliSC();
       echo $request->input('kodebarang');
       
    }
}
