<?php

use Illuminate\Database\Seeder;
use Sexport\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'James',
            'last_name' => 'Hopkins',
            'email'=>'jhopkins@rec-illinois.com',
            'password' => \Hash::make('password'),
            'token' => '608f69c3be074eea8f6c9961fafdc3f8'
        ]);
    }
}
