<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiseaseSymptomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_symptom', function (Blueprint $table) {
            $table->integer('disease_id')->unsigned();
            $table->integer('symptom_id')->unsigned();

            $table->foreign('disease_id')->references('id')->on('diseases');
            $table->foreign('symptom_id')->references('id')->on('symptoms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('disease_symptom');
    }
}
