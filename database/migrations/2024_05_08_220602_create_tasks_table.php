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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("categori_id");
            $table->string("title")->nullable();
            $table->string("content");//->nullable();
            $table->tinyInteger("status")->default(0)->comment("0->yapılmadı  1->yapılacak  2->yapılıyor");
            $table->softDeletes();
            $table->dateTime("deadline")->nullable;
            $table->timestamps();


            $table->foreign("categori_id")->on("categories")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
