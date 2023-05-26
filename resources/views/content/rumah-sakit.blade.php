@extends('layouts.reusable')

@section('content')
  <h2>Rumah Sakit</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4" style="padding:20px">

  @foreach ($bangunan as $nye)
    <div class="col">
      <div class="card h-100">
        <img src="/img/rumah-sakit.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <a href="/informasi-rumah-sakit/{{$nye->nama_marker}}">{{$nye->nama_marker}}</a>
          </h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  @endforeach
  
  </div>
@endsection