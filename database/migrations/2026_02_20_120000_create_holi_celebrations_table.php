<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('holi_celebrations', function (Blueprint $table) {
            $table->id();
            $table->string('participation_status', 10);
            $table->string('wing', 20)->nullable();
            $table->string('flat_number')->nullable();
            $table->string('full_name')->nullable();
            $table->string('mobile_number', 20)->nullable();
            $table->unsignedTinyInteger('coupons')->nullable();
            $table->unsignedInteger('total_amount')->default(0);
            $table->string('payment_mode', 20)->nullable();
            $table->boolean('payment_done')->default(false);
            $table->string('payment_screenshot')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('holi_celebrations');
    }
};
