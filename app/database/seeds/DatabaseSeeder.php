<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->call('ApartmentsTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('ContactsTableSeeder');
	}

}
