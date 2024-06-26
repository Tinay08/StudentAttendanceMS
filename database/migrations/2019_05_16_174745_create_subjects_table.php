<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
   
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('subject_code');
            $table->unsignedBigInteger('teacher_id');
            $table->text('description');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
