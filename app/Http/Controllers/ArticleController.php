<?php
namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //Halaman content admin
    public function index()
    {
        $contents = ArticleModel::all();
        return view('admin/content' , compact('contents'));
    }
    
    //Add Article page
    public function addArticle()
    {
        return view('admin/addArticle');
    }

    //Store Article page
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'deskripsi' => 'required',
            'gambar'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Simpan artikel ke dalam database
        $article = new ArticleModel();
        $article->judul = $request->input('judul');
        $article->isi_article = $request->input('isi');
        $article->deskripsi = $request->input('deskripsi');

        // Upload file gambar dan simpan path lengkap ke dalam database
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time().'.'.$image->getClientOriginalName();
            $path = $image->move(public_path('public/img'), $imageName);
            $article->gambar = 'public/img/'.$imageName;
        }

        $article->save();

        return redirect('/content');
    }

        //Delete Article
        public function destroy($id)
        {
            $article = ArticleModel::find($id);
        
            if (!$article) {
                return redirect('/content')->with('error', 'Product not found');
            }

            $article->delete();
            return redirect('/content')->with('success', 'Product has been deleted');
        }

        //Update Article
        public function update(Request $request, $id){
            $request->validate([
                'judul' => 'required',
                'isi' => 'required',
                'deskripsi' => 'required',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $article = ArticleModel::find($id);
            $article->judul = $request->input('judul');
            $article->isi_article = $request->input('isi');
            $article->deskripsi = $request->input('deskripsi');

            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $path = $image->move(public_path('public/img'), $imageName);
                $article->gambar = 'public/img/'.$imageName;
            }

            $article->save();

            return redirect('/content')->with('success', 'Artikel berhasil diperbarui.');
        }

        //Edit Article
        public function edit($id)
        {
            $article = ArticleModel::find($id);
            return view('admin/editArticle', compact('article'));
        }
        
        
        //Information page
        public function informasi()
        {
            $informas = ArticleModel::all();
            return view('content/informasi-kesehatan' , compact('informas'));
        }

        //Show Article
        public function show($judul)
        {
            $article = ArticleModel::find($judul);
            $article = ArticleModel::where('judul', $judul)->first();
            return view('content/contentLayout', compact('article'));
        }
        
        //Search
        public function search(Request $request)
        {
            $search = $request->input('query');

            $contents = ArticleModel::where('judul', 'like', '%' . $search . '%')->paginate();
            return view('admin/content', compact('contents'));
        }
        

        
}
