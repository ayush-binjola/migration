<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->Integer('brandId');
            $table->Integer('mallId');
            $table->String('slug');
            $table->String('name');
            $table->String('level');
            $table->String('shopnumber');
            $table->String('email');
            $table->String('phonenumber');
            $table->String('whatsappnumber');
            $table->String('openingtime');
            $table->String('closingtime');
            $table->tinyInteger('isActive');
            $table->String('ordertype');
            $table->text('description');
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
        Schema::dropIfExists('stores');
    }
}
