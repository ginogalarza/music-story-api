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
        Schema::create('artist_social_network', function (Blueprint $table) {
            $table->id();
            $table->text('url');
            $table->foreignId('artist_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->foreignId('social_network_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_social_network');
    }
};
