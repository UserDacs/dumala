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
        Schema::table('users', function (Blueprint $table) {
            $table->string('register_type', 255)->nullable()->after('profile_image'); // Adjust position with 'after'
            $table->string('pass_coin', 255)->nullable()->after('register_type');   // Adjust position with 'after'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['register_type', 'pass_coin']);
        });
    }
};
