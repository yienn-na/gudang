<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSZ extends Controller
{
    public function index($value='')
    {

       $data['page'] = 'dashboard';
        return view('template',$data);
    }
}
