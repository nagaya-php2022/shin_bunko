<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                // 'id'=>1,
                'isbn'=>4425530039,
                'stocked_at'=>date('2000-01-01'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
            [
                // 'id'=>2,
                'isbn'=>4101050015,
                'stocked_at'=>date('2000-01-01'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
            [
                // 'id'=>3,
                'isbn'=>4892490024,
                'stocked_at'=>date('2000-01-01'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
            [
                // 'id'=>4,
                'isbn'=>4101361029,
                'stocked_at'=>date('2000-01-01'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
            [
                // 'id'=>5,
                'isbn'=>4641028680,
                'stocked_at'=>date('2000-01-01'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
            [
                // 'id'=>6,
                'isbn'=>4106803194,
                'stocked_at'=>date('2000-01-01'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
            [
                // 'id'=>7,
                'isbn'=>4000013769,
                'stocked_at'=>date('2000-01-01'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
            [
                // 'id'=>8,
                'isbn'=>4844100823,
                'stocked_at'=>date('2000-01-01'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
            [
                // 'id'=>9,
                'isbn'=>4041245036,
                'stocked_at'=>date('2000-01-01'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
            [
                // 'id'=>10,
                'isbn'=>4003256220,
                'stocked_at'=>date('2000-01-01'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ]
                
         ]);
    }
}
