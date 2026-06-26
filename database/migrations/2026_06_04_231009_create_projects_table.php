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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->json('name')->unique();
            $table->string('slug')->unique();
            $table->json('tiny_description');
            $table->json('description');
            $table->string('main_image')->nullable();
            $table->string('main_image_public_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('url')->nullable();
            $table->string('live_url')->nullable();
            $table->boolean('is_draft');
            $table->boolean('is_company')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};