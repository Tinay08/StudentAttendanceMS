<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('roll_number');
            $table->enum('gender', ['male', 'female',]);
            $table->string('phone');
            $table->date('dateofbirth');
            $table->string('permanent_address');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
