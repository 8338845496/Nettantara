<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaundryRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laundry_requests', function (Blueprint $table) {
            $table->id();
            $table->string('order_no');
            $table->string('product');
            $table->string('date');
            $table->string('mobile');
            $table->string('address');
            $table->string('contact');
            $table->string('receive');
            $table->string('process');
            $table->string('finish');
            $table->string('dispach');
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
        Schema::dropIfExists('laundry_requests');
    }
}
