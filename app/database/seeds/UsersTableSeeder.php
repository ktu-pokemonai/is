<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::create([
            'username' => 'admin',
            'password' => Hash::make('labas'),
            'email' => 'admin@gmail.com',
            'is_admin' => true
         ]);
	}

}