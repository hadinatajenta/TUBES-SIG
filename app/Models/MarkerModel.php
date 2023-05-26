<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MarkerModel extends Model
{
    
    public function alldata(){
        $result = DB::table('marker')
        ->select('id_marker',
        'nama_marker',
        'longitude',
        'latitude',
        'nomor_telepon',
        'alamat_website',
        'deskripsi',
        'jenis_bangunan',)
        ->get();
        return $result;
    }

}

