@extends('layouts.reusable')

@section('title', $rs->nama_marker)

@section('content')
    <div class="info">
        <h2>{{ $rs->nama_marker }}</h2>
        <div>{!! $rs->deskripsi!!}</div>
    </div>
@endsection
