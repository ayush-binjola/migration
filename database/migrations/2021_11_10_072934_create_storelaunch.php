<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorelaunch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storelaunch', function (Blueprint $table) {
            $table->id();
            $table->String('slug',255);
            $table->String('name',255);
            $table->Integer('portraitImageId');
            $table->Integer('landscapeImageId');
            $table->String('blogLink');
            $table->String('email',255);
            $table->String('phonenumber',255);
            $table->String('whatsappnumber',255);
            $table->tinyInteger('isActive');
            $table->tinyInteger('displayOnBanner');
            $table->tinyInteger('displayOnHome');
            $table->tinyInteger('dispalyOnWhatsNew');
            $table->Integer('mobileImageId');
            $table->text('description');
            $table->text('details');
            $table->String('youtube',255);
            $table->String('lat',255);
            $table->String('long',255);
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
        Schema::dropIfExists('storelaunch');
    }
}
