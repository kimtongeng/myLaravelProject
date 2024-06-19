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
        Schema::create('check_outs', function (Blueprint $table) {
            $table->id();

            $table->string("name",50);
            $table->string("email",100);
            $table->string("country",50);
            $table->text(  "address");
            $table->string("city",50);
            $table->string("state",50);
            $table->string("postal_code",50);
            $table->string("calling_code",50);
            $table->string("phone",50);
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->unsignedBigInteger('watch_id');
            $table->foreign("watch_id")->references("id")->on("watches")->onDelete("cascade");
            $table->integer("quantity");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_outs');
    }
};
