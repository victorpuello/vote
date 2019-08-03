<?php

use Illuminate\Database\Seeder;

class VotersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(\App\Voter::class,3500)->create();
    }
}
