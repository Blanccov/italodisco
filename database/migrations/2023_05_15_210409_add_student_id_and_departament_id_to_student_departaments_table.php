<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('student_departaments', function (Blueprint $table) {
            // $table->unsignedBigInteger('student_id');
            // $table->unsignedBigInteger('departament_id');

            // $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            // $table->foreign('departament_id')->references('id')->on('departametns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student_departaments', function (Blueprint $table) {
            //
        });
    }
};
