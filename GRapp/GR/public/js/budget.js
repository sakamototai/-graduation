document.addEventListener("DOMContentLoaded",function(){

    var quan = document.getElementsByClassName('quan');

    var flg = 0;

    var flg=0; // 入力値判定フラッグ
    window.onload = function(){
        var myTbl = document.getElementById('editTbl');// ID名から要素を参照<table id="ID名">
        var len=editTbl.rows[1].cells.length; // 列数, セルへの参照はrowsのcellsコレクション
        var Td = myTbl.getElementsByTagName('td'); // myTbl内の td要素のリスト(NodeList)
        for(var i=0; i<Td.length; i++){ // <td>をループ
            Td[i].setAttribute('id','td'+i); // ID名を設定
            Td[i].onclick =function(){
                if(flg==1){
                    return
                } // 半角数値でなければ
            eDit(this.id); // onclickで 'eDit'を実行
             }
         }
    }

    function eDit(id){  // クリックしたセルに 入力領域作成
        cellNum=document.getElementById(id).cellIndex; // 何列目か
        if(len-1==cellNum){
            alert('この列は入力できません。'); 
            return
        } // もし最後の列なら
        var Td = document.getElementsByTagName('td');
        var Spn = document.createElement('span'); // span要素 生成
        Spn.setAttribute('contenteditable','true')// contenteditable属性を付加
        Spn.setAttribute('id','Spn' + id); //ID名を付加
        Td[id].innerHTML=""; // Td[id]の中を空に
        Td[id].appendChild(Spn); // SpnをTd[id]に追加 これで入力可能になる
        Spn.focus(); // カーソルを合わせる 
        Spn.onblur = function(){
            bLur(id);
        }
    }

    function bLur(id){
        var Spn = document.getElementById('Spn' + id);
        var str=Spn.innerText;str=Spn.textContent; // Spn の値
        if(str.match(/[^0-9 . -]|[¥s]+/)||str==""){
            flg=1; // 入力チェック
            alert("半角数値を入れてください。"); 
            eDit(id); return;
        } // 半角数値でなければ 再入力
        flg=0; Td[id].innerHTML=str; // Td[id]に Spnの値を入れる
    }     

    function calcTbl() {
        var myTbl = document.getElementById('editTbl');
        for(var i=1;i< myTbl.rows.length;i++){ // <tr>をループ（1行目は,見出し行でスキップ)
            var num = 0; // セルの値 格納変数
            var total = 0;// セルの合計値 格納変数 
        for(var j=1;j< myTbl.rows[i].cells.length-1;j++){ // tr[i]行目のセルの数
            num=myTbl.rows[i].cells[j].innerHTML; // tr[i]番目行のtd[j] 番目セルの値,取得
            num = parseFloat(num); // 数値に変換 
        　  num = num *1000;// 小数点問題 (-20.2+20=0.1999～)のような現象を回避
            total+=num; // 合計値
        }
            total = total/1000;
            myTbl.rows[i].cells[j].innerHTML=total; // 行の末尾のセルに合計値
            myTbl.rows[i].cells[j].style.color="#cc00ff";
        }
    } 
})