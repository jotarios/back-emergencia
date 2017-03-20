<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Causas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causas', function (Blueprint $table){
            $table->increments('id');
            $table->string('name',150);
            $table->bigInteger('facebook_id')->nullable();
            $table->text('description');
            $table->float('gather_point_lat',8,4); //float
            $table->float('gather_point_lng',8,4);
            $table->string('city')->nullable();
            $table->string('street')->nullable();            
            $table->float('work_zone_lat',8,4);
            $table->float('work_zone_lng',8,4);
            $table->string('work_zone_radious')->nullable();
            $table->integer('expected_volunteers');
            $table->string('picture')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
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
        Schema::drop('causas');
    }
}
