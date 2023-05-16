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
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('departament_id')->nullable();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('departament_id')->references('id')->on('departaments')->onDelete('cascade');
            $table->unsignedBigInteger('result_id')->nullable();
            $table->foreign('result_id')->references('id')->on('results')->onDelete('cascade');

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
