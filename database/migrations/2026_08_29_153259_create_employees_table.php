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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->default('Employee');
            $table->string('role', 255)->default('employee');
            $table->string('email', 255)->default('employee@cms.com')->unique();
            $table->string('address', 255)->default('Karachi, Pakistan');
            $table->string('description', 255)->nullable();
            $table->string('resume', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
