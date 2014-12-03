<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKeyIssuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('key_issues', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id', false, true);
			$table->integer('key_id', false, true);
			$table->timestamp('issued_at')->nullable();
			$table->timestamp('returned_at')->nullable();
			$table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('key_id')->references('id')->on('keys');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('key_issues');
	}

}
