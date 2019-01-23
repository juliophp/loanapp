<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
          $table->increments('id');
          $table->string('loanamount');
          $table->string('loanpurpose');
          $table->string('loanyear');
          $table->string('loanstatus')->default('pending');
          $table->integer('isclaimed')->default('0');
          $table->integer('ispaid')->default('0');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->integer('bank_id')->nullable()->unsigned();
          $table->foreign('bank_id')->references('id')->on('banks');
          $table->integer('donor_id')->nullable()->unsigned();
          $table->foreign('donor_id')->references('id')->on('donors');
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
        Schema::dropIfExists('loans');
    }
}
