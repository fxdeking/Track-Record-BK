<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konselor extends Model
{
    use HasFactory;
    protected $table="konselors";
    protected $fillable=['jk', 'notelp', 'jadwal_id'];

    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }
}
