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
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            $table->string("name",100);
            $table->string("brand",50);
            $table->float("price",8,2);
            $table->integer("quantity");
            $table->integer("warranty");
            $table->text("highlights");
            $table->text("composition");
            $table->text("warning");
            $table->string("available",50);
            $table->text("description");
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watches');
    }
};
