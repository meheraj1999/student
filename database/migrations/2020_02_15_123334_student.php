<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('roll',11);
            $table->string('depertment',10);
            $table->string('institutte',10);
            $table->string('contact',15);

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
        Schema::dropIfExists('student');
    }
}
