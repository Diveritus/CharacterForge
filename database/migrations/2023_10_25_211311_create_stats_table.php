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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->integer('fuerza')->default(8); 
            $table->integer('destreza')->default(8); 
            $table->integer('constitucion')->default(8); 
            $table->integer('inteligencia')->default(8); 
            $table->integer('sabiduria')->default(8); 
            $table->integer('carisma')->default(8);
            $table->unsignedBigInteger('personaje_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
