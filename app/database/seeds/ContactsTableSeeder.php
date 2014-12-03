<?php

class ContactsTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            ['first_name' => 'Aldona','last_name'  => 'Krivonienė','position'=> 'Administratorė','email'=> '3bendrabutis@ktu.lt','phone'=> '(8 696) 34931'],
            ['first_name' => 'Onutė','last_name'  => 'Mecelienė','position'=> 'Budėtoja','email'=> null,'phone'=> '(8 693) 39459'],
            ['first_name' => 'Danguolė','last_name'  => 'Tverskienė','position'=> 'Budėtoja','email'=> null,'phone'=> null],
            ['first_name' => 'Regina','last_name'  => 'Stankevičienė','position'=> 'Budėtoja','email'=> null,'phone'=> null],
            ['first_name' => 'Ritonė','last_name'  => 'Žemeckienė','position'=> 'Budėtoja','email'=> null,'phone'=> null],
            ['first_name' => 'Genė','last_name'  => 'Muliuolienė','position'=> 'Budėtoja','email'=> null,'phone'=> null],
            ['first_name' => 'Jonas','last_name'  => 'Janušauskas','position'=> 'Ūkio darbininkas','email'=> null,'phone'=> null],
        ];

        foreach ($data as $user) {
            Contact::create($user);
        }
    }

}