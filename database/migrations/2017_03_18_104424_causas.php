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
            $table->text('description');
            $table->float('gather_point_lat'); //float
            $table->float('gather_point_lng');
            $table->string('gather_point_street', 100)->nullable();
            $table->string('city');
            $table->string('street');            
            $table->float('work_zone_lat');
            $table->float('work_zone_lng');
            $table->string('work_zone_radious')->nullable();
            $table->integer('expected_volunteers');
            $table->string('picture');
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
