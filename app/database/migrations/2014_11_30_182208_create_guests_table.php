<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guests', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id', false, true);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('id_nr');
			$table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guests');
	}

}
