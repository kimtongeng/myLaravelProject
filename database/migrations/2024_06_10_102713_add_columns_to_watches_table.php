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
        Schema::table('watches', function (Blueprint $table) {
            $table->string("mainImage");
            $table->string("sideImage");
            $table->string("subImage");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('watches', function (Blueprint $table) {
            $table->dropColumn(['mainImage', 'sideImage', 'subImage']);
        });
    }
};
