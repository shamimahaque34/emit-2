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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image');
            $table->boolean('is_remote')->nullable();
            $table->string('posting_title')->nullable();
            $table->string('date_opened')->nullable();
            $table->string('job_description')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('job_type')->nullable();
            $table->string('apply_link')->nullable();
            $table->string('slug')->unique();
            $table->text('content')->nullable();
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
