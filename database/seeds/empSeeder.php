<?php

use Illuminate\Database\Seeder;

class empSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\page::class,3)->create();
    }
}
