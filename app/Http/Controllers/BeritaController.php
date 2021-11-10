<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        return view("admin.berita.list",[
            "berita" => Berita::latest()->get()
        
        ]);
    }
    
    public function show(){
        return view("admin.berita.form",[
            "kategori" => \App\Models\Kategori::all()
    
        ]);
        
    }
    
    public function store(Request $request){
        $request->validate([
            "kategori_id" => "required",
            "judul"  => "required",
            "isi" =>"required"
            ]);
        
        Berita::create([
            "kategori_id" => $request->kategori,
            "judul" => $request->judul,
            "isi" => $request->isi
            
        ]);
        
        return redirect()->route("admin.berita.index")
        ->with("info","Berhasil input berita");

    }
    
    public function destroy(Berita $berita){
        $berita->delete();
        
        return redirect()->route("admin.berita.index")
        ->with("info","Berhasil hapus berita");
    }
    
    public function update(Berita $berita,Request $request){
        $berita->update([
            "kategori_id" => $request->kategori,
            "judul"=> $request->judul,
            "isi"=>$request->isi
            ]);
        
        return redirect()->route("admin.berita.index")
        ->with("info","Berhasil ubah berita");
        
    }
    
    public function edit(Berita $berita){
        return view("admin.berita.form",[
            "kategori" => \App\Models\Kategori::all(),
            "berita" => $berita
            ]);
    }
}
