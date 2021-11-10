<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Situs Berita</title>
        
@extends('layouts.app')

@section('navbar-kategori')
<div class="container bg-secondary">
        <ul class="nav">
                @foreach ($kategori as $item)
                 <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route("kategori",["kategori_id" =>$item->id])}}">
                        {{ $item->nama_kategori }}</a>
                 </li>
                @endforeach
           
        </ul>
    
</div>
@endsection

@section ('content')

    <div class="container">
        <h1>Berita Terkini</h1>
        <hr> 
            @foreach ($berita as $item)
           <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="https://picsum.photos/200" alt="...">
                </div>
                 <div class="col-md-8">
                    <div class="card-body">
                      <h2 class="card-title">
                          <a href="{{ route("detail.berita",["berita_id" => $item->id ]) }}"> {{$item->judul}}</a> </h2>
                        <p class="card-text"> 
                            <small class="text-danger"> {{$item->kategori->nama_kategori}} </small> 
                            {{$item->created_at}}
                        </p>
                  </div>
                </div>
              </div>
            </div>
            
            @endforeach
            <div class="float-right">
                {{ $berita->links() }} 
            </div>
    </div>
    
@endsection