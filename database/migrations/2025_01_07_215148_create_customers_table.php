<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Campo id
            $table->string('nome'); // Campo nome
            $table->string('email')->unique(); // Campo email (único)
            $table->string('telefone'); // Campo telefone
            $table->string('endereco'); // Campo endereco
            $table->boolean('status')->default(true); // Campo status com valor padrão true
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
