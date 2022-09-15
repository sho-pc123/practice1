<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralExperiencedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_experienced_jobs', function (Blueprint $table) {
            $table->unsignedBigInteger('general_id');
            $table->unsignedBigInteger('experienced_job_id');

            $table->foreign('general_id')->references('id')->on('generals');
            $table->foreign('experienced_job_id')->references('id')->on('experienced_jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_experienced_jobs');
    }
}
