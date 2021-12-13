document.addEventListener("DOMContentLoaded",function(){

    //金額計算
    document.addEventListener('change',function(){;

        var cost = document.getElementById('cost').value;
        if (cost.match(/[0-9]+/g) != cost ) {
            alert('半角数字で入力してください。');
            cost = "";
        }else {
            var num = String(cost).replace( /(\d)(?=(\d\d\d)+(?!\d))/g, '$1,' );
            document.getElementById('yosan').innerHTML = num + "円";
        }

        var kyoshiki = document.getElementById('1-1');
        var pkyoshiki = document.getElementById('1-2');
        var p1 = kyoshiki.value * pkyoshiki.value;

        var kyoshiki = document.getElementById('2-1');
        var pkyoshiki = document.getElementById('2-2');
        var p2 = kyoshiki.value * pkyoshiki.value;

        var kaijyou = document.getElementById('3-1');
        var pkaijyou = document.getElementById('3-2');
        var p3 = kaijyou.value * pkaijyou.value;

        var hikae = document.getElementById('4-1');
        var phikae = document.getElementById('4-2');
        var p4 = hikae.value * phikae.value;
        
        var shikai = document.getElementById('5-1');
        var pshikai = document.getElementById('5-2');
        var p5 = shikai.value * pshikai.value;

        var buke = document.getElementById('6-1');
        var pbuke = document.getElementById('6-2');
        var p6 = buke.value * pbuke.value;

        var ongaku = document.getElementById('7-1');
        var pongaku = document.getElementById('7-2');
        var p7 = ongaku.value * pongaku.value;

        var video = document.getElementById('8-1');
        var pvideo= document.getElementById('8-2');
        var p8 = video.value * pvideo.value;

        var hikidemono= document.getElementById('9-1');
        var phikidemono= document.getElementById('9-2');
        var p9 = hikidemono.value * phikidemono.value;

        var otona= document.getElementById('10-1');
        var potona= document.getElementById('10-2');
        var p10 = otona.value * potona.value;

        var kodomo= document.getElementById('11-1');
        var pkodomo= document.getElementById('11-2');
        var p11 = kodomo.value * pkodomo.value;

        var keki= document.getElementById('12-1');
        var pkeki= document.getElementById('12-2');
        var p12 = keki.value * pkeki.value;

        var kyandoru = document.getElementById('13-1');
        var pkyandoru = document.getElementById('13-2');
        var p13 = kyandoru.value * pkyandoru.value;

        var wedelingu = document.getElementById('14-1');
        var pwedelingu = document.getElementById('14-2');
        var p14 = wedelingu.value * pwedelingu.value;

        var main = document.getElementById('15-1');
        var pmain = document.getElementById('15-2');
        var p15 = main.value * pmain.value;

        var takujyou = document.getElementById('16-1');
        var ptakujyou = document.getElementById('16-2');
        var p16 = takujyou.value * ptakujyou.value;

        var buraidaru = document.getElementById('17-1');
        var pburaidaru = document.getElementById('17-2');
        var p17 = buraidaru.value * pburaidaru.value;

        var ryoushin = document.getElementById('18-1');
        var pryoushin = document.getElementById('18-2');
        var p18 = ryoushin.value * pryoushin.value;

        var shinrou = document.getElementById('19-1');
        var pshinrou = document.getElementById('19-2');
        var p19 = shinrou.value * pshinrou.value;

        var sutajio = document.getElementById('20-1');
        var psutajio = document.getElementById('20-2');
        var p20 = sutajio.value * psutajio.value;

        var sunap = document.getElementById('21-1');
        var psunap = document.getElementById('21-2');
        var p21 = sunap.value * psunap.value;

        var kaijyou = document.getElementById('22-1');
        var pkaijyou = document.getElementById('22-2');
        var p22 = kaijyou.value * pkaijyou.value;

        var biyoushi = document.getElementById('23-1');
        var pbiyoushi = document.getElementById('23-2');
        var p23 = biyoushi.value * pbiyoushi.value;

        var kituke = document.getElementById('24-1');
        var pkituke = document.getElementById('24-2');
        var p24 = kituke.value * pkituke.value;

        var syashin = document.getElementById('25-1');
        var psyashin = document.getElementById('25-2');
        var p25 = syashin.value * psyashin.value;

        var uketuke = document.getElementById('26-1');
        var puketuke = document.getElementById('26-2');
        var p26 = uketuke.value * puketuke.value;

        var keiyaku = document.getElementById('27-1');
        var pkeiyaku = document.getElementById('27-2');
        var p27 = keiyaku.value * pkeiyaku.value;

        var sonota1 = document.getElementById('28-1');
        var psonota1 = document.getElementById('28-2');
        var p28 = sonota1.value * psonota1.value;

        var sonota2 = document.getElementById('29-1');
        var psonota2 = document.getElementById('29-2');
        var p29 = sonota2.value * psonota2.value;

        var sonota3 = document.getElementById('30-1');
        var psonota3 = document.getElementById('30-2');
        var p30 = sonota3.value * psonota3.value;

        //合計算出
        var sum = 0;
        sum = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10+p11+p12+p13+p14+p15+p16+p17+p18+p19+p20+p21+p22+p23+p24+p25+p26+p27+p28+p29+p30;
        var result = Number(sum).toLocaleString();
        document.getElementById('sum').innerHTML = "¥" + result;

        //予算差額
        var cost = document.getElementById('cost');
        var diff = cost.value - sum;
        var newdiff = Number(diff).toLocaleString();
        if(diff > 0){
            document.getElementById('diff').innerHTML = "+" + newdiff;
            document.getElementById("diff").style.color = "blue";
        }else{
            document.getElementById('diff').innerHTML = newdiff;
            document.getElementById("diff").style.color = "red";
        }
    })



    //挙式料
    document.getElementById('1-1').addEventListener('change',function(){
        var kyoshiki = document.getElementById('1-1');
        var pkyoshiki = document.getElementById('1-2');
        var p1 = Number(kyoshiki.value * pkyoshiki.value).toLocaleString();
        document.getElementById('p1').innerHTML = "¥" + p1;
    });
    document.getElementById('1-2').addEventListener('change',function(){
        var kyoshiki = document.getElementById('1-1');
        var pkyoshiki = document.getElementById('1-2');
        var p1 = Number(kyoshiki.value * pkyoshiki.value).toLocaleString();
        document.getElementById('p1').innerHTML = "¥" +　p1;
    });

    //会場料
    document.getElementById('2-1').addEventListener('change',function(){
        var kaijyou = document.getElementById('2-1');
        var pkaijyou = document.getElementById('2-2');
        var p2 = Number(kaijyou.value * pkaijyou.value).toLocaleString();
        document.getElementById('p2').innerHTML = "¥" +　p2;
    });
    document.getElementById('2-2').addEventListener('change',function(){
        var kaijyou = document.getElementById('2-1');
        var pkaijyou = document.getElementById('2-2');
        var p2 = Number(kaijyou.value * pkaijyou.value).toLocaleString();
        document.getElementById('p2').innerHTML = "¥" +　p2;
    });

    //会添料
    document.getElementById('3-1').addEventListener('change',function(){
        var kaisoe = document.getElementById('3-1');
        var pkaisoe = document.getElementById('3-2');
        var p3 = Number(kaisoe.value * pkaisoe.value).toLocaleString();
        document.getElementById('p3').innerHTML ="¥" +　p3;
    });
    document.getElementById('3-2').addEventListener('change',function(){
        var kaisoe = document.getElementById('3-1');
        var pkaisoe = document.getElementById('3-2');
        var p3 = Number(kaisoe.value * pkaisoe.value).toLocaleString();
        document.getElementById('p3').innerHTML ="¥" + p3;
    });

    //控え室料
    document.getElementById('4-1').addEventListener('change',function(){
        var hikae = document.getElementById('4-1');
        var phikae = document.getElementById('4-2');
        var p4 = Number(hikae.value * phikae.value).toLocaleString();
        document.getElementById('p4').innerHTML ="¥" + p4;
    });
    document.getElementById('4-2').addEventListener('change',function(){
        var hikae = document.getElementById('4-1');
        var phikae = document.getElementById('4-2');
        var p4 = Number(hikae.value * phikae.value).toLocaleString();
        document.getElementById('p4').innerHTML ="¥" + p4;
    });

    //司会料
    document.getElementById('5-1').addEventListener('change',function(){
        var shikai = document.getElementById('5-1');
        var pshikai = document.getElementById('5-2');
        var p5 = Number(shikai.value * pshikai.value).toLocaleString();
        document.getElementById('p5').innerHTML ="¥" + p5;
    });
    document.getElementById('5-2').addEventListener('change',function(){
        var shikai = document.getElementById('5-1');
        var pshikai = document.getElementById('5-2');
        var p5 = Number(shikai.value * pshikai.value).toLocaleString();
        document.getElementById('p5').innerHTML ="¥" + p5;
    });

    //ブーケ・ブートニア
    document.getElementById('6-1').addEventListener('change',function(){
        var buke = document.getElementById('6-1');
        var pbuke = document.getElementById('6-2');
        var p6 = Number(buke.value * pbuke.value).toLocaleString();
        document.getElementById('p6').innerHTML ="¥" + p6;
    });
    document.getElementById('6-2').addEventListener('change',function(){
        var buke = document.getElementById('6-1');
        var pbuke = document.getElementById('6-2');
        var p6 = Number(buke.value * pbuke.value).toLocaleString();
        document.getElementById('p6').innerHTML ="¥" + p6;
    });

    //音楽
    document.getElementById('7-1').addEventListener('change',function(){
        var ongaku = document.getElementById('7-1');
        var pongaku = document.getElementById('7-2');
        var p7 = Number(ongaku.value * pongaku.value).toLocaleString();
        document.getElementById('p7').innerHTML ="¥" + p7;
    });
    document.getElementById('7-2').addEventListener('change',function(){
        var ongaku = document.getElementById('7-1');
        var pongaku = document.getElementById('7-2');
        var p7 = Number(ongaku.value * pongaku.value).toLocaleString();
        document.getElementById('p7').innerHTML ="¥" + p7;
    });

    //ビデオ
    document.getElementById('8-1').addEventListener('change',function(){
        var video = document.getElementById('8-1');
        var pvideo= document.getElementById('8-2');
        var p8 = Number(video.value * pvideo.value).toLocaleString();
        document.getElementById('p8').innerHTML ="¥" + p8;
    });
    document.getElementById('8-2').addEventListener('change',function(){
        var video = document.getElementById('8-1');
        var pvideo= document.getElementById('8-2');
        var p8 = Number(video.value * pvideo.value).toLocaleString();
        document.getElementById('p8').innerHTML ="¥" + p8;
    });

    //引き出物
    document.getElementById('9-1').addEventListener('change',function(){
        var  hikidemono= document.getElementById('9-1');
        var  phikidemono= document.getElementById('9-2');
        var p9 = Number(hikidemono.value * phikidemono.value).toLocaleString();
        document.getElementById('p9').innerHTML ="¥" + p9;
    });
    document.getElementById('9-2').addEventListener('change',function(){
        var  hikidemono= document.getElementById('9-1');
        var  phikidemono= document.getElementById('9-2');
        var p9 = Number(hikidemono.value * phikidemono.value).toLocaleString();
        document.getElementById('p9').innerHTML ="¥" + p9;
    });

    //料理・大人
    document.getElementById('10-1').addEventListener('change',function(){
        var  otona= document.getElementById('10-1');
        var  potona= document.getElementById('10-2');
        var p10 = Number(otona.value * potona.value).toLocaleString();
        document.getElementById('p10').innerHTML ="¥" + p10;
    });
    document.getElementById('10-2').addEventListener('change',function(){
        var  otona= document.getElementById('10-1');
        var  potona= document.getElementById('10-2');
        var p10 = Number(otona.value * potona.value).toLocaleString();
        document.getElementById('p10').innerHTML ="¥" + p10;
    });

    //料理・子供
    document.getElementById('11-1').addEventListener('change',function(){
        var kodomo= document.getElementById('11-1');
        var pkodomo= document.getElementById('11-2');
        var p11 = Number(kodomo.value * pkodomo.value).toLocaleString();
        document.getElementById('p11').innerHTML ="¥" + p11;
    });
    document.getElementById('11-2').addEventListener('change',function(){
        var kodomo= document.getElementById('11-1');
        var pkodomo= document.getElementById('11-2');
        var p11 = Number(kodomo.value * pkodomo.value).toLocaleString();
        document.getElementById('p11').innerHTML ="¥" + p11;
    });

    //演出・ケーキ入刀
    document.getElementById('12-1').addEventListener('change',function(){
        var keki= document.getElementById('12-1');
        var pkeki= document.getElementById('12-2');
        var p12 = Number(keki.value * pkeki.value).toLocaleString();
        document.getElementById('p12').innerHTML ="¥" + p12;
    });
    document.getElementById('12-2').addEventListener('change',function(){
        var keki= document.getElementById('12-1');
        var pkeki= document.getElementById('12-2');
        var p12 = Number(keki.value * pkeki.value).toLocaleString();
        document.getElementById('p12').innerHTML ="¥" + p12;
    });

    //演出・キャンドルサービス
    document.getElementById('13-1').addEventListener('change',function(){
        var kyandoru = document.getElementById('13-1');
        var pkyandoru = document.getElementById('13-2');
        var p13 = Number(kyandoru.value * pkyandoru.value).toLocaleString();
        document.getElementById('p13').innerHTML ="¥" + p13;
    });
    document.getElementById('13-2').addEventListener('change',function(){
        var kyandoru = document.getElementById('13-1');
        var pkyandoru = document.getElementById('13-2');
        var p13 = Number(kyandoru.value * pkyandoru.value).toLocaleString();
        document.getElementById('p13').innerHTML ="¥" + p13;
    });

    //装花・ウェディングケーキ
    document.getElementById('14-1').addEventListener('change',function(){
        var wedelingu = document.getElementById('14-1');
        var pwedelingu = document.getElementById('14-2');
        var p14 = Number(wedelingu.value * pwedelingu.value).toLocaleString();
        document.getElementById('p14').innerHTML ="¥" + p14;
    });
    document.getElementById('14-2').addEventListener('change',function(){
        var wedelingu = document.getElementById('14-1');
        var pwedelingu = document.getElementById('14-2');
        var p14 = Number(wedelingu.value * pwedelingu.value).toLocaleString();
        document.getElementById('p14').innerHTML ="¥" + p14;
    });

    //装花・メインテーブル
    document.getElementById('15-1').addEventListener('change',function(){
        var main = document.getElementById('15-1');
        var pmain = document.getElementById('15-2');
        var p15 = Number(main.value * pmain.value).toLocaleString();
        document.getElementById('p15').innerHTML ="¥" + p15;
    });
    document.getElementById('15-2').addEventListener('change',function(){
        var main = document.getElementById('15-1');
        var pmain = document.getElementById('15-2');
        var p15 = Number(main.value * pmain.value).toLocaleString();
        document.getElementById('p15').innerHTML ="¥" + p15;
    });

    //装花・卓上
    document.getElementById('16-1').addEventListener('change',function(){
        var takujyou = document.getElementById('16-1');
        var ptakujyou = document.getElementById('16-2');
        var p16 = Number(takujyou.value * ptakujyou.value).toLocaleString();
        document.getElementById('p16').innerHTML ="¥" + p16;
    });
    document.getElementById('16-2').addEventListener('change',function(){
        var takujyou = document.getElementById('16-1');
        var ptakujyou = document.getElementById('16-2');
        var p16 = Number(takujyou.value * ptakujyou.value).toLocaleString();
        document.getElementById('p16').innerHTML ="¥" + p16;
    });

    //装花・ブライダルキャンドル
    document.getElementById('17-1').addEventListener('change',function(){
        var buraidaru = document.getElementById('17-1');
        var pburaidaru = document.getElementById('17-2');
        var p17 = Number(buraidaru.value * pburaidaru.value).toLocaleString();
        document.getElementById('p17').innerHTML ="¥" + p17;
    });
    document.getElementById('17-2').addEventListener('change',function(){
        var buraidaru = document.getElementById('17-1');
        var pburaidaru = document.getElementById('17-2');
        var p17 = Number(buraidaru.value * pburaidaru.value).toLocaleString();
        document.getElementById('p17').innerHTML ="¥" + p17;
    });

    //花束・両親
    document.getElementById('18-1').addEventListener('change',function(){
        var ryoushin = document.getElementById('18-1');
        var pryoushin = document.getElementById('18-2');
        var p18 = Number(ryoushin.value * pryoushin.value).toLocaleString();
        document.getElementById('p18').innerHTML ="¥" + p18;
    });
    document.getElementById('18-2').addEventListener('change',function(){
        var ryoushin = document.getElementById('18-1');
        var pryoushin = document.getElementById('18-2');
        var p18 = Number(ryoushin.value * pryoushin.value).toLocaleString();
        document.getElementById('p18').innerHTML ="¥" + p18;
    });

    //花束・新郎新婦
    document.getElementById('19-1').addEventListener('change',function(){
        var shinrou = document.getElementById('19-1');
        var pshinrou = document.getElementById('19-2');
        var p19 = Number(shinrou.value * pshinrou.value).toLocaleString();
        document.getElementById('p19').innerHTML ="¥" + p19;
    });
    document.getElementById('19-2').addEventListener('change',function(){
        var shinrou = document.getElementById('19-1');
        var pshinrou = document.getElementById('19-2');
        var p19 = Number(shinrou.value * pshinrou.value).toLocaleString();
        document.getElementById('p19').innerHTML ="¥" + p19;
    });

    //写真・スタジオ
    document.getElementById('20-1').addEventListener('change',function(){
        var sutajio = document.getElementById('20-1');
        var psutajio = document.getElementById('20-2');
        var p20 = Number(sutajio.value * psutajio.value).toLocaleString();
        document.getElementById('p20').innerHTML ="¥" + p20;
    });
    document.getElementById('20-2').addEventListener('change',function(){
        var sutajio = document.getElementById('20-1');
        var psutajio = document.getElementById('20-2');
        var p20 = Number(sutajio.value * psutajio.value).toLocaleString();
        document.getElementById('p20').innerHTML ="¥" + p20;
    });

    //写真・スナップ
    document.getElementById('21-1').addEventListener('change',function(){
        var sunap = document.getElementById('21-1');
        var psunap = document.getElementById('21-2');
        var p21 = Number(sunap.value * psunap.value).toLocaleString();
        document.getElementById('p21').innerHTML ="¥" + p21;
    });
    document.getElementById('21-2').addEventListener('change',function(){
        var sunap = document.getElementById('21-1');
        var psunap = document.getElementById('21-2');
        var p21 = Number(sunap.value * psunap.value).toLocaleString();
        document.getElementById('p21').innerHTML ="¥" + p21;
    });

    //心付け・会場係
    document.getElementById('22-1').addEventListener('change',function(){
        var kaijyou = document.getElementById('22-1');
        var pkaijyou = document.getElementById('22-2');
        var p22 = Number(kaijyou.value * pkaijyou.value).toLocaleString();
        document.getElementById('p22').innerHTML ="¥" + p22;
    });
    document.getElementById('22-2').addEventListener('change',function(){
        var kaijyou = document.getElementById('22-1');
        var pkaijyou = document.getElementById('22-2');
        var p22 = Number(kaijyou.value * pkaijyou.value).toLocaleString();
        document.getElementById('p22').innerHTML ="¥" + p22;
    });

    //心付け・美容師
    document.getElementById('23-1').addEventListener('change',function(){
        var biyoushi = document.getElementById('23-1');
        var pbiyoushi = document.getElementById('23-2');
        var p23 = Number(biyoushi.value * pbiyoushi.value).toLocaleString();
        document.getElementById('p23').innerHTML ="¥" + p23;
    });
    document.getElementById('23-2').addEventListener('change',function(){
        var biyoushi = document.getElementById('23-1');
        var pbiyoushi = document.getElementById('23-2');
        var p23 = Number(biyoushi.value * pbiyoushi.value).toLocaleString();
        document.getElementById('p23').innerHTML ="¥" + p23;
    });

    //心付け・着付係
    document.getElementById('24-1').addEventListener('change',function(){
        var kituke = document.getElementById('24-1');
        var pkituke = document.getElementById('24-2');
        var p24 = Number(kituke.value * pkituke.value).toLocaleString();
        document.getElementById('p24').innerHTML ="¥" + p24;
    });
    document.getElementById('24-2').addEventListener('change',function(){
        var kituke = document.getElementById('24-1');
        var pkituke = document.getElementById('24-2');
        var p24 = Number(kituke.value * pkituke.value).toLocaleString();
        document.getElementById('p24').innerHTML ="¥" + p24;
    });

    //心付け・写真家
    document.getElementById('25-1').addEventListener('change',function(){
        var syashin = document.getElementById('25-1');
        var psyashin = document.getElementById('25-2');
        var p25 = Number(syashin.value * psyashin.value).toLocaleString();
        document.getElementById('p25').innerHTML ="¥" + p25;
    });
    document.getElementById('25-2').addEventListener('change',function(){
        var syashin = document.getElementById('25-1');
        var psyashin = document.getElementById('25-2');
        var p25 = Number(syashin.value * psyashin.value).toLocaleString();
        document.getElementById('p25').innerHTML ="¥" + p25;
    });

    //心付け・受付係
    document.getElementById('26-1').addEventListener('change',function(){
        var uketuke = document.getElementById('26-1');
        var puketuke = document.getElementById('26-2');
        var p26 = Number(uketuke.value * puketuke.value).toLocaleString();
        document.getElementById('p26').innerHTML ="¥" + p26;
    });
    document.getElementById('26-2').addEventListener('change',function(){
        var uketuke = document.getElementById('26-1');
        var puketuke = document.getElementById('26-2');
        var p26 = Number(uketuke.value * puketuke.value).toLocaleString();
        document.getElementById('p26').innerHTML ="¥" + p26;
    });

    //心付け・契約人
    document.getElementById('27-1').addEventListener('change',function(){
        var keiyaku = document.getElementById('27-1');
        var pkeiyaku = document.getElementById('27-2');
        var p27 = Number(keiyaku.value * pkeiyaku.value).toLocaleString();
        document.getElementById('p27').innerHTML ="¥" + p27;
    });
    document.getElementById('27-2').addEventListener('change',function(){
        var keiyaku = document.getElementById('27-1');
        var pkeiyaku = document.getElementById('27-2');
        var p27 = Number(keiyaku.value * pkeiyaku.value).toLocaleString();
        document.getElementById('p27').innerHTML ="¥" + p27;
    });

    //その他
    document.getElementById('28-1').addEventListener('change',function(){
        var sonota1 = document.getElementById('28-1');
        var psonota1 = document.getElementById('28-2');
        var p28 = Number(sonota1.value * psonota1.value).toLocaleString();
        document.getElementById('p28').innerHTML ="¥" + p28;
    });
    document.getElementById('28-2').addEventListener('change',function(){
        var sonota1 = document.getElementById('28-1');
        var psonota1 = document.getElementById('28-2');
        var p28 = Number(sonota1.value * psonota1.value).toLocaleString();
        document.getElementById('p28').innerHTML ="¥" + p28;
    });

    //その他
    document.getElementById('29-1').addEventListener('change',function(){
        var sonota2 = document.getElementById('29-1');
        var psonota2 = document.getElementById('29-2');
        var p29 = Number(sonota2.value * psonota2.value).toLocaleString();
        document.getElementById('p29').innerHTML ="¥" + p29;
    });
    document.getElementById('29-2').addEventListener('change',function(){
        var sonota2 = document.getElementById('29-1');
        var psonota2 = document.getElementById('29-2');
        var p29 = Number(sonota2.value * psonota2.value).toLocaleString();
        document.getElementById('p29').innerHTML ="¥" + p29;
    });

    //その他
    document.getElementById('30-1').addEventListener('change',function(){
        var sonota3 = document.getElementById('30-1');
        var psonota3 = document.getElementById('30-2');
        var p30 = Number(sonota3.value * psonota3.value).toLocaleString();
        document.getElementById('p30').innerHTML ="¥" + p30;
    });
    document.getElementById('30-2').addEventListener('change',function(){
        var sonota3 = document.getElementById('30-1');
        var psonota3 = document.getElementById('30-2');
        var p30 = Number(sonota3.value * psonota3.value).toLocaleString();
        document.getElementById('p30').innerHTML ="¥" + p30;
    });
})

