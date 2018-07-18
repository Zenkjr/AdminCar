<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Illuminate\Support\Facades\DB::table('brands')->insert([
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
