<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Iso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('isos', function (Blueprint $table) {
           $table->increments('id');
           $table->string('ref');
           $table->string('control_point');
           $table->string('applies');
           $table->text('statement');
           $table->string('responsibility');
           $table->string('reference');
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
        //
        Schema::drop("isos");
    }
}
