<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClazzSeeder extends Seeder
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
                'clazzes_name' => 'SUV'
            ],
            [
                'clazzes_name' => 'Sedan'
            ],
            [
                'clazzes_name' => 'Hatchback'
            ],
            [
                'clazzes_name' => 'Pickup'
            ],
            [
                'clazzes_name' => 'Van'
            ],
            [
                'clazzes_name' => 'CUV'
            ],
            [
                'clazzes_name' => 'Coupe'
            ],
            [
                'clazzes_name' => 'MPV'
            ]
        ]);
    }
}
