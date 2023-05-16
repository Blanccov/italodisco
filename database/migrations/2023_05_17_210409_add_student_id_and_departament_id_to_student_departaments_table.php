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
            $table->unsignedBigInteger('students_id');
            $table->unsignedBigInteger('departaments_id');
            $table->foreign('students_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('departaments_id')->references('id')->on('departaments')->onDelete('cascade');
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
