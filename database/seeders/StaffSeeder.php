<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            [
                'password' => 'pass',
                'name' => '北沢良平',
            ],
            [
                'password' => 'pass',
                'name' => '堀口さくら',
            ],
            [
                'password' => 'pass',
                'name' => '長瀬愛子',
            ],
        ]);
    }
}
