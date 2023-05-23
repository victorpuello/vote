<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $this->call(UsersTableSeeder::class);
       /* DB::table('points')->delete();
        $this->call(PointsTableSeeder::class);
        DB::table('sectors')->delete();
        $this->call(SectorsTableSeeder::class);
        DB::table('leaders')->delete();
        $this->call(LeadersTableSeeder::class);
        DB::table('voters')->delete();
        $this->call(VotersTableSeeder::class);*/

    }
}
