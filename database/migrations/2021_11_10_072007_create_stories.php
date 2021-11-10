<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->String('slug',255);
            $table->String('name',255);
            $table->Integer('portraitImageId');
            $table->Integer('landscapeImageId');
            $table->dateTime('date');
            $table->tinyInteger('displayOnHome');
            $table->tinyInteger('dispalyOnWhatsNew');
            $table->tinyInteger('displayOnBanner');
            $table->Integer('mobileImageId');
            $table->String('blogLink');
            $table->text('description');
            $table->text('details');
            $table->String('youtube',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stories');
    }
}
