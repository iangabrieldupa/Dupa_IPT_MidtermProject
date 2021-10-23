<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'=>'Dupa',
                'fname'=>'Ian Gabriel',
                'address'=>'Ilijan Norte, Tubigon, Bohol',
                'phone'=>'09075125112',
                'email'=>'iangabrieldupa@gmail.com',
                'password'=>bcrypt('password123HAHAHA')
            ],
            [
                'lname'=>'Hancock',
                'fname'=>'Boa',
                'address'=>'Amazon Lily',
                'phone'=>'09290909091',
                'email'=>'iloveluffy@gmail.com',
                'password'=>bcrypt('luffy143')
            ],
            [
                'lname'=>'Hyuga',
                'fname'=>'Hinata',
                'address'=>'Konoha',
                'phone'=>'09541902451',
                'email'=>'hinatahyuga@gmail.com',
                'password'=>bcrypt('naruto-kun')
            ]
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
