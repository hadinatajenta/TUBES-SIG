<?php

namespace App\Http\Controllers;
use App\Models\MapModel;
use Illuminate\Http\Request;
use App\Models\ArticleModel;
use App\Models\HomeModel;
class MapController extends Controller
{
    public function __construct()
    {
        $this->MapModel = new MapModel();
    }

    public function index()
    {
        $total_markers = HomeModel::count();
        $total_articles = ArticleModel::count();
        return view('content/welcome', compact('total_markers', 'total_articles'));
    }


    public function json(){
        $results = $this->MapModel->allData();
        return json_encode($results);
    }
}

