<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_reg');
            $table->foreignId('group_id')->constrained('groups');
            $table->foreignId('semester_id')->constrained('semesters');
            $table->integer('subject_id');
            $table->integer('subject_code');
            $table->integer('subject_credit');
            $table->integer('letter_grad');
            $table->integer('grad_point');
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
        Schema::dropIfExists('results');
    }
}
