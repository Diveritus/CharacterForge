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
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            // $table->unsignedBigInteger('raza_id');
            // $table->unsignedBigInteger('clase_id');
            $table->integer('nivel');
            // $table->unsignedBigInteger('usuario_id');
            $table->text('descripcion');
            // $table->unsignedBigInteger('stat_id');
            // $table->unsignedBigInteger('background_id');
            // $table->unsignedBigInteger('habilidad_id');
            // $table->unsignedBigInteger('hechizo_id')->nullable();
            // $table->unsignedBigInteger('equipamiento_id')->nullable();
            // $table->unsignedBigInteger('caracteristica_id')->nullable();
            // $table->unsignedBigInteger('feat_id')->nullable();
            // $table->timestamps();
        });

        // Schema::table('personajes', function (Blueprint $table) {
        //     $table->foreign('raza_id')->references('id')->on('races')->onDelete('cascade');
        //     $table->foreign('clase_id')->references('id')->on('classes')->onDelete('cascade');
        //     $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->foreign('hechizo_id')->references('id')->on('spells')->onDelete('cascade');
        //     $table->foreign('equipamiento_id')->references('id')->on('items')->onDelete('cascade');
        //     $table->foreign('caracteristica_id')->references('id')->on('features')->onDelete('cascade');
        //     $table->foreign('feat_id')->references('id')->on('feats')->onDelete('cascade');
        //     $table->foreign('background_id')->references('id')->on('backgrounds')->onDelete('cascade');
        //     $table->foreign('habilidad_id')->references('id')->on('habilidades')->onDelete('cascade');
        //     $table->foreign('stat_id')->references('id')->on('stats')->onDelete('cascade');
        // });
    }
    
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes');
    }
};
