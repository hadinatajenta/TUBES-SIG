<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MapModel extends Model
{
    public function allData(){
        $result = DB::table('marker')
        ->select('nama_marker','longitude','latitude','nomor_telepon','alamat_website','deskripsi','jenis_bangunan')
        ->get();
        return $result;
    }
}
