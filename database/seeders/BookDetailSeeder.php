<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_details')->insert([
           [
               'isbn'=>4425530039,
               'name'=>'新しい海洋科学',
               'group_code'=>4,
               'author'=>'能沢源右衛門',
               'publisher'=>'成山堂書店',
               'published_at'=>date('1987-05-01'),
           ],
           [
               'isbn'=>4101050015,
               'name'=>'仮面の告白',
               'group_code'=>9,
               'author'=>'三島由紀夫',
               'publisher'=>'新潮社',
               'published_at'=>date('1967-07-01'),
           ],
           [
               'isbn'=>4892490024,
               'name'=>'考える英文法',
               'group_code'=>8,
               'author'=>'吉川美夫',
               'publisher'=>'文建書房',
               'published_at'=>date('2022-05-01'),
           ],
           [
               'isbn'=>4101361029,
               'name'=>'恐竜図鑑',
               'group_code'=>4,
               'author'=>'ヒサクニヒコ',
               'publisher'=>'新潮社',
               'published_at'=>date('1985-7-01'),
           ],[
               'isbn'=>4641028680,
               'name'=>'憲法と裁判',
               'group_code'=>3,
               'author'=>'宮沢俊義',
               'publisher'=>'有斐閣',
               'published_at'=>date('1967-07-01'),
           ],[
               'isbn'=>4106803194,
               'name'=>'シェイクスピア全集',
               'group_code'=>9,
               'author'=>'福田恒存',
               'publisher'=>'新潮社',
               'published_at'=>date('1986-06-01'),
           ],[
               'isbn'=>4000013769,
               'name'=>'中世日本商業史の研究',
               'group_code'=>6,
               'author'=>'豊田武',
               'publisher'=>'岩波書店',
               'published_at'=>date('1952-01-01'),
           ],[
               'isbn'=>4844100823,
               'name'=>'脳と人間',
               'group_code'=>1,
               'author'=>'時実利彦',
               'publisher'=>'雷鳥社',
               'published_at'=>date('1868-07-01'),
           ],[
               'isbn'=>4041245036,
               'name'=>'ヘチマくん',
               'group_code'=>9,
               'author'=>'遠藤周作',
               'publisher'=>'角川書店',
               'published_at'=>date('1963-08-01'),
           ],[
               'isbn'=>4003256220,
               'name'=>'若き日の手紙',
               'group_code'=>9,
               'author'=>'フィリップ',
               'publisher'=>'岩波書店',
               'published_at'=>date('1928-03-01'),
           ],
        ]);
    }
}
