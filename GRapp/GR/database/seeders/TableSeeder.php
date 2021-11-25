<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_column')->insert([
            [
                'id' => '1',
                'title' => 'オンライン婚活パーティーってなに？メリットや成功の秘訣',
                'tag' => '婚活,マッチングアプリ,オンライン',
                'updatetime'=>'2021/11/24',
                'posttime'=>'2021/11/24',
                'heding'=>'オンライン婚活パーティーとは,オンライン婚活パーティーのメリット,オンライン婚活パーティーを成功させたい',
                'photo'=>'column.jpg',
                'subtitle'=>'オンライン婚活パーティーってなに？,オン',
                'content' => '昨今の自粛ムードは婚活中の男女にとっても大きなショックだったはず。とにかく人と会わなければ始まらない！というのがかつての婚活のセオリーでしたが、今ではオンラインでの婚活も広がりはじめ、婚活の形が変わり始めています。 今回はオンラインでの婚活パーティーの概要に加え、成功させる秘訣もお伝えしていきます。',
            ],
        ]);
    }
}
