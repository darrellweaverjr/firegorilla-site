<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pageTitle');
            $table->string('serivces_title');
            $table->longtext('serivces_desc');
            $table->string('serivce_price');
            $table->string('spend_title');
            $table->longtext('spend_desc');
            $table->string('spend_price');
            $table->string('pageCTA');
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
        Schema::dropIfExists('services_pages');
    }
}
