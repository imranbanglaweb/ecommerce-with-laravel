<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSittingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_sitting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('theme_name');
            $table->string('theme_dis');
            $table->string('theme_author');
            $table->string('footer_text');
            $table->string('theme_color');
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
        Schema::dropIfExists('tbl_sitting');
    }
}
