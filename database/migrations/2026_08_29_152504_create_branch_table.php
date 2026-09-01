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
        Schema::create('branch', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->default('Branch');
            $table->string('address', 255)->default('Karachi, Pakistan');
            $table->foreignId('manager_id')->constrained('employees')->onDelete('cascade');
            $table->decimal('latitude', 65, 30)->unique();
            $table->decimal('longitude', 65, 30)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch');
    }
};
