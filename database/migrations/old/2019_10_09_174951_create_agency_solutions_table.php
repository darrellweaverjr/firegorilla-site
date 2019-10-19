<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencySolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_solutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('headerTitle');
            $table->string('headerSubtitle');
            $table->text('headerBody');
            $table->string('sectionOneTitle');
            $table->string('sectionOneSubtitle');
            $table->text('sectionOneBody');
            $table->string('sectionTwoTitle');
            $table->string('sectionTwoSubtitle');
            $table->text('sectionTwoBody');
            $table->string('sectionThreeTitle');
            $table->string('sectionThreeSubtitle');
            $table->text('sectionThreeBody');
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
        Schema::dropIfExists('agency_solutions');
    }
}
