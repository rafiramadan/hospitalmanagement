<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Triase extends Model
{
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'datapasien_id', 'id' );
        
    }

    public function perawat()
    {
        return $this->belongsTo(Perawat::class, 'dataperawat_id', 'id' );
    }

    protected $table = 'datatriase';
    use HasFactory;
}
