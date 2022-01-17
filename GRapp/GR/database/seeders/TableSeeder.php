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
                'id' => 1,
                'title' => 'オンライン婚活パーティーってなに？メリットや成功の秘訣',
                'tag1' => 'オンラインデート',
                'tag2' => '婚活',
                'tag3' => 'オンラインパーティー',
                'tag4' => '結婚',
                'updatetime'=>'2021/11/24',
                'posttime'=>'2021/11/24',
                'introduction'=>'昨今の自粛ムードは婚活中の男女にとっても大きなショックだったはず。とにかく人と会わなければ始まらない！というのがかつての婚活のセオリーでしたが、今ではオンラインでの婚活も広がりはじめ、婚活の形が変わり始めています。 今回はオンラインでの婚活パーティーの概要に加え、成功させる秘訣もお伝えしていきます。',
                'heding1'=>'オンライン婚活パーティーとは',
                'heding2'=>'オンライン婚活パーティーのメリット',
                'heding3'=>'オンライン婚活パーティーを成功させるには',
                'photo1'=>'1f11051ee7262d20ee0d4688db1fe4a6.jpg',
                'photo2'=>'bf98c359e66a621158c64fcbed825d8c.jpg',
                'photo3'=>'a4e6c689b559d3a4b89bab60d4a1aef1.jpg',
                'samnail'=>'column.jpg',
                'subheding11'=>'オンライン婚活パーティーってなに？',
                'subheding12'=>'オンラインパーティの流れ',
                'subheding21'=>'緊張が少ない',
                'subheding22'=>'費用の負担が少なく済む',
                'subheding31'=>'服装やメイクはきちんと',
                'subheding32'=>'映り方にこだわる',
                'content11'=>'まず、オンライン婚活パーティーとはいったいどういった趣旨のことをいうのでしょうか。簡単にお伝えすると自宅からパソコンやスマホを使って、パーティーに参加できるというものです。

                参加者全員の顔が画面に映り、グループでおしゃべりを楽しんだり時間ごとに1対1でじっくり話しができたりと、主催する会社によって形は様々です。
                
                会社によって状況は違いますが、居住地域を選択できたり、年収や年齢を限定したりといった基本的な形態は通常の婚活パーティーとは変わりません。きちんとした会員の方が参加されるので、オンラインだから不安、ということはなさそうです。
                
                また、当日の流れもスタッフがサポートし、スムーズに進行するような工夫がなされているので安心して参加しましょう。',
                'content12'=>'実際のオンライン婚活パーティーの流れを見てみましょう。（あくまで一例であり、各会社の婚活パーティーによって違いがあります。）

                ・事前準備
                Zoomなど、指定されたコミュニケーションアプリを事前にダウンロードしておき、パーティーが始まる少し前にはログインしておきます。通常の婚活パーティー同様、ギリギリのログインはあまりよい印象を与えないので、時間には注意しましょう。もちろん遅刻は大きなマイナスイメージです。
                
                ・オンライン婚活の始まり方
                スタッフから、進行の流れや注意事項などの説明があります。目の前に人がいないとつい気が緩んでしまうこともありますが、気配り、思いやりはオンラインでも同じです。ルールをしっかり守って楽しく進めましょう。
                
                ・自己紹介
                明るく自己紹介をしましょう。オンラインでも第一印象は重要です。声や表情などでしっかり自分をアピールしてくださいね。
                
                ・トークタイム
                トークタイムでは、スタッフがテーマを用意してくれる場合もあります。スタッフがお互いの印象をとりまとめて、マッチングしたカップルには2人でのトークタイムを設けてくれる場合もあるようです。
                
                普段の婚活パーティーでは周りの目が気になって2人で話しづらいこともありますが、オンラインでは気兼ねなくじっくり話すことができるでしょう。
                
                ・連絡先交換
                多くの会社では連絡先交換の時間が設けられています。連絡先が交換できたら、その後はオンラインデートでもっと深い話しをするのも良いですね。出会いがオンラインなら、その後実際に対面のデートができるまではオンラインで仲を深めるのも抵抗が減るのではないでしょうか。',
                'content21'=>'対面での婚活パーティーに出かけるのはなかなか勇気がいるものです。パーティー会場についても、なんとなく手持ち無沙汰で始まるまでにそわそわしてしまったり、緊張してお手洗いに行きたくなってしまったりとバタバタしたりする人も少なくないのではないでしょうか。

                それに比べて、オンライン婚活パーティーは、自分の部屋から参加できるので、あまり緊張することなく、普段通りリラックスして臨めます。
                
                直前まで身だしなみのチェックをしたり、どんなことを話そうかとゆっくり考えたりできるので、より普段の自分に近い姿を見せられるのではないでしょうか。',
                'content22'=>'通常に比べて費用の負担が少なく済むのもうれしいポイントです。会場に向かうとなると交通費がかかりますし、女性なら着ていきたい洋服に合わせて靴やバッグを新調したい、など何かとお金がかかりがちになってしまうものです。

                長期戦でもいいので納得できる相手を探したいという人であれば、費用はできるだけ少ない方がありがたいですよね。',
                'content31'=>'自宅からの参加だとついついリラックスムードになりがちですが、きちんとした清潔感ある服装を心がけましょう。

                実際に対面すると、雰囲気や細かい表情の変化で印象が伝わりますが、オンラインでは画面に映っているものが全てです。女性であればメイクやアクセサリー、男性ならば髭や髪型など、細かいところにも気を配りましょう。',
                'content32'=>'画面に映る背景も少し工夫してみてください。素の自分を知ってもらいたいと考えていても、相手はそうとは限りません。部屋の中に洗濯物がぶら下がっていたり、ゴミの日を待っているゴミ袋が見えたりすると、第一印象があまり良くないです。

                適度に部屋を片付けて、画面に映る部分だけでもすっきりさせましょう。一番広い壁を背景にしたり、カーテンの前にしたりするのもおすすめです。
                使用するツールによっては背景を変更できるものもあるので、事前に確認しておくとよいかもしれません。
                
                また、事前にカメラ写りのチェックも忘れないようにしましょう。カメラの高さを目線と同じくらいか少し上くらいにすると、向かい合って話しているのと同じような角度になります。小顔効果を出すのであれば、カメラをほんの少し見上げるように設置するという方法もあります。いろいろ事前に試してみましょう。
                
                顔が明るく映ると好印象なので、電気や窓からの光を考慮して場所を選ぶのも大切です。逆光になって相手から顔がよく見えないとならないように、自分が一番魅力的に映る場所やカメラの角度を調整してみてください。',
            ],
            [
                'id' => 2,
                'title' => '同性婚・パートナーシップの 現在と未来',
                'tag1' => 'LGBT',
                'tag2' => '同性婚',
                'tag3' => 'パートナーシップ',
                'tag4' => 'セクシャルマイノリティ',
                'updatetime'=>'2021/12/24',
                'posttime'=>'2021/12/24',
                'introduction'=>'秋の婚活！ こんにちは！　だんだんと涼しくなってきましたね。朝晩の肌寒い空気を感じる度、秋が来たんだなあ……と感じます。 秋といえば！　Find f主催の秋の婚活パーティ、皆さんは参加されましたか？　テーマ別のパーティは初対面の人とも話が弾みやすく、趣味が共有できるパートナーを見つけるにはぴったりですよね。参加された方、ぜひぜひ感想を教えてくださいね！ また、「今度はこんなテーマでやってほしい！」「東京には行けないので⚪︎⚪︎県で開いて欲しい！」など、要望があればFind fのスタッフの方に伝えてみてはいかがでしょうか。利用者の方とスタッフの方、それぞれの声が合わさって、Find fがこれからもっともっと素敵なサイトになっていけばいいなと思っています。皆さんの良い出会いを応援しています！ さてさて、良い縁に恵まれて大切なパートナーができると、将来のことを考え始める方も多いのではないでしょうか。ということで、今回のテーマは「同性婚、パートナーシップ」です。 ここ数年、ヨーロッパやアメリカを中心にセクシュアルマイノリティへの理解が進み、同性婚・パートナーシップの制度も少しずつ整ってきました。とはいえ日本を含むアジアではまだまだ理解が浅く、同性婚やパートナーシップについての議論もあまり深められていないのが現状です。 今回のコラムでは、まず世界の同性婚・パートナーシップ制度の状況を見た上で、日本はこれからどうなっていくのか、私たち個人は何を意識していくべきなのかについて、考えていきたいと思います。',
                'heding1'=>'世界の同性婚・パートナーシップの現状',
                'heding2'=>'日本における「結婚」とは',
                'heding3'=>'パートナーシップに法的拘束力はない',
                'photo1'=>'0326_voiceout_wappen_09.jpg',
                'photo2'=>'gatag-00009934.jpg',
                'photo3'=>'gatag-00012744-768x512.jpg',
                'samnail'=>'0c10.jpg',
                'subheding11'=>'【同性婚が認められる国・地域】',
                'subheding12'=>'【登録パートナーシップなどを持つ国・地域】',
                'subheding21'=>'日本において、結婚は以下のように憲法で定められています',
                'subheding22'=>'それでは憲法を改正しない限り同性婚は認められないのでしょうか',
                'subheding31'=>'',
                'subheding32'=>'結婚の目的は？',
                'content11'=>'オランダ、ベルギー、スペイン、ノルウェー、スウェーデン、ポルトガル、アイスランド、デンマーク、フランス、南アフリカ、アルゼンチン、カナダ、ニュージーランド、ウルグアイ、イギリス、ブラジル、米国、メキシコ、ルクセンブルク、アイルランド、グリーンランド（デンマーク自治領）、エストニア、コロンビア、フィンランド（2017年より）',
                'content12'=>'フィンランド、グリーンランド、ドイツ、ルクセンブルク、イタリア、サンマリノ、アンドラ、スロベニア、スイス、リヒテンシュタイン、チェコ、アイルランド、コロンビア、ベネズエラ、エクアドル、オーストラリア、イスラエル、ハンガリー、オーストリア、クロアチア、ギリシャ、マン諸島（英王室属領）、ジャージー諸島（英王室属領）、ジブラルタル（英国領）、マルタ、エストニア 同性婚・パートナーシップ制度を持つ国は、人口比率でいえば世界の16.9%、GDP比率では世界の58.5%を占めるそうです。改めて調べてみて、思っていた以上に多くの国が同性婚やパートナーシップ制度を認めていることに驚きました。 リンクのhtmlタグ <a href=""></a> リンクタグの「a href」（エー・エッチレフ）は、使用頻度の高い基本的なHTMLタグのひとつです。一般的なリンクタグの書き方はこのようになります。 <a href="リンク先のＵＲＬ">アンカーテキスト</a> このアンカーテキストの部分には「ホームページ名」や「サイトのURL」、もしくは「こちら」や「ここをクリック」など、サイトの運営者によってさまざまな言葉が使われています。 例えば、当サイトのトップページにリンクをする場合、たいていはこのようなアンカーテキストになるかと思います。 このようにタグを記入すると、実際にはこのように表示されます。 また、このアンカーテキストの部分に画像を設定すると画像でリンクすることもできます。その際、画像の<img src= タグの「alt=""」の箇所にリンク先のページ内容を示す言葉を記入するようにします。 <a href="リンク先のURL"><img src="画像のある場所" alt="リンク先を表す言葉"></a> 例えば、当ホームページへ「example.jpg」の画像でリンクする場合は以下のようになります。 http://emajapan.org/promssm/世界の同性婚Equal Marrige Alliance HP',
                'content21'=>'日本国憲法 第三章　国民の権利及び義務 第二十四条 　婚姻は、両性の合意のみに基いて成立し、夫婦が同等の権利を有することを基本として、相互の協力により、維持されなければならない。 上記の条文の中には「両性の合意」と書かれています。この「両性」は「一人の男性と一人の女性」を指すものと解釈されているので、日本では同性婚が認められていない、ということになります。',
                'content22'=>'それでは憲法を改正しない限り同性婚は認められないのでしょうか',
                'content31'=>'パートナーシップ制度を利用することによって、同性のカップルが二人で家を借りることが容易になったり、携帯電話の家族割引が適用されたりと、これまで男女のカップルに限られていたことが同性同士でもできるようになります。 ただしここで注意しなければならないのは、どの自治体の条例・要綱も、法的拘束力はないということです。「同性カップルの同棲を認めるか」「同棲カップルに家族割を適用するか」はあくまで各企業の方針に従って決められることなのです。もちろん、何も証明するものがない状態よりは、パートナーシップの証明書や宣誓書を提示したほうが理解は得やすくなります。この現状を踏まえた上で、これからどのような制度を求めていくべきなのか、考えていかなければいけませんね。',
                'content32'=>'さて、以上のような日本の結婚制度およびパートナーシップ制度を踏まえた上で、みなさんにもう一度考えて欲しいことがあります。 あなたは結婚したいですか？　したくないですか？ また、それはなぜですか？ 結婚には色々な側面があり、同じように結婚を望む人がいてもその理由は様々です。「一緒に暮らしたい」「結婚式を挙げたい」「世間の人に認めて欲しい」「子供を持ちたい」「将来の約束をしたい」……今挙げたような理由は、婚姻関係を結ばなくても実現が可能であると言えます。 それでは結婚しなければ認められない権利とは一体なんでしょうか。 よく挙げられるのは、財産の相続、扶養制度の利用、病院における緊急時の面会の許可といったものです。 こうした経済面や緊急時の対応といった面では、異性カップルと比べ、結婚が認められていない同性カップルの権利は大きく制限されていると言えます（厳密に言えば、養子縁組の制度を利用すればこれらの権利を得ることができます。）。 同性間のパートナーシップを法的に保障するしくみが存在しないことに伴う問題については以下のHPが参考になります。 特別配偶者法全国ネットワーク　パートナー法ネットhttp://partnershiplawjapan.org/japan/life（参照日2016年11月14日）',
            ]
        ]);
    }
}