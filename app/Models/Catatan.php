<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    use HasFactory;
    protected $table="catatans";
    protected $fillable=['nama', 'catatan', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
