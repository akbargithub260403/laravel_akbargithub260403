<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_data_pasien', function (Blueprint $table) {
            $table->id('ID');
            $table->string('nama_pasien',255);
            $table->string('alamat',255);
            $table->bigInteger('no_telepon');
            $table->bigInteger('ID_rumahsakit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_data_pasien');
    }
}
