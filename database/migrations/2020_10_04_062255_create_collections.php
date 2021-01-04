<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('collection_categories');

            $table->string('image_path');
            $table->string('created_who');
            $table->string('created_when');

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
        Schema::dropIfExists('collections');
    }
}
