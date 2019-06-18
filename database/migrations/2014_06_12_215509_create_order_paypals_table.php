<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPaypalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderpaypals', function (Blueprint $table) {
          $table->increments('id');
          $table->bigInteger('user_id');
          $table->bigInteger('service_id');
          $table->string('transaction_id')->nullable();
          $table->float('amount')->unsigned()->nullable();
          $table->bigInteger('payment_status')->unsigned()->default(0);
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
        Schema::dropIfExists('orderpaypals');
    }
}
