<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNimcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nimcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('birthcountry')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('birthlga')->nullable();
            $table->string('birthstate')->nullable();
            $table->string('centralID')->nullable();
            $table->string('documentno')->nullable();
            $table->string('educationallevel')->nullable();
            $table->string('email')->nullable();
            $table->string('emplymentstatus')->nullable();
            $table->string('firstname')->nullable();
            $table->string('gender')->nullable();
            $table->string('heigth')->nullable();
            $table->string('maidenname')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('middlename')->nullable();
            $table->string('nin')->nullable();
            $table->string('nok_address1')->nullable();
            $table->string('nok_address2')->nullable();
            $table->string('nok_firstname')->nullable();
            $table->string('nok_lga')->nullable();
            $table->string('nok_middlename')->nullable();
            $table->string('nok_postalcode')->nullable();
            $table->string('nok_state')->nullable();
            $table->string('nok_surname')->nullable();
            $table->string('nok_town')->nullable();
            $table->string('spokenlang')->nullable();
            $table->string('ospokenlang')->nullable();
            $table->string('othername')->nullable();
            $table->string('pfirstname')->nullable();
            $table->string('photo')->nullable();
            $table->string('surname')->nullable();
            $table->string('telephoneno')->nullable();
            $table->string('title')->nullable();
            $table->string('trackingId')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('bank_id')->nullable()->unsigned();
            $table->foreign('bank_id')->references('id')->on('banks');
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
        Schema::dropIfExists('nimcs');
    }
}
