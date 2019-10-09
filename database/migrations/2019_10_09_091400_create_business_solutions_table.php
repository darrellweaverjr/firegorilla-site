<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_solutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('headerTitle');
            $table->string('headerSubtitle');
            $table->text('headerBody');
            $table->string('discoverTitle');
            $table->string('discoverSubtitle');
            $table->text('discoverBody');
            $table->string('attackTitle');
            $table->string('attackSubtitle');
            $table->text('attackBody');
            $table->string('createTitle');
            $table->string('createSubtitle');
            $table->text('createBody');
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
        Schema::dropIfExists('business_solutions');
    }
}
