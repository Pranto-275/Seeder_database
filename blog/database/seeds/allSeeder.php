<?php

use Illuminate\Database\Seeder;

class allSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            firsttableSeeder::class,
            StudentsSeeder::class
        ]);
    }
}
