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
        Schema::create('image_watches', function (Blueprint $table) {
            $table->id();
            $table->foreignId("watch_id")->constrained("watches")->onDelete("cascade");
            $table->string("mainImage");
            $table->string("sideImage");
            $table->string("subImage");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_watches');
    }
};
