<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 100);
            $table->unique('code');
            $table->string('name', 100);
            $table->enum('section', ['hairdressing', 'handsfeetcare', 'barbershop']);
            $table->float('price', 8, 2);
            $table->float('profit_percent', 8, 2);
            $table->float('employee_percent', 8, 2);
            $table->enum('active', ['Y', 'N']);
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
        Schema::drop('services');
    }
}
