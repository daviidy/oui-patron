<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJobIdFieldToDemandesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('demandes', function (Blueprint $table) {
        $table->integer('job_id')->unsigned()->nullable();
        $table->foreign('job_id')->references('id')->on('jobs');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('demandes', function (Blueprint $table) {
          $table->dropColumn('job_id');
      });
    }
}
