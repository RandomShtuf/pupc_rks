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
            $table->longText('description')->nullable();
            $table->timestamps();
        });


        Schema::create('process_steps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('process_id')->constrained()->onDelete('cascade');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('attachment_title')->nullable();
            $table->string('attachment_description')->nullable();
            $table->string('attachment_course')->nullable();
            $table->timestamps();
        });

        Schema::create('process_step_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('process_step_id')->constrained()->onDelete('cascade');
            $table->string('file')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
        });

        Schema::create('auditor_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('process_step_attachment_id')->constrained()->onDelete('cascade');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('processes');
        Schema::dropIfExists('process_steps');
        Schema::dropIfExists('process_step_attachments');
        Schema::dropIfExists('auditor_attachments');
    }
};
