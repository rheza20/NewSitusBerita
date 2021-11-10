<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('berita.home',[
        "kategori" => \App\Models\Kategori::all(),
        "berita" => \App\Models\Berita::latest()->paginate(10)
    ]);
});

Route::get('/kategori/{kategori_id}',function($kategori_id){
    return view('berita.home',[
        "kategori" => \App\Models\Kategori::all(),
        "berita" => \App\Models\Berita::where("kategori_id",$kategori_id)
                            ->latest()
                            ->paginate(10)
    ]);
})->name("kategori");

Route::get('/detail/{berita_id}',function($berita_id){
    return view('berita.detail',[
        "berita" => \App\Models\Berita::find($berita_id)
    ]);
})->name("detail.berita");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
