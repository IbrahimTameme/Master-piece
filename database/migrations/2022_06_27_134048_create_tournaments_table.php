<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->bigIncrements('tourn_id');
            $table->string('tourn_name');
            $table->string('tourn_category');
            $table->integer('tourn_teams_amount');
            $table->string('tourn_desciption');
            $table->dateTime('tourn_start_data');
            $table->dateTime('tourn_end_data');
            $table->string('tourn_prize');
            $table->string('tourn_creator');
            $table->boolean('tourn_staduim');
            $table->boolean('tourn_referee');
            $table->boolean('tourn_tools');
            $table->boolean('is_set');






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
        Schema::dropIfExists('tournaments');
    }
}
