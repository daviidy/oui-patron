<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('David Yao');
            $table->string('email')->default('david@oschool.ci');
            $table->double('tel')->default('58450600');
            $table->string('title')->default('Réparation évier');
            $table->string('type')->default('Plomberie');
            $table->date('date')->default('20181009');
            $table->string('place')->default('Abidjan');
            $table->string('photo')->default('image.jpg');
            $table->string('message')->default('Aucun message');
            $table->string('statut')->default('En attente');
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
        Schema::dropIfExists('demandes');
    }
}
