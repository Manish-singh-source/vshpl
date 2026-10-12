<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('business_directory_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('wing', 1);
            $table->string('flat_number', 50);
            $table->string('role');
            $table->string('company_name');
            $table->string('business_category', 20);
            $table->text('short_description');
            $table->string('mobile_number', 20);
            $table->string('email_address');
            $table->string('website_url')->nullable();
            $table->string('business_profile')->nullable();
            $table->json('interested_in');
            $table->string('preferred_contact_method', 20);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('business_directory_registrations');
    }
};
