<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    public function obatpasien()
    { 
        return $this->hasMany(Obatpasien::class, 'dataobat_id');
    }
    protected $table = 'dataobat';
    use HasFactory;
}
