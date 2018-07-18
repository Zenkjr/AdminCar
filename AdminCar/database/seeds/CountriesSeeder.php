<?php

use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Illuminate\Support\Facades\DB::table('countries')->insert([
            [
                'name' => 'VietNam'
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
