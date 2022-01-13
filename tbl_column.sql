-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-01-10 16:04:57
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `miadb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_column`
--

CREATE TABLE `tbl_column` (
  `id` int(11) NOT NULL,
  `title` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updatetime` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posttime` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heding1` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heding2` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heding3` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo2` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo3` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `samnail` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheding11` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheding12` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheding21` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheding22` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheding31` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheding32` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content11` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content12` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content21` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content22` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content31` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content32` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `tbl_column`
--

INSERT INTO `tbl_column` (`id`, `title`, `tag`, `updatetime`, `posttime`, `introduction`, `heding1`, `heding2`, `heding3`, `photo1`, `photo2`, `photo3`, `samnail`, `subheding11`, `subheding12`, `subheding21`, `subheding22`, `subheding31`, `subheding32`, `content11`, `content12`, `content21`, `content22`, `content31`, `content32`) VALUES
(1, 'オンライン婚活パーティーってなに？メリットや成功の秘訣', 'オンラインデート$婚活$オンラインパーティ$結婚$', '2021/11/24', '2021/11/24', '昨今の自粛ムードは婚活中の男女にとっても大きなショックだったはず。とにかく人と会わなければ始まらない！というのがかつての婚活のセオリーでしたが、今ではオンラインでの婚活も広がりはじめ、婚活の形が変わり始めています。 今回はオンラインでの婚活パーティーの概要に加え、成功させる秘訣もお伝えしていきます。', 'オンライン婚活パーティーとは', 'オンライン婚活パーティーのメリット', 'オンライン婚活パーティーを成功させるには', '1f11051ee7262d20ee0d4688db1fe4a6.jpg', 'bf98c359e66a621158c64fcbed825d8c.jpg', 'a4e6c689b559d3a4b89bab60d4a1aef1.jpg', 'column.jpg', 'オンライン婚活パーティーってなに？', 'オンラインパーティの流れ', '緊張が少ない', '費用の負担が少なく済む', '服装やメイクはきちんと', '映り方にこだわる', 'まず、オンライン婚活パーティーとはいったいどういった趣旨のことをいうのでしょうか。簡単にお伝えすると自宅からパソコンやスマホを使って、パーティーに参加できるというものです。\r\n\r\n                参加者全員の顔が画面に映り、グループでおしゃべりを楽しんだり時間ごとに1対1でじっくり話しができたりと、主催する会社によって形は様々です。\r\n                \r\n                会社によって状況は違いますが、居住地域を選択できたり、年収や年齢を限定したりといった基本的な形態は通常の婚活パーティーとは変わりません。きちんとした会員の方が参加されるので、オンラインだから不安、ということはなさそうです。\r\n                \r\n                また、当日の流れもスタッフがサポートし、スムーズに進行するような工夫がなされているので安心して参加しましょう。', '実際のオンライン婚活パーティーの流れを見てみましょう。（あくまで一例であり、各会社の婚活パーティーによって違いがあります。）\r\n\r\n                ・事前準備\r\n                Zoomなど、指定されたコミュニケーションアプリを事前にダウンロードしておき、パーティーが始まる少し前にはログインしておきます。通常の婚活パーティー同様、ギリギリのログインはあまりよい印象を与えないので、時間には注意しましょう。もちろん遅刻は大きなマイナスイメージです。\r\n                \r\n                ・オンライン婚活の始まり方\r\n                スタッフから、進行の流れや注意事項などの説明があります。目の前に人がいないとつい気が緩んでしまうこともありますが、気配り、思いやりはオンラインでも同じです。ルールをしっかり守って楽しく進めましょう。\r\n                \r\n                ・自己紹介\r\n                明るく自己紹介をしましょう。オンラインでも第一印象は重要です。声や表情などでしっかり自分をアピールしてくださいね。\r\n                \r\n                ・トークタイム\r\n                トークタイムでは、スタッフがテーマを用意してくれる場合もあります。スタッフがお互いの印象をとりまとめて、マッチングしたカップルには2人でのトークタイムを設けてくれる場合もあるようです。\r\n                \r\n                普段の婚活パーティーでは周りの目が気になって2人で話しづらいこともありますが、オンラインでは気兼ねなくじっくり話すことができるでしょう。\r\n                \r\n                ・連絡先交換\r\n                多くの会社では連絡先交換の時間が設けられています。連絡先が交換できたら、その後はオンラインデートでもっと深い話しをするのも良いですね。出会いがオンラインなら、その後実際に対面のデートができるまではオンラインで仲を深めるのも抵抗が減るのではないでしょうか。', '対面での婚活パーティーに出かけるのはなかなか勇気がいるものです。パーティー会場についても、なんとなく手持ち無沙汰で始まるまでにそわそわしてしまったり、緊張してお手洗いに行きたくなってしまったりとバタバタしたりする人も少なくないのではないでしょうか。\r\n\r\n                それに比べて、オンライン婚活パーティーは、自分の部屋から参加できるので、あまり緊張することなく、普段通りリラックスして臨めます。\r\n                \r\n                直前まで身だしなみのチェックをしたり、どんなことを話そうかとゆっくり考えたりできるので、より普段の自分に近い姿を見せられるのではないでしょうか。', '通常に比べて費用の負担が少なく済むのもうれしいポイントです。会場に向かうとなると交通費がかかりますし、女性なら着ていきたい洋服に合わせて靴やバッグを新調したい、など何かとお金がかかりがちになってしまうものです。\r\n\r\n                長期戦でもいいので納得できる相手を探したいという人であれば、費用はできるだけ少ない方がありがたいですよね。', '自宅からの参加だとついついリラックスムードになりがちですが、きちんとした清潔感ある服装を心がけましょう。\r\n\r\n                実際に対面すると、雰囲気や細かい表情の変化で印象が伝わりますが、オンラインでは画面に映っているものが全てです。女性であればメイクやアクセサリー、男性ならば髭や髪型など、細かいところにも気を配りましょう。', '画面に映る背景も少し工夫してみてください。素の自分を知ってもらいたいと考えていても、相手はそうとは限りません。部屋の中に洗濯物がぶら下がっていたり、ゴミの日を待っているゴミ袋が見えたりすると、第一印象があまり良くないです。\r\n\r\n                適度に部屋を片付けて、画面に映る部分だけでもすっきりさせましょう。一番広い壁を背景にしたり、カーテンの前にしたりするのもおすすめです。\r\n                使用するツールによっては背景を変更できるものもあるので、事前に確認しておくとよいかもしれません。\r\n                \r\n                また、事前にカメラ写りのチェックも忘れないようにしましょう。カメラの高さを目線と同じくらいか少し上くらいにすると、向かい合って話しているのと同じような角度になります。小顔効果を出すのであれば、カメラをほんの少し見上げるように設置するという方法もあります。いろいろ事前に試してみましょう。\r\n                \r\n                顔が明るく映ると好印象なので、電気や窓からの光を考慮して場所を選ぶのも大切です。逆光になって相手から顔がよく見えないとならないように、自分が一番魅力的に映る場所やカメラの角度を調整してみてください。'),
(2, '同性婚・パートナーシップの 現在と未来', 'LGBT$同性婚$パートナーシップ$', '2022/01/08', '2022/01/08', '秋の婚活！\r\nこんにちは！　だんだんと涼しくなってきましたね。朝晩の肌寒い空気を感じる度、秋が来たんだなあ……と感じます。\r\n\r\n秋といえば！　Find f主催の秋の婚活パーティ、皆さんは参加されましたか？　テーマ別のパーティは初対面の人とも話が弾みやすく、趣味が共有できるパートナーを見つけるにはぴったりですよね。参加された方、ぜひぜひ感想を教えてくださいね！\r\n\r\nまた、「今度はこんなテーマでやってほしい！」「東京には行けないので⚪︎⚪︎県で開いて欲しい！」など、要望があればFind fのスタッフの方に伝えてみてはいかがでしょうか。利用者の方とスタッフの方、それぞれの声が合わさって、Find fがこれからもっともっと素敵なサイトになっていけばいいなと思っています。皆さんの良い出会いを応援しています！\r\n\r\n \r\n\r\nさてさて、良い縁に恵まれて大切なパートナーができると、将来のことを考え始める方も多いのではないでしょうか。ということで、今回のテーマは「同性婚、パートナーシップ」です。\r\n\r\nここ数年、ヨーロッパやアメリカを中心にセクシュアルマイノリティへの理解が進み、同性婚・パートナーシップの制度も少しずつ整ってきました。とはいえ日本を含むアジアではまだまだ理解が浅く、同性婚やパートナーシップについての議論もあまり深められていないのが現状です。\r\n\r\n今回のコラムでは、まず世界の同性婚・パートナーシップ制度の状況を見た上で、日本はこれからどうなっていくのか、私たち個人は何を意識していくべきなのかについて、考えていきたいと思います。', '世界の同性婚・パートナーシップの現状', '日本における「結婚」とは', 'パートナーシップに法的拘束力はない', '0326_voiceout_wappen_09.jpg', 'gatag-00009934.jpg', 'gatag-00012744-768x512.jpg', '0c10.jpg', '【同性婚が認められる国・地域】', '【登録パートナーシップなどを持つ国・地域】', '日本において、結婚（婚姻）は以下のように憲法で定められていま', 'それでは憲法を改正しない限り同性婚は認められないのでしょうか', '　　　　', '結婚の目的は？', 'オランダ、ベルギー、スペイン、ノルウェー、スウェーデン、ポルトガル、アイスランド、デンマーク、フランス、南アフリカ、アルゼンチン、カナダ、ニュージーランド、ウルグアイ、イギリス、ブラジル、米国、メキシコ、ルクセンブルク、アイルランド、グリーンランド（デンマーク自治領）、エストニア、コロンビア、フィンランド（2017年より）', 'フィンランド、グリーンランド、ドイツ、ルクセンブルク、イタリア、サンマリノ、アンドラ、スロベニア、スイス、リヒテンシュタイン、チェコ、アイルランド、コロンビア、ベネズエラ、エクアドル、オーストラリア、イスラエル、ハンガリー、オーストリア、クロアチア、ギリシャ、マン諸島（英王室属領）、ジャージー諸島（英王室属領）、ジブラルタル（英国領）、マルタ、エストニア\r\n\r\n同性婚・パートナーシップ制度を持つ国は、人口比率でいえば世界の16.9%、GDP比率では世界の58.5%を占めるそうです。改めて調べてみて、思っていた以上に多くの国が同性婚やパートナーシップ制度を認めていることに驚きました。\r\nリンクのhtmlタグ <a href=\"\"></a>\r\nリンクタグの「a href」（エー・エッチレフ）は、使用頻度の高い基本的なHTMLタグのひとつです。一般的なリンクタグの書き方はこのようになります。\r\n\r\n<a href=\"リンク先のＵＲＬ\">アンカーテキスト</a>\r\n\r\nこのアンカーテキストの部分には「ホームページ名」や「サイトのURL」、もしくは「こちら」や「ここをクリック」など、サイトの運営者によってさまざまな言葉が使われています。\r\n\r\n例えば、当サイトのトップページにリンクをする場合、たいていはこのようなアンカーテキストになるかと思います。\r\n\r\n\r\n\r\nこのようにタグを記入すると、実際にはこのように表示されます。\r\n\r\n\r\n\r\nまた、このアンカーテキストの部分に画像を設定すると画像でリンクすることもできます。その際、画像の<img src= タグの「alt=\"\"」の箇所にリンク先のページ内容を示す言葉を記入するようにします。\r\n\r\n<a href=\"リンク先のURL\"><img src=\"画像のある場所\" alt=\"リンク先を表す言葉\"></a>\r\n\r\n例えば、当ホームページへ「example.jpg」の画像でリンクする場合は以下のようになります。\r\n\r\n<a href=\"http://emajapan.org/promssm/世界の同性婚\">Equal Marrige Alliance HP</a>', '日本国憲法\r\n第三章　国民の権利及び義務\r\n第二十四条 　婚姻は、両性の合意のみに基いて成立し、夫婦が同等の権利を有することを基本として、相互の協力により、維持されなければならない。\r\n\r\n上記の条文の中には「両性の合意」と書かれています。この「両性」は「一人の男性と一人の女性」を指すものと解釈されているので、日本では同性婚が認められていない、ということになります。', 'これに関しては様々な意見がありますが、同性婚支持の立場からは、「憲法改正をしなくても同性婚を認めることはできる」との意見が出ています。\r\n\r\nなぜなら、第二十四条の目的は、「男性と女性のカップルにのみ結婚を認める」ことではなく、「男性と女性が一個人として対等に生きる権利があることを示す」ことであるからです。憲法制定当時、女性の地位は現在と比べて遥かに低く、その状況を変える目的でこの条文が定められたのです。\r\n\r\nこうした「法の目的」に照らし合わせれば、憲法第二十四条は同性婚の妨げにはならないということになります。同性婚を求める声が大きくなれば、将来的に認められる可能性も低くないのです。\r\n\r\n憲法二十四条にまつわる議論については以下のHPが参考になります。\r\n\r\nEMA日本（http://emajapan.org/ssmqaa/憲法は、同性婚を禁止しているのではないですか）（参照日2016年11月14日）\r\n特別配偶者法全国ネットワーク　パートナー法ネット（http://partnershiplawjapan.org/japan/）（参照日2016年11月14日）', 'パートナーシップ制度を利用することによって、同性のカップルが二人で家を借りることが容易になったり、携帯電話の家族割引が適用されたりと、これまで男女のカップルに限られていたことが同性同士でもできるようになります。\r\n\r\nただしここで注意しなければならないのは、どの自治体の条例・要綱も、法的拘束力はないということです。「同性カップルの同棲を認めるか」「同棲カップルに家族割を適用するか」はあくまで各企業の方針に従って決められることなのです。もちろん、何も証明するものがない状態よりは、パートナーシップの証明書や宣誓書を提示したほうが理解は得やすくなります。この現状を踏まえた上で、これからどのような制度を求めていくべきなのか、考えていかなければいけませんね。', 'さて、以上のような日本の結婚制度およびパートナーシップ制度を踏まえた上で、みなさんにもう一度考えて欲しいことがあります。\r\nあなたは結婚したいですか？　したくないですか？\r\nまた、それはなぜですか？\r\n\r\n結婚には色々な側面があり、同じように結婚を望む人がいてもその理由は様々です。「一緒に暮らしたい」「結婚式を挙げたい」「世間の人に認めて欲しい」「子供を持ちたい」「将来の約束をしたい」……今挙げたような理由は、婚姻関係を結ばなくても実現が可能であると言えます。\r\n\r\nそれでは結婚しなければ認められない権利とは一体なんでしょうか。\r\nよく挙げられるのは、財産の相続、扶養制度の利用、病院における緊急時の面会の許可といったものです。\r\n\r\nこうした経済面や緊急時の対応といった面では、異性カップルと比べ、結婚が認められていない同性カップルの権利は大きく制限されていると言えます（厳密に言えば、養子縁組の制度を利用すればこれらの権利を得ることができます。）。\r\n\r\n同性間のパートナーシップを法的に保障するしくみが存在しないことに伴う問題については以下のHPが参考になります。\r\n特別配偶者法全国ネットワーク　パートナー法ネットhttp://partnershiplawjapan.org/japan/life（参照日2016年11月14日）');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
