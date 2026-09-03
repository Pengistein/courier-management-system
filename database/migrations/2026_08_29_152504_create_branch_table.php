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
            $table->decimal('latitude', 65, 30);
            $table->decimal('longitude', 65, 30);
            $table->string('timing', 255)->default('9:00 AM - 6:00 PM');
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
