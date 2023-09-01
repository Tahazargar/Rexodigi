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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('pre_title');
            $table->string('title');
            $table->string('description');
            $table->string('service_title');
            $table->string('service_title_item_one');
            $table->string('service_description_item_one');
            $table->string('service_title_item_two');
            $table->string('service_description_item_two');
            $table->string('service_title_item_three');
            $table->string('service_description_item_three');
            $table->string('service_title_item_four');
            $table->string('service_description_item_four');
            $table->string('experience_number');
            $table->string('experience_text');
            $table->string('image');
            $table->string('alt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
