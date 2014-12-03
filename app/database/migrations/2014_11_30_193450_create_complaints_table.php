<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComplaintsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('complaints', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id', false, true);
            $table->text('text');
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
		Schema::drop('complaints');
	}

}
