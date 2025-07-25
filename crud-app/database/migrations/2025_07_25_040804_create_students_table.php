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
            $table->integer('Admission_no');
            $table->string('Student_name' , length: 50);
            $table->string('Father_name', length:  50);
            $table->string('Gender', length: 10);
            $table->integer('Telephone_number',);
            $table->string('Nic_number', length: 12);
            $table->date('Date_of_birth',);
            $table->string('Address', length: 500);
            $table->date('Joint_date',);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
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
