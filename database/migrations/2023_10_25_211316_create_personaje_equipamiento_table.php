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
        Schema::create('personaje_items', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('personaje_id');
            // $table->unsignedBigInteger('items_id');
            // $table->timestamps();

            // $table->foreign('personaje_id')->references('id')->on('personajes')->onDelete('cascade');
            // $table->foreign('items_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('personaje_items', function (Blueprint $table) {
        //     $table->dropForeign(['personaje_id']);
        // });
        // Schema::dropIfExists('personaje_items');
    }
};
