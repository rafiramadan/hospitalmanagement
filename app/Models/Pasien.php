<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public function triase()
    { 
        return $this->hasMany(Triase::class, 'datapasien_id');
    }
    
    protected $table = 'datapasien';
}
