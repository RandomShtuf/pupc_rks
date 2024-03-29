<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });


        Schema::create('process_steps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('process_id')->constrained()->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('process_step_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('process_step_id')->constrained()->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('course')->nullable();
            $table->string('file')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('processes');
    }
};
