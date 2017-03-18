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
            $table->string('description', 1000);
            $table->float('gather_point_lat'); //float
            $table->float('gather_point_lng');
            $table->string('gather_point_street', 100);
            $table->string('city');
            $table->string('department');            
            $table->float('work_zone_lat');
            $table->float('work_zone_lng');
            $table->string('work_zone_radious');
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
