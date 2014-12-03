<?php

class ApartmentsTableSeeder extends Seeder {

	public function run()
	{
        Apartment::create(['nr' => 101, 'capacity' => 3]);
	}

}