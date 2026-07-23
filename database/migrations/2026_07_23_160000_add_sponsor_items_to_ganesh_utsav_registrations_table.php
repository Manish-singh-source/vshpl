<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ganesh_utsav_registrations', function (Blueprint $table) {
            $table->json('sponsor_items')->nullable()->after('sponsor_description');
        });
    }

    public function down(): void
    {
        Schema::table('ganesh_utsav_registrations', function (Blueprint $table) {
            $table->dropColumn('sponsor_items');
        });
    }
};
