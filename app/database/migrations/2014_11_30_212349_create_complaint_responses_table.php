<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComplaintResponsesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('complaint_responses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('complaint_id', false, true);
			$table->integer('user_id', false, true);
			$table->text('text');
			$table->timestamps();

            $table->foreign('complaint_id')->references('id')->on('complaints');
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
		Schema::drop('complaint_responses');
	}

}
