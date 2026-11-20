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
        Schema::table('business_directory_registrations', function (Blueprint $table) {
            $table->string('role')->nullable()->change();
            $table->string('business_category', 255)->change();
            $table->text('short_description')->nullable()->change();
            $table->string('your_image')->nullable()->after('flat_number');
            $table->string('business_logo')->nullable()->after('company_name');
            $table->string('gst_number', 50)->nullable()->after('business_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('business_directory_registrations', function (Blueprint $table) {
            $table->dropColumn(['your_image', 'business_logo', 'gst_number']);
            $table->string('role')->nullable(false)->change();
            $table->string('business_category', 20)->change();
            $table->text('short_description')->nullable(false)->change();
        });
    }
};
