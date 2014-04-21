<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommittee extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('committee', function($table)
      {
         $table->increments('id');
         $table->string('name', 255);
         $table->string('position', 255);
         $table->boolean('active');
         $table->string('phone', 255);
         $table->string('mobile', 255);
         $table->string('email', 255);
         $table->datetime('appointed_date');
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
		Schema::drop('committee');
	}

}
