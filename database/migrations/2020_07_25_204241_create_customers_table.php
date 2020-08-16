<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
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
         $table->string('name', 100);
         $table->integer('rg')->nullable();
         $table->integer('cpf')->nullable();
         $table->string('phone',25);
         $table->string('cel',25);
         $table->string('email')->unique();
         $table->date('birth')->nullable();
         $table->string('gender',1);
         $table->text('description')->nullable();
         $table->double('income',10,2)->nullable();
         $table->timestamps();
    });
    Schema::create('properties', function (Blueprint $table) {
        $table->increments('id');
        $table->string('type', 45);
        $table->string('address',85);
        $table->string('burgh',55);
        $table->string('city',55);
        $table->string('state',2);
        $table->double('rating',10,2);
        $table->timestamps();
   });
   Schema::create('Details', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('area')->nullable();
    $table->integer('suite')->nullable();
    $table->integer('dormitory')->nullable();
    $table->integer('bathroom')->nullable();
    $table->text('description')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
