<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
    protected $table="pengunjungs";
    protected $fillable=['nama', 'kelas', 'usia', 'jk', 'alamat', 'notelp', 'kategori_id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
