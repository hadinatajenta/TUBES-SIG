<?php

namespace App\Http\Controllers;
use App\Models\HomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $markers = HomeModel::all();
        return view('admin/home',compact('markers'));
    }

    public function content()
    {
        $contents = HomeModel::all();
        return view('admin/content',compact('contents'));
    }
}

