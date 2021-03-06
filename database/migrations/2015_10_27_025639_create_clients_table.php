<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificator', 9);
            $table->unique('identificator');
            $table->string('name', 100);
            $table->string('lastname',100);
            $table->string('mobile',14);
            $table->string('email',100)->nullable();
            $table->unique('email');
            $table->string('address',256);
            $table->string('telephone',14)->nullable();
            $table->date('birthday');
            $table->enum('sex', array('F','M'));
            $table->string('recommendedby', 100)->nullable();
            $table->integer('discount')->unsigned()->nullable()->default(0);
            $table->date('clientsince')->nullable();
            $table->date('lastvisit')->nullable();
            $table->string('photo',256)->nullable();
            $table->text('observation')->nullable();
            $table->enum('sendmail', array('Y', 'N'))->nullable()->default('N');
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
        Schema::drop('clients');
    }
}
