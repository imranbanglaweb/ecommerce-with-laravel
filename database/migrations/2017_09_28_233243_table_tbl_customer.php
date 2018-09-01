<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTblCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customer', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('customer_name');
            $table->string('email');
            $table->string('password');
            $table->string('mobile');
            $table->text('customer_address');
            $table->string('customer_city');
            $table->string('country');
            $table->string('zip_code');
            $table->string('fax_number');
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
        Schema::dropIfExists('tbl_customer');
    }
}
