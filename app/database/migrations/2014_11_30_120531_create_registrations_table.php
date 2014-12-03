<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registrations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('apartment_id', false, true)->nullable();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
            $table->string('phone');
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
		Schema::drop('registrations');
	}

}
