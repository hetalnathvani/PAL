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
        Schema::create('Project_mapp_technology', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tech_id')->unsigned()->index('project_mapp_technology_tech_id_foreign');
            $table->integer('Proj_id')->unsigned()->index('project_mapp_technology_Proj_id_foreign');
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
        Schema::drop('Project_mapp_technology');
    }
}
