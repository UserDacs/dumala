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
        Schema::create('liturgicals', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('requirements');
            $table->bigInteger('stipend'); 
            $table->enum('status', ['Active', 'Unactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liturgicals');
    }
};
