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
        Schema::create('subclass_spell', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subclass_id');
            $table->unsignedBigInteger('spell_id');
            $table->timestamps();

            $table->foreign('subclass_id')->references('id')->on('subclasses')->onDelete('cascade');
            $table->foreign('spell_id')->references('id')->on('spells')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subclass_spell');
    }
};
