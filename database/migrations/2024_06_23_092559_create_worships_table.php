<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create worships table
        Schema::create('worships', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('title');
            $table->timestamps();
        });

        // Create worship_member pivot table with 'position' field
        Schema::create('worship_member', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worship_id')->constrained('worships')->onDelete('cascade');
            $table->foreignId('member_id')->constrained('members')->onDelete('cascade');
            $table->string('position'); // Added 'position' field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worship_member');
        Schema::dropIfExists('worships');
    }
}
