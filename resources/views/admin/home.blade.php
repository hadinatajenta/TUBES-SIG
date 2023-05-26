@extends('layouts.sidebar')
@section('title','Dashboard')
@section('content')
<section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

        <form action="/search" class="search-box" method="get">
            <i class="uil uil-search"></i>
            <button  id="cari" type="submit"></button>            
            <input type="text" name="query"  placeholder="Search here...">         
        </form>
        
        <!--<img src="images/profile.jpg" alt="">-->
    </div>

    <div class="dash-content">
        <div class="activity">
            <div class="title">
                <div class="box">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Penanda terbaru</span>
                </div>
                <a href="/tambah" class="box">
                    <i class="uil uil-plus"></i>
                    <span class="text">Tambah penanda</span>
                </a>
            </div>

            
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nama Tempat</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th colspan="2" style="text-align: center">Aksi</th>
                </tr>
                @foreach ($markers as $marker)
                <tr>
                    <td>{{$marker->id}}</td>
                    <td>{{$marker->nama_marker}}</td>
                    <td>{{$marker->latitude}}</td>
                    <td>{{$marker->longitude}}</td>
                    <td>
                        <form action="/hapus/{{$marker->id}}" class="data-list" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" delete">Delete</button>
                        </form>
                    </td>
                    <td>
                        <form action="/editMaker/{{$marker->id}}" class="data-list" method="GET">
                            @csrf
                            <button type="submit" class="edit">Edit</button>
                        </form>
                    </td>
                </tr>
                    @if (isset($error))
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endif

                @endforeach 
            </table>
        </div>
    </div>
</section>

@endsection