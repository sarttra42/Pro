<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('code',5);
            $table->string('name',100);
            $table->string('type_activity',100);
            $table->string('address',100);
            $table->string('center',100);
            $table->date('day');
            $table->time('time_start');
            $table->time('time_end');
            $table->string('detail',500);
            $table->increments('year',5);
            $table->increments('term',1);
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
    }
}
