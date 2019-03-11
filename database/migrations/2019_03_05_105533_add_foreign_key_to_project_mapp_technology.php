<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToProjectMappTechnology extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects_map_technologies', function (Blueprint $table) {
            $table->foreign('technology_id')->references('id')->on('technologies')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('project_id')->references('id')->on('projects')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects_map_technologies', function (Blueprint $table) {
            $table->dropForeign('projects_map_technologies_project_id_foreign');
            $table->dropForeign('projects_map_technologies_technology_id_foreign');
        });
    }
}
