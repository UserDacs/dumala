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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time_from');
            $table->time('time_to');
            $table->string('venue')->nullable();
            $table->string('address')->nullable();
            $table->string('purpose')->nullable();
            $table->string('others')->nullable();
            $table->string('sched_type');
            $table->integer('created_by');
            $table->string('created_by_name')->nullable();
            $table->integer('assign_to')->nullable();
            $table->integer('assign_by')->nullable();
            $table->integer('status');
            $table->string('is_assign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
