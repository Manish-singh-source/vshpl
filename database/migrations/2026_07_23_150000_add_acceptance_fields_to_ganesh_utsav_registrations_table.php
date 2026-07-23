<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ganesh_utsav_registrations', function (Blueprint $table) {
            $table->boolean('is_accepted')->default(false)->after('grand_total');
            $table->timestamp('accepted_at')->nullable()->after('is_accepted');
        });
    }

    public function down(): void
    {
        Schema::table('ganesh_utsav_registrations', function (Blueprint $table) {
            $table->dropColumn(['is_accepted', 'accepted_at']);
        });
    }
};
