<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    public function pengantarlab()
    { 
        return $this->hasMany(Pengantarlab::class, 'datadokter_id');
    }
    use HasFactory;
    protected $table = 'datadokter';
}
