<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ganesh_utsav_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('resident_type', 20);
            $table->string('wing', 20);
            $table->string('flat_number', 50);
            $table->string('full_name');
            $table->string('mobile_number', 20);
            $table->unsignedInteger('contribution_amount')->default(1000);
            $table->boolean('has_extra_coupon')->default(false);
            $table->unsignedTinyInteger('extra_coupon_quantity')->default(0);
            $table->unsignedInteger('extra_coupon_unit_amount')->default(250);
            $table->unsignedInteger('extra_coupon_total')->default(0);
            $table->boolean('is_sponsor')->default(false);
            $table->string('sponsor_description')->nullable();
            $table->text('sponsor_about')->nullable();
            $table->unsignedInteger('sponsor_amount')->default(0);
            $table->string('sponsor_payment_method', 30)->nullable();
            $table->string('sponsor_payment_screenshot')->nullable();
            $table->unsignedInteger('grand_total')->default(1000);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ganesh_utsav_registrations');
    }
};