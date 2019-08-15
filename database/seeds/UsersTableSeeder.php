<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  factory(User::class)->create([
            'name' => 'Victor Puello',
            'username' => 'victor.puello',
            'email' => 'victor.puello@gmail.com',
            'password' => bcrypt('password'), // password
            'type' => 'admin'
        ]);
    }
}
