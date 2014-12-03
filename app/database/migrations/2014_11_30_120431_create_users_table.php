<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('apartment_id', false, true)->nullable();
			$table->string('username');
			$table->string('password');
			$table->string('email');
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
            $table->string('remember_token')->nullable();
            $table->boolean('is_admin');
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
		Schema::drop('users');
	}

}
