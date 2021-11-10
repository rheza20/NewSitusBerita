@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Input Berita</h1>
        <hr>
        <form action="{{ isset($berita)?route("admin.berita.update",$berita):route("admin.berita.store") }}" autocomplete="off" method="POST">
            @csrf
            <div class="form-group">
                 <label for="">Kategori</label>
                    <select name="kategori" id="" class="form-control" >
                     @foreach ($kategori as $item)
                        <option value="{{$item->id}}"
                        @isset($berita)
                            @if($berita->kategori_id == $item->id)
                            {{"selected"}}
                            @endif
                        @endisset>{{$item->nama_kategori}} </option>
                    @endforeach
                     </select>
             </div>
             
            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                    @isset($berita)
                    value='{{ $berita->judul }}'
                    @endisset>
                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
           
            <div class="form-group">
                <label for="">Isi</label>
                <textarea name="isi" id="" cols="30" rows="10" 
                    class="form-control @error('isi') is-invalid @enderror">
                    @isset($berita){{$berita->isi}}@endisset
                </textarea>
                 @error('isi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="form-group d-flex flex-row-reverse">
                <input type="submit" class="btn btn-success" value="simpan">
            </div>
        </form>
    </div>
@endsection