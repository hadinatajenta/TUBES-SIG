@extends('layouts.reusable')

@section('title', $article->judul)

@section('content')
    <div class="info">
        <h2>{{ $article->judul }}</h2>
        <div>{!! $article->isi_article !!}</div>
    </div>
@endsection
