<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function($table)
      {
         $table->increments('id');
         $table->integer('user');
         $table->string('location', 255);
         $table->string('name', 255);
         $table->string('address', 255);
         $table->string('phone', 255);
         $table->string('active', 1);
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
		Schema::drop('contacts');
	}

}
