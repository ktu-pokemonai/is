<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('room_id', false, true);
			$table->string('name');
			$table->integer('capacity');
			$table->integer('from_min');
			$table->integer('to_min');
			$table->integer('duration');
			$table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipment');
	}

}
