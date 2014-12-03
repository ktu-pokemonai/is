<?php

class ContactsTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            ['first_name' => 'Rytis','last_name'  => 'Raslavičius','position'=> 'Administrator','email'=> 'wergimity@gmail.com','phone'=> '+37065627414'],
            ['first_name' => 'Edita','last_name'  => 'Markauskaitė','position'=> 'Watcher','email'=> 'edita.markauskaitė@ktu.edu','phone'=> null],
            ['first_name' => 'Martynas','last_name'  => 'Stukas','position'=> 'Watcher','email'=> null,'phone'=> null],
        ];

        foreach ($data as $user) {
            Contact::create($user);
        }
    }

}