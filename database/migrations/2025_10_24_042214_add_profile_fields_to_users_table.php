<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nim')->unique()->after('id');
            $table->string('full_name')->after('name');
            $table->string('birth_place')->after('full_name');
            $table->date('birth_date')->after('birth_place');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nim', 'full_name', 'birth_place', 'birth_date']);
        });
    }
};