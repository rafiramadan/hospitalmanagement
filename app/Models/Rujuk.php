<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rujuk extends Model
{
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'datapasien_id', 'id' );
    }
    
    use HasFactory;
    protected $table = 'rujukrslain';
}
