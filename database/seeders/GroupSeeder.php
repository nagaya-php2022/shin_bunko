<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            [
                'code'=>0,
                'name'=>'総記',
            ],[
                'code'=>1,
                'name'=>'哲学',
            ],[
                'code'=>2,
                'name'=>'歴史',
            ],[
                'code'=>3,
                'name'=>'社会科学',
            ],[
                'code'=>4,
                'name'=>'自然科学',
            ],[
                'code'=>5,
                'name'=>'技術',
            ],[
                'code'=>6,
                'name'=>'産業',
            ],[
                'code'=>7,
                'name'=>'芸術',
            ],[
                'code'=>8,
                'name'=>'言語',
            ],[
                'code'=>9,
                'name'=>'文学',
            ],
         ]);
    }
}
