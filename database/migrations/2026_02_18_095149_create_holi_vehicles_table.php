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
        Schema::create('holi_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('wing');
            $table->string('vehicle_type');
            $table->string('full_name');
            $table->string('flat_number');
            $table->string('mobile_number');
            $table->string('email')->nullable();
            $table->string('vehicle_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holi_vehicles');
    }
};
