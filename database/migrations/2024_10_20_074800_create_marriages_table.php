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
        Schema::create('marriages', function (Blueprint $table) {
            $table->id();
            $table->string('announcement_type');
            $table->string('marriage_bann')->nullable();
            $table->string('groom_name');
            $table->string('bride_name');
            $table->integer('groom_age');
            $table->integer('bride_age');
            $table->string('groom_address');
            $table->string('bride_address');
            $table->string('groom_parents');
            $table->string('bride_parents');
            $table->integer('parent'); 
            $table->string('status');
            $table->timestamps();
            $table->index('parent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriages');
    }
};
