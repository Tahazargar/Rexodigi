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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('pre_title');
            $table->string('title');
            $table->string('image_one');
            $table->string('name_one');
            $table->string('position_one');
            $table->string('instagram_one');
            $table->string('facebook_one');
            $table->string('twitter_one');
            $table->string('linkedin_one');
            $table->string('image_two');
            $table->string('name_two');
            $table->string('position_two');
            $table->string('instagram_two');
            $table->string('facebook_two');
            $table->string('twitter_two');
            $table->string('linkedin_two');
            $table->string('image_three');
            $table->string('name_three');
            $table->string('position_three');
            $table->string('instagram_three');
            $table->string('facebook_three');
            $table->string('twitter_three');
            $table->string('linkedin_three');
            $table->string('image_four');
            $table->string('name_four');
            $table->string('position_four');
            $table->string('instagram_four');
            $table->string('facebook_four');
            $table->string('twitter_four');
            $table->string('linkedin_four');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
