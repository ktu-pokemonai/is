<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrashesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trashes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('apartment_id', false, true);
			$table->timestamps();

            $table->foreign('apartment_id')->references('id')->on('apartments');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trashes');
	}

}
