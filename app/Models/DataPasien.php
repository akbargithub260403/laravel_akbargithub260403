<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
    use HasFactory;

    protected $table    = '_data_pasien';
    protected $fillable = ['ID','nama_pasien','alamat','no_telepon','ID_rumahsakit'];

    public function rumahsakit()
    {
        return $this->hasOne(DataRumahSakit::class);
    }
}
