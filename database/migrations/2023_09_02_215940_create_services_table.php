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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('pre_title')->nullable();
            $table->string('title')->nullable();
            $table->string('box_one_title');
            $table->string('box_one_description');
            $table->string('box_one_button_text');
            $table->string('box_one_button_link');
            $table->string('box_two_title');
            $table->string('box_two_description');
            $table->string('box_two_button_text');
            $table->string('box_two_button_link');
            $table->string('box_three_title');
            $table->string('box_three_description');
            $table->string('box_three_button_text');
            $table->string('box_three_button_link');
            $table->string('box_four_title');
            $table->string('box_four_description');
            $table->string('box_four_button_text');
            $table->string('box_four_button_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
