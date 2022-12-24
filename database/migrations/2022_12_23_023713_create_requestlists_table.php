<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestlists', function (Blueprint $table) {
            $table->id();
            $table->string('order_no');
            $table->string('receive')->default(0);
            $table->string('process')->default(0);
            $table->string('finish')->default(0);
            $table->string('dispach')->default(0);
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
        Schema::dropIfExists('requestlists');
    }
}
