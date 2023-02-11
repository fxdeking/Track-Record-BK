<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table="laporans";
    protected $fillable=['pengunjung_id', 'kategori_id', 'keluhan', 'kunjungan', 'keluar', 'status'];

    public function pengunjung(){
        return $this->belongsTo(Pengunjung::class);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function tindak(){
        return $this->hasMany(Tindak::class);
    }
}
