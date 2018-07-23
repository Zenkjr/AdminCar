<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'TOYOTA'
            ],
            [
                'name' => 'MERCEDES'
            ],
            [
                'name' => 'BMW'
            ],
            [
                'name' => 'AUDI'
            ],
            [
                'name' => 'CADILAC'
            ],
            [
                'name' => 'KIA'
            ],
            [
                'name' => 'HYUNDAI'
            ],
            [
                'name' => 'MAZDA'
            ],
            [
                'name' => 'RANGEROVER'
            ],
            [
                'name' => 'FORD'
            ],
            [
                'name' => 'LEXUS'
            ],
            [
                'name' => 'SUZUKI'
            ],
            [
                'name' => 'ZOTYE'
            ],
            [
                'name' => 'CHEVROLET'
            ],
            [
                'name' => 'NISSAN'
            ],
            [
                'name' => 'MITSUBISHI'
            ],
            [
                'name' => 'HONDA'
            ],
            [
                'name' => 'Other'
            ]
        ]);
    }
}
