<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMosqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mosque', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->text('address');
            $table->string('phone',15);
            $table->decimal('longtitude',5,5);
            $table->decimal('latitude',5,5);
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
        Schema::dropIfExists('mosque');
    }
}
