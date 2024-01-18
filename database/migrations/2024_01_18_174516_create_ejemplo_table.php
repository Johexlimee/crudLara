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
        Schema::create('ejemplo', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 50)->nullable();
            $table->string('año', 4)->nullable();
            $table->text('descripcion')->nullable();
            $table->string('autor', 50)->nullable();
            $table->enum('prestado', ['si','no'])->default('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejemplo');
    }
};
