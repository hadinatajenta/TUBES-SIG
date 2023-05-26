<?php

namespace App\Http\Controllers;
use App\Models\HomeModel;
use App\Models\MarkerModel;
use Illuminate\Http\Request;

class MarkerController extends Controller
{
    public function index()
    {    
        return view('admin/tambah' );
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_marker' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'deskripsi' => 'required',
            'nomor_telepon' => 'required',
            'alamat_website' => 'required',
            'jenis_bangunan'=> 'required',
        ]);

        HomeModel::create([
            'nama_marker' => $request->nama_marker,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'deskripsi' => $request->deskripsi,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat_website' => $request->alamat_website,
            'jenis_bangunan' => $request->jenis_bangunan,
        ]);

        return redirect('/home')->with('success', 'Product has been added');
        }
        public function destroy($id)
        {
            $marker = HomeModel::find($id);
            $marker->delete();

            return redirect('/home')->with('success', 'Product has been deleted');
        }
        //edit
        public function edit($id)
        {
            $marker = HomeModel::find($id);
            return view('admin/editMaker', compact('marker'));
        }
        public function update(Request $request, $id)
        {
            $request->validate([
                'nama_marker' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'deskripsi' => 'required',
                'nomor_telepon' => 'required',
                'alamat_website' => 'required',
                'jenis_bangunan'=> 'required',
            ]);
    
            $marker = HomeModel::find($id);
            $marker->nama_marker = $request->nama_marker;
            $marker->latitude = $request->latitude;
            $marker->longitude = $request->longitude;
            $marker->deskripsi = $request->deskripsi;
            $marker->nomor_telepon = $request->nomor_telepon;
            $marker->alamat_website = $request->alamat_website;
            $marker->jenis_bangunan = $request->jenis_bangunan;
            $marker->save();
    
            return redirect('/home')->with('success', 'Product has been updated');
        }

        //search
        public function search(Request $request)
        {
            $query = $request->input('query');
            
            if ($query) {
                $markers = HomeModel::where('nama_marker', 'LIKE', "%$query%")->get();
            } else {
                $markers = HomeModel::all();
            }
            return view('admin/home', compact('markers'));

            if ($markers->count() == 0) {
                return view('admin/home')->with('error', 'Tidak ada hasil yang ditemukan.');
            } else {
                return view('admin/home', compact('markers'));
            }
        }

        //Show bangunan 
        public function bangunan(){
            $bangunan = HomeModel::All();
            return view('content/rumah-sakit', compact('bangunan'));
        }

        //Detail bangunan
        public function show($nama_marker)
        {
            $rs = HomeModel::find($nama_marker);
            $rs = HomeModel::where('nama_marker', $nama_marker)->first();
            return view('content/informasi-rumah-sakit', compact('rs'));
        }
}
