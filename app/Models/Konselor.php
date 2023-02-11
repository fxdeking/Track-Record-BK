<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konselor extends Model
{
    use HasFactory;
    protected $table="konselors";
    protected $fillable=['jk', 'notelp', 'nama'];

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }

    public function tindak(){
        return $this->hasMany(Tindak::class);
    }
}
