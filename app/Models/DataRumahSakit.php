<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRumahSakit extends Model
{
    use HasFactory;

    protected $table    = '_data_rumah_sakit';
    protected $fillable = ['ID','nama_rumah_sakit','alamat','email','no_telepon'];

    public function pasien()
    {
        return $this->hasMany(DataPasien::class);
    }
}
