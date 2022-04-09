<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegistarionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_registarions', function (Blueprint $table) {
            $table->id();
            $table->string('student_reg');
            $table->string('student_name');
            $table->foreignId('group_id')->constrained('groups');
            $table->foreignId('semester_id')->constraint('semester_id');
            $table->foreignId('course_id')->constraint('course_offers');
            $table->string("course_code");
            $table->string('course_credit');
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
        Schema::dropIfExists('course_registarions');
    }
}
