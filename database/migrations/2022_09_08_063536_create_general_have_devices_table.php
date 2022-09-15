<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralHaveDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_have_devices', function (Blueprint $table) {
            $table->unsignedBigInteger('general_id');
            $table->unsignedBigInteger('have_device_id');

            $table->foreign('general_id')->references('id')->on('generals');
            $table->foreign('have_device_id')->references('id')->on('have_devices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_have_devices');
    }
}
