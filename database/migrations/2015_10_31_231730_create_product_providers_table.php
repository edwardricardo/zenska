<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificator', 10);
            $table->unique('identificator');
            $table->string('name');
            $table->string('telephone', 14);
            $table->string('fax', 14)->nullable();
            $table->string('email', 100)->nullable();
            $table->unique('email');
            $table->string('address', 256);
            $table->enum('payment', ['Contado', 'Credito'])->default('Contado');
            $table->integer('discount')->unsigned()->nullable()->default(0);
            $table->string('url', 256)->nullable();
            $table->string('contact', 100)->nullable();
            $table->string('bank', 100)->nullable();
            $table->string('bank_account', 20)->nullable();
            $table->text('observation');
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
        Schema::drop('product_providers');
    }
}
