<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Restaurant',30)->create();
        // $this->call(UsersTableSeeder::class);
        $this->call(postSeeder::class);
        $this->call(UserSeeder::class);

    }
}
