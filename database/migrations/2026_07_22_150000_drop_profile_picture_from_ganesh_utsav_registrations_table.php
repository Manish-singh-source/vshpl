<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ganesh_utsav_registrations', function (Blueprint $table) {
            if (Schema::hasColumn('ganesh_utsav_registrations', 'profile_picture')) {
                $table->dropColumn('profile_picture');
            }
        });
    }

    public function down(): void
    {
        Schema::table('ganesh_utsav_registrations', function (Blueprint $table) {
            if (!Schema::hasColumn('ganesh_utsav_registrations', 'profile_picture')) {
                $table->string('profile_picture')->nullable()->after('mobile_number');
            }
        });
    }
};