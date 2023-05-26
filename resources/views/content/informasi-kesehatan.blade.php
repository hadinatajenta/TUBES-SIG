@extends('layouts.reusable')

@section('title', ' Artikel Informasi Kesehatan')
    
@section('content')

<div class="information-list">
    @foreach ($informas as $info)
    <div class="card mb-3" style=" border:none; max-width:700px; margin:10px 0; ">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $info->gambar}}"  class="fixed-img" alt="...">
            </div>
            
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><a href="/detail-artikel/{{$info->judul}}" style="text-decoration:none;">{{$info->judul}}</a></h5>
                    <p class="card-text">{{ substr($info->deskripsi, 0, 80)}}....</p>
                    <p class="card-text"><small class="text-muted">Last updated info {{$info->updated_at}}</small></p>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
</div>

@endsection