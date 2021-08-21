<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('region_id')->constrained()->cascadeOnUpdate();
            $table->enum('contest', [1,2,3,4,5]);
            $table->date('date_of_birth');
            $table->enum('gender', ['l','p']);
            $table->enum('level', ['SMP', 'SMA', 'SMK']);
            $table->string('school');
            $table->string('phone');
            $table->string('teacher_name');
            $table->string('teacher_email');
            $table->string('teacher_phone');
            $table->string('ava');
            $table->string('id_card')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('payment')->nullable();
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
