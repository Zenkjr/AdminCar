<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'name' => 'Việt Nam'
            ],
            [
                'name' => 'Mỹ'
            ],
            [
                'name' => 'Đức'
            ],
            [
                'name' => 'Hàn Quốc'
            ],
            [
                'name' => 'Nhật'
            ],
            [
                'name' => 'Ấn Độ'
            ],
            [
                'name' => 'Đài Loan'
            ],
            [
                'name' => 'Khác'
            ]
        ]);
    }
}
