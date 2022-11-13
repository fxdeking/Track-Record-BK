<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table="kategoris";
    protected $fillable=['nama', 'deskripsi'];

    public function pengunjung(){
        return $this->hasMany(Pengunjung::class);
    }

    public function laporan(){
        return $this->hasMany(Laporan::class);
    }
}
