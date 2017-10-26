<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned(); //foriegn key
            $table->integer('phone_number');
            $table->integer('ic');
            $table->char('gender');
            $table->date('birthday');
            $table->string('pp'); // profile picture URL
            $table->integer('office_number')->nullable();
            $table->integer('home_number')->nullable();
            $table->string('country');
            $table->string('state')->nullable();
            $table->string('district')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
