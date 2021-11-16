var ceremonylist = [
    ["THE STYLE","岡山","岡山市・周辺"],
    ["ラヴィール岡山","岡山","岡山市・周辺"],
    ["アーヴェリール迎賽館　岡山","岡山","岡山市・周辺"],
    ["Recent Culture Hotel(リーセントカルチャーホテル)","岡山","岡山市・周辺"],
    ["OKAYAMA MONOLITH(岡山モノリス)","岡山","岡山市・周辺"],
    ["SEPHIROTH(セフィロト)","岡山","岡山市・周辺"],
    ["セント・ポールズパーク プリムローズ","岡山","岡山市・周辺"],
    ["森の邸宅 彩音","岡山","岡山市・周辺"],
    ["ホテル メルパルクOKAYAMA","岡山","岡山市・周辺"],
    ["セント・パトリック教会/ウェリントンマナーハウス","岡山","岡山市・周辺"],
    ["THE MAGRITTE(ザ マグリット)","岡山","岡山市・周辺"],
    ["クリスタルテラス Nature","岡山","岡山市・周辺"],
    ["Wグランラセーレ岡山","岡山","岡山市・周辺"],
    ["ホテルグランヴィア岡山","岡山","岡山市・周辺"],
    ["Tiara-THE GARDEN HOUSE(旧アムボエル・アスク)","岡山","岡山市・周辺"],
    ["Le Merci(ル・メルシェ)","岡山","岡山市・周辺"],
    ["Tiara-THE CLASSIC CLUB(旧キューティパイ倶楽部)"],
    ["Ray ClassicGran Sweet(レイクラシックグランスウィート)","岡山","岡山市・周辺"],
    ["ANAクラウンプラザホテル岡山","岡山","岡山市・周辺"],
    ["WHITE DRAMA(ホワイトドラマ)","岡山","岡山市・周辺"],
    ["Tiara-THE GARDEN RESTAURANT(旧アムボエル・アスク","岡山","岡山市・周辺"],
    ["風ノウタ","岡山","岡山市・周辺"],
    ["ヴェルジェくらしき","倉敷","倉敷市・周辺"],
    ["EYOHAKU-ヨハク-","倉敷","倉敷市・周辺"],
    ["The 華紋(ザカモン)","倉敷","倉敷市・周辺"],
    ["LE PONT NEUF(ポンヌフ)","倉敷","倉敷市・周辺"],
    ["マリアガーデン","倉敷","倉敷市・周辺"],
    ["CELESTE(セレスト)","倉敷","倉敷市・周辺"],
    ["Le Reve(ル・レーヴ)","倉敷","倉敷市・周辺"],
    ["SARA津山玉姫殿","津山","県北"],
    ["THE HILLS HOUSE TSUYAMA(ザ・ヒルズハウスツヤマ)","津山","県北"]
]
var ceremonylink = ["thestyle.html","arveril.html","ravil.html","velju.html","forest.html","wind.html"];
var area = [
    ["岡山県すべて","岡山市・周辺", "倉敷市・周辺","県北"],
    ["広島県すべて","備後・県北", "呉・東広島","広島市・周辺"],
    ["山口県すべて","岩国・柳井・周南", "防府・山口・宇部","下関"],
    ["鳥取県すべて"],
    ["島根県すべて"]
]

//読み込み時の処理
window.onload = function(){

const buttonOpen = document.getElementById('modalOpen');
const modal = document.getElementById('easyModal');
const buttonClose = document.getElementsByClassName('modalClose')[0];
const buttonSearch = document.getElementById('as');
//ボタンがクリックされた時
buttonOpen.addEventListener('click', modalOpen);
function modalOpen() {
　　modal.style.display = 'block';
};

//バツ印がクリックされた時
buttonSearch.addEventListener('click',modalClose);
buttonClose.addEventListener('click', modalClose);
function modalClose() {
　　modal.style.display = 'none';
};

//モーダルコンテンツ以外がクリックされた時
addEventListener('click', outsideClose);
function outsideClose(e) {
　　if (e.target == modal) {
　　modal.style.display = 'none';
　　};
};
    for(var i = 0;i < ceremonylist.length;i++){
        addElement(i);
    }
}

//検索ボタンをクリックした時の処理
function Search(){
    var parentDiv = document.getElementById("ceremonylist");
    var searchword = new RegExp(document.getElementById("searchword").value);
    while( parentDiv.firstChild ){
        parentDiv.removeChild( parentDiv.firstChild );
    }
    for(var i = 0;i < ceremonylist.length;i++){
        if(searchword.test(ceremonylist[i][0])){
            addElement(i);
        }
        else if(searchword.test(ceremonylist[i][1])){
            addElement(i);
        }
    }
    var sc = document.getElementById("searchconditions");
    sc.innerText = document.getElementById("searchword").value
    ;
}

function addElement(i){
    var ceremonyul = document.getElementById("ceremonylist");
    var newContent = document.createElement('div');//div要素作成
    newContent.setAttribute("class","list");//divにlistクラス設定
    ceremonyul.appendChild(newContent);//ceremonylistにdivを追加
    var newElement = document.createElement("li"); //li要素作成
    newContent.appendChild(newElement);//divにli要素追加
    var newLink = document.createElement("a"); // a要素作成
    var ceremonyname = document.createTextNode(ceremonylist[i][0]); //式場名を生成
    newLink.appendChild(ceremonyname); // a要素に式場名を追加
    newLink.setAttribute("href",ceremonylink[i]); // p要素にidを設定
    newElement.appendChild(newLink);//li要素にa要素追加
}

function Jump(pass){
    window.location.href = pass;
}

function pfCheck(check){
    var areael = document.getElementById("area");
    while( areael.firstChild ){
        areael.removeChild( areael.firstChild );
    }
    for(var i=0;i < area[check.value].length;i++){
        var newlabel = document.createElement("label");
        areael.appendChild(newlabel);
        var newElement = document.createElement("input");
        newElement.setAttribute("type","checkbox"); 
        newElement.setAttribute("name","area");
        newElement.setAttribute("value",area[check.value][i]);
        newElement.setAttribute("onClick","areaCheck(this)");
        newlabel.appendChild(newElement);
        var newContent = document.createTextNode(area[check.value][i]); // テキストノードを作成
        newlabel.appendChild(newContent); // 要素にテキストノードを追加
    }
}
function areaCheck(check){
    var word = new RegExp("すべて");
    var checkbox = document.getElementsByName("area");
    if(check.checked && word.test(check.value)){
        for(var i = 1;i < checkbox.length;i++){
            checkbox.item(i).checked = true;
        }
    }
}


function selectSearch(){
    var count = 0;
    var parentDiv = document.getElementById("ceremonylist");
    while( parentDiv.firstChild ){
        parentDiv.removeChild( parentDiv.firstChild );
    }
    var sc = document.getElementById('searchconditions');
    sc.innerText = "";
    var area = document.getElementsByName("area");
    for(var i = 0;i < area.length;i++){
        if(area.item(i).checked){
            if(i==0){
                for(var fj = 1;fj<area.length;fj++){
                    area.item(fj).checked = true;
                }
            }
            if(count > 0 && !area.item(0).checked){
                sc.innerText += "、";
            }
            if(!area.item(0).checked || i==0){
                sc.innerText += area[i].value;
            }
            for(var j=0;j<ceremonylist.length;j++){
                if(area[i].value == ceremonylist[j][2]){
                    addElement(j);
                }
            }
            count++;
        }
    }
}