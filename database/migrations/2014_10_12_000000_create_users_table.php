<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->string('name_surneme');
            $table->string('name_first');
            $table->string('name_surneme_furigana');
            $table->string('name_first_furigana');
            $table->string('gender');
            $table->integer('dirthday')->length(8);
            $table->integer('post_code')->length(7);
            $table->string('prefectures');
            $table->string('municipalities');
            $table->string('address');
            $table->string('building_name');
            $table->integer('phone_number');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
