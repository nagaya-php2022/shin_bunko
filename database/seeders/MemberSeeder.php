<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'name' => '西川恵子',
                'address' => '東京都新宿区二十騎町1-19',
                'tel' => '09024102983',
                'email' => 'keiko93711@ssnfk.cw',
                'birthday' => date('1972-11-06'),
            ],
            [
                'name' =>'稲葉祐介',
                'address' =>'東京都新宿区二十騎町1-11-6',
                'tel' => '08039398175',
                'email' => 'yuusuke2394@xqwzoxbgg.xi',
                'birthday' => date('1999-05-10'),
            ],
            [
                'name' => '北島菜摘',
                'address' => '東京都新宿区二十騎町1-6',
                'tel' => '09010233658',
                'email' => 'natsumi9521@vzvurevuz.qc',
                'birthday' => date('1994-06-10'),
            ],
        ]);
    }
}
