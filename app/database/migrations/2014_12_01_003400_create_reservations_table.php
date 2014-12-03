<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id', false, true);
			$table->integer('equipment_id', false, true);
			$table->timestamp('reserved_at');
			$table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('equipment_id')->references('id')->on('equipment');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reservations');
	}

}
