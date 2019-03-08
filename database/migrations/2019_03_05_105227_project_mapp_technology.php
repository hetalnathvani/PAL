<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectMappTechnology extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_map_technologies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('technology_id')->unsigned()->index('projects_map_technologies_technology_id_foreign');
            $table->integer('project_id')->unsigned()->index('projects_map_technologies_project_id_foreign');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project_map_technologies');
    }
}
