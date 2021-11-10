@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $berita->judul }} </h1>
    <p><span class="text-danger">{{ $berita->kategori->nama_kategori }}</span> - {{ $berita->created_at }}</p>
    
    
    <img src="https://picsum.photos/800/400" atl="">
    <p class="mt-4 ">
        {{ $berita->isi }}
        
    </p>
</div>

@endsection
