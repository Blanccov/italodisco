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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->integer('pesel');
            $table->string('email');
            $table->integer('age');
            $table->integer('phone');

            // $table->unsignedBigInteger('address_id');
            // $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            // $table->unsignedBigInteger('results_id');
            // $table->foreign('results_id')->references('id')->on('results')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
