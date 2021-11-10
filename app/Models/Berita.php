<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = "tblberita";
    
    protected $fillable = ["kategori_id", "judul", "isi","user_id"];
    
    /**
     * Get the user that owns the Berita
     * 
     * @return \Illuminate\Database\Relations\BelongsTo
     */
    
    public function kategori()
    {
     return $this->belongsTo(Kategori:: class,'kategori_id', 'id');
    }
}
