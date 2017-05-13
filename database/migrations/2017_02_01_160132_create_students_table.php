<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('student_id')->primary();
            $table->string('barcode');
            $table->string('lname');
            $table->string('fname');
            $table->string('mname');
            $table->string('gender');
            $table->text('address');
            $table->string('email');
            $table->string('dob');
            $table->string('contact');
            $table->string('course');
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
        Schema::dropIfExists('students');
    }
}
