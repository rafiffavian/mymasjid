<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMosqueImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mosque_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_mosque')->unsigned()->comment('ID dari mosque');
            $table->string('file',100);
            $table->timestamps();
            $table->foreign('id_mosque')->references('id')->on('mosque');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mosque_images');
    }
}
