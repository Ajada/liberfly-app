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
        Schema::create('lawyers_progress', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('client_name')->nullable();
            $table->string('process_number')->nullable();
            $table->string('sentence_size')->nullable();
            $table->string('n_order')->nullable();
            $table->longText('file')->nullable();
            $table->string('cpf')->nullable();
            $table->string('type_process')->nullable(); // vara
            $table->string('action')->nullable();
            $table->string('status')->nullable(); //andamento
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers_progress');
    }
};
