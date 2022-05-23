<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'book_id'=>'001',
                'member_id'=>'001',
                'staff_id'=>'001',
                'returned_at'=>date('2020-01-01'),
            ],
            [
                'book_id'=>'002',
                'member_id'=>'002',
                'staff_id'=>'002',
                'returned_at'=>date('2020-01-02'),
            ],
            [
                'book_id'=>'003',
                'member_id'=>'003',
                'staff_id'=>'003',
                'returned_at'=>null,
            ],
        ]);
    }
}
