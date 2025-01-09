<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('prefix')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('role')->default('user');
            $table->string('contact');
            $table->string('profile_image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['prefix', 'firstname', 'lastname', 'role', 'contact', 'profile_image']);
        });
    }
};
