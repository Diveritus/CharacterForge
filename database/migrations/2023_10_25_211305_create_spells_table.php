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
        Schema::create('spells', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('escuela');
            $table->string('rango');
            $table->string('duracion');
            $table->integer('level');
            $table->text('descripcion');
            $table->boolean('is_cantrip')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personajes', function (Blueprint $table) {
            $table->dropForeign(['hechizo_id']);
        });

        Schema::dropIfExists('spells');
    }
};
