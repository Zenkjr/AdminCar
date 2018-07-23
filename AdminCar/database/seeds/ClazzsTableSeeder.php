<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClazzsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clazzs')->insert([
            [
                'name' => 'SUV'
            ],
            [
                'name' => 'Sedan'
            ],
            [
                'name' => 'Hatchback'
            ],
            [
                'name' => 'Pickup'
            ],
            [
                'name' => 'Van'
            ],
            [
                'name' => 'CUV'
            ],
            [
                'name' => 'Coupe'
            ],
            [
                'name' => 'MPV'
            ]
        ]);
    }
}
