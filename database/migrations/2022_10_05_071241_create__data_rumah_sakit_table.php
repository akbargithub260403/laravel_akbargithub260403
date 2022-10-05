<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRumahSakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_data_rumah_sakit', function (Blueprint $table) {
            $table->id('ID');
            $table->string('nama_rumah_sakit',255);
            $table->string('alamat',255);
            $table->string('email',255);
            $table->bigInteger('no_telepon');
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
        Schema::dropIfExists('_data_rumah_sakit');
    }
}
