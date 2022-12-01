<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawatinap extends Model
{
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'datapasien_id', 'id' );
    }
    
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'datadokter_id', 'id' );
    }

    use HasFactory;
    protected $table = 'rawatinap';
}
