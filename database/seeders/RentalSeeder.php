<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rentals')->insert([
            [
                'book_id'=>1,
                'member_id'=>1,
                'staff_id'=>1,
                'returned_at'=>date('2020-01-01'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
            [
                'book_id'=>2,
                'member_id'=>2,
                'staff_id'=>2,
                'returned_at'=>date('2020-01-02'),
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
            [
                'book_id'=>3,
                'member_id'=>3,
                'staff_id'=>3,
                'returned_at'=>null,
                'updated_at'=>new DateTime(),
                'created_at'=>new DateTime(),
            ],
        ]);
    }
}
