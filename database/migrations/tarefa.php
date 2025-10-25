<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    protected $connection = "sqlite";

    // Operações de inserção.
    public function up(): void
    {
        Schema::create('tarefa', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->boolean('completo')->unique();
        });
    }

    // Reversão de inserções.
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
