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
            $table->string('arName');
            $table->string('frName');
            $table->string('code')->unique();
            $table->date('dateInscription');
            $table->string('placeBirth');
            $table->date('dateBirth');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('frFatherName');
            $table->string('frMotherName');
            $table->string('studing');
            $table->string('dateStuding');
            $table->string('sex');
            $table->string('level');
            $table->timestamps();
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
