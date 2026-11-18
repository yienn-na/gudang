<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_FeliSC extends Model
{
      public function tampil($tabel)
    {
        return \DB::table($tabel)
                        ->get();
    }
}
