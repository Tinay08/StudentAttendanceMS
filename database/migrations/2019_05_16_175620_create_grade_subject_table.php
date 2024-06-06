<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeSubjectTable extends Migration
{
   
    public function up()
    {
        Schema::create('grade_subject', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('subject_id');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('grade_subject');
    }
}
