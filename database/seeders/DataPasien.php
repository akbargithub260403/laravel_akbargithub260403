<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DataPasien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_data_pasien')->insert([
            'ID' => '1001',
            'nama_pasien' => 'Hilman',
            'alamat' => 'bandung',
            'no_telepon' =>rand(10,20),
            'ID_rumahsakit' => '1011'
        ]);
        DB::table('_data_pasien')->insert([
            'ID' => '1002',
            'nama_pasien' => 'Hyunkil',
            'alamat' => 'bandung',
            'no_telepon' =>rand(10,20),
            'ID_rumahsakit' => '1012'
        ]);
        DB::table('_data_pasien')->insert([
            'ID' => '1003',
            'nama_pasien' => 'alsak',
            'alamat' => 'bandung',
            'no_telepon' =>rand(10,20),
            'ID_rumahsakit' => '1012'
        ]);
        DB::table('_data_pasien')->insert([
            'ID' => '1004',
            'nama_pasien' => 'acjansa',
            'alamat' => 'bandung',
            'no_telepon' =>rand(10,20),
            'ID_rumahsakit' => '1011'
        ]);
        DB::table('_data_pasien')->insert([
            'ID' => '1005',
            'nama_pasien' => 'namnsa',
            'alamat' => 'bandung',
            'no_telepon' =>rand(10,20),
            'ID_rumahsakit' => '1013'
        ]);
    }
}
