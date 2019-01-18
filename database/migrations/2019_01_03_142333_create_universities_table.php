<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('universityname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('photo')->default('photo.jpg');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('addresscity')->nullable();
            $table->string('addressstate')->nullable();
            $table->string('password')->default(Hash::make('password'));
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
        Schema::dropIfExists('universities');
    }
}
