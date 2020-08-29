<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->date('dob');
            $table->string('username')->unique();
            $table->string('gender');
            $table->string('nationality')->nullable();
            $table->string('stateoforigin')->nullable();
            $table->string('phone');
            $table->string('bvn')->nullable();
            $table->string('degreeverified')->nullable();
            $table->string('bvnverified')->nullable();
            $table->string('creditchecked')->nullable();
            $table->string('addresslineone')->nullable();
            $table->string('addresslinetwo')->nullable();
            $table->string('addresscity')->nullable();
            $table->string('addressstate')->nullable();
            $table->string('addressyears')->nullable();
            $table->string('addresscountry')->nullable();
            $table->string('facebookhandle')->nullable();
            $table->string('twitterhandle')->nullable();
            $table->string('bank')->nullable();
            $table->string('accountnumber')->nullable();
            $table->string('program')->nullable();
            $table->string('matricno')->nullable();
            $table->string('tuitionfee')->nullable();
            $table->string('yearofgraduation')->nullable();
            $table->string('department')->nullable();
            $table->string('cgpa')->nullable();
            $table->string('currentgpa')->nullable();
            $table->string('email')->unique();
            $table->integer('university_id')->nullable()->unsigned();
            $table->foreign('university_id')->references('id')->on('universities');
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
