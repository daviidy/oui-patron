<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre')->default('Menuiserie');
            $table->string('description1')->default('Aucune description');
            $table->string('photo1')->default('image.jpg');
            $table->string('description2')->default('Aucune description');
            $table->string('photo2')->default('image.jpg');
            $table->string('description3')->default('Aucune description');
            $table->string('photo3')->default('image.jpg');
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
        Schema::dropIfExists('jobs');
    }
}
