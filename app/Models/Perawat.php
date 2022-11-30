<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
    public function triase()
    { 
        return $this->hasMany(Triase::class, 'dataperawat_id');
    }
    
    protected $table = 'dataperawat';
}
