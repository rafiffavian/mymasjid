<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_mosque')->unsigned()->comment('ID dari table mosque');
            $table->bigInteger('id_finance_types')->unsigned()->comment('ID dari table finance_types');
            $table->bigInteger('amount')->unsigned()->default(0);
            $table->string('description')->nullable();
            $table->timestamps();

            $table->foreign('id_mosque')->references('id')->on('mosque');
            $table->foreign('id_finance_types')->references('id')->on('finance_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finances');
    }
}
