<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DataRumahSakit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_data_rumah_sakit')->insert([
            'ID' => '1011',
            'nama_rumah_sakit' => 'RSKC',
            'alamat' => 'bandung',
            'email' => Str::random(10).'@gmail.com',
            'no_telepon' =>rand(10,20),
        ]);
        DB::table('_data_rumah_sakit')->insert([
            'ID' => '1012',
            'nama_rumah_sakit' => 'RSUD CIBABAT',
            'alamat' => 'bandung',
            'email' => Str::random(10).'@gmail.com',
            'no_telepon' =>rand(10,20),
        ]);
        DB::table('_data_rumah_sakit')->insert([
            'ID' => '1013',
            'nama_rumah_sakit' => 'RS Kawaluyaan',
            'alamat' => 'bandung',
            'email' => Str::random(10).'@gmail.com',
            'no_telepon' =>rand(10,20),
        ]);
    }
}
