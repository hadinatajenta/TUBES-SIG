@extends('layouts.sidebar')
@section('title','Informasi Artikel')

<!--content-->
@section('content')
<section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

        <form action="/search-article" class="search-box" method="get">
            <i class="uil uil-search"></i>
            <button id="cari" type="submit"></button>            
            <input type="text" name="query" placeholder="Search here...">         
        </form>
        

    </div>

    <div class="dash-content">
        <div class="activity">
            <div class="title">
                <div class="box">
                    <i class="uil uil-file"></i>
                    <span class="text">Artikel </span>
                </div>
                <a href="/tambah-artikel" class="box">
                    <i class="uil uil-plus"></i>
                    <span class="text">Tambah Artikel</span>
                </a>
            </div>

            <table style="overflow-x:auto;">
                <tr>
                    <th>ID</th>
                    <th>Judul artikel</th>
                    <th>Tanggal dibuat</th>
                    <th>Tanggal diupdate</th>
                    <th colspan="2" style="text-align: center">Aksi</th>
                </tr>
                @foreach ($contents as $content)
                <tr>
                    <td>{{$content->id}}</td>
                    <td>
                        <a href="/detail-artikel/{{$content->judul}}" target="_blank">{{$content->judul}}</a>
                    </td>
                    
                    <td>{{$content->created_at}}</td>
                    <td>{{$content->updated_at}}</td>
                    <td>
                        <form action="/hapus-artikel/{{$content->id}}" class="data-list" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete">Delete</button>
                        </form>
                    </td>
                    <td>
                        <form action="/edit-artikel/{{ $content->id }}" class="data-list" method="GET">
                            @csrf
                            <button type="submit" class="edit">Edit</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection
