<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMigrationTravel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travels', function (Blueprint $table) {
            //// Create new data for the travel table 
            $table->text('description');
            $table->tinyInteger('duration');
            $table->foreignId('id_transport');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travels', function (Blueprint $table) {
            //// Remove the new fields created
            $table->dropColumn('description');
            $table->dropColumn('duration');
            $table->dropColumn('id_transport');
        });
    }
}
