<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ArticleModel extends Model
{
    use HasFactory;

    protected $table = 'article';
    protected $fillable = [
        'judul',
        'isi_article',
        'deskripsi',
        'gambar',
    ];
    public $timestamps = false;

    public function allData()
    {
        return DB::table('article')->get();
    }
}
