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
        Schema::create('contributies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soort_lids_id');
            $table->foreignId('boekjaars_id');
            $table->string('leeftijd');//dit de input voor auto calculeren?
            $table->float('bedrag', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributies');
    }
};
