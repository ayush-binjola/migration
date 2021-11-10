<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMalls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malls', function (Blueprint $table) {
            $table->id();
            $table->String('slug',255);
            $table->String('name',255);
            $table->text('description');
            $table->String('address',255);
            $table->String('lat',255);
            $table->String('phone',255);
            $table->String('whatsAppPhone',255);
            $table->tinyInteger('isActive');
            $table->Integer('portraitImageId');
            $table->Integer('landscapeImageId');
            $table->text('serviceDescription'); 
            $table->text('featureDescription');
            $table->Integer('mobileImageId');
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
        Schema::dropIfExists('malls');
    }
}
