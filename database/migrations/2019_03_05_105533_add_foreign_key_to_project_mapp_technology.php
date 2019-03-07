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
        Schema::table('project_mapp_technology', function (Blueprint $table) {
            $table->foreign('tech_id')->references('id')->on('technology')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('proj_id')->references('id')->on('project')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_mapp_technology', function (Blueprint $table) {
            $table->dropForeign('project_mapp_technology_proj_id_foreign');
            $table->dropForeign('project_mapp_technology_tech_id_foreign');
        });
    }
}
