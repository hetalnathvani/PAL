<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Rates', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index('rates_user_id_foreign');
            $table->integer('project_id')->unsigned()->index('rates_project_id_foreign');
            $table->float('Rate', 5)->default(1);
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
          Schema::drop('Rates');
    }
}
