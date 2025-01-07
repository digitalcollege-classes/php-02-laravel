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
        Schema::create('Adress', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('number');
            $table->string('neighborhood');
            $table->float('city');
            $table->integer('state');
            $table->integer('postal code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Adress'); 
    }
};
