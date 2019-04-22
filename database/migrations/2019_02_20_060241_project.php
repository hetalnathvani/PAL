<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Project extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index('projects_users_id_foreign');
            $table->integer('technology_id')->unsigned()->index('projects_technology_id_foreign');
            $table->string('project_name', 250);
            $table->text('project_details', 250);
            $table->integer('count');
            $table->string('file', 65535);
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
        Schema::drop('projects');
    }
}
