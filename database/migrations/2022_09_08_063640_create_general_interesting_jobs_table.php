<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralInterestingJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_interesting_jobs', function (Blueprint $table) {
            $table->unsignedBigInteger('general_id');
            $table->unsignedBigInteger('interesting_job_id');

            $table->foreign('general_id')->references('id')->on('generals');
            $table->foreign('interesting_job_id')->references('id')->on('interesting_jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_interesting_jobs');
    }
}
