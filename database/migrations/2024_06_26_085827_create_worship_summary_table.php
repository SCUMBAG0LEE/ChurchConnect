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
        // Create worships summary table
        Schema::create('worship_summary', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worship_id')->constrained('worships')->onDelete('cascade'); //FK constraint
            $table->string('speaker');
            $table->string('sermonTitle');
            $table->text('content');
            $table->text('bibleVerse'); //all the bible verse stored here as text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worship_summary');
    }
};
