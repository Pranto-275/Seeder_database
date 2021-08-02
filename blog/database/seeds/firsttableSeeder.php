<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class firsttableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('1stable')->insert([
            'Fname' => Str::random(5),
            'Address' => Str::random(5)
        ]);
    }
}
