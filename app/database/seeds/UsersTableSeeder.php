<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::create([
            'username' => 'wergimity',
            'password' => Hash::make('labas'),
            'email' => 'wergimity@gmail.com',
            'is_admin' => true
         ]);

        User::create([
            'username' => 'watch',
            'first_name' => 'Rytis',
            'last_name' => 'Raslavičius',
             'password' => Hash::make('labas'),
            'email' => 'rytis.raslavicius@ktu.edu'
        ]);

        User::create([
            'username' => 'person',
            'first_name' => 'Someone',
            'last_name' => 'Living',
            'email' => 'rytis.raslavicius@agmis.lt',
            'apartment_id' => 1,
            'password' => Hash::make('labas'),
        ]);
	}

}