<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeModel extends Model
{
    protected $table = 'marker';
    protected $fillable = [
        'nama_marker',
        'latitude',
        'longitude',
        'deskripsi',
        'nomor_telepon',
        'alamat_website',
        'jenis_bangunan',

    ];

    public $timestamps = false;
    public function allData()
    {        
        return DB::table('marker')->get();
    }
    
}
