<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obatpasien extends Model
{
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'datapasien_id', 'id' );
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'dataobat_id', 'id' );
    }


    protected $table = 'obatpasien';
    use HasFactory;
}
