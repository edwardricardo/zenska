<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->enum('active', ['Y', 'N']);
            $table->text('observation');
            $table->integer('paymenttype_id')->unsigned();
            $table->foreign('paymenttype_id')->references('id')->on('payment_types');
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
        Schema::drop('payment_methods');
    }
}
