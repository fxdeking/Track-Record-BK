<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindak extends Model
{
    use HasFactory;
    protected $table="tindaks";
    protected $fillable=['laporan_id', 'konselor_id', 'pertemuan', 'tindakan'];

    public function laporan(){
        return $this->belongsTo(Laporan::class);
    }

    public function konselor(){
        return $this->belongsTo(Konselor::class);
    }
}
