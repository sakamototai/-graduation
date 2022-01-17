const ceremonylist = [
    //式場名、県、地区、写真のリンク、説明、電話番号、住所、実績、公式サイト
    ["THE STYLE","岡山","岡山市・周辺","thestyle.png","地上101mのプライベートフロアを貸切！『ふたりらしさ』を大事にした自由な結婚式を","086-234-7310","岡山県岡山市北区中山下1-8-45　NTTクレド岡山ビル20階・21階（ウエディングサロンは11階）","×","https://www.styles.jp/thestyle/"],
    ["ラヴィール岡山","岡山","岡山市・周辺","lavilleokayama.png","生涯式場としてリブランドして歩き始める専門式場。大切なゲストと最高の想い出を","086-231-1101","岡山県岡山市北区駅元町1－10","〇","https://www.ravir.co.jp/"],
    ["ホテルグランヴィア岡山","岡山","岡山市・周辺","hotelgranviaokayama.png","岡山駅直結の上質ホテルで叶う洗練されたおもてなしとラグジュアリーなひととき","086-233-3491","岡山県岡山市北区駅元町1－5","〇","https://www.granvia-oka.co.jp/wedding/"],
    ["Tiara-THE GARDEN HOUSE(旧アムボエル・アスク)","岡山","岡山市・周辺","tiaragardenhouse.png","1日1組貸切の『ガーデン付き邸宅×ホワイトチャペル』で楽しいリゾートウエディング","086-201-5050","岡山県岡山市中区国富1－15－6","×","https://bb-tiara-amboel.official-website.jp/"],
    ["Le Merci(ル・メルシェ)","岡山","岡山市・周辺","lemerci.png","選べるチャペル×会場が人気！1棟貸切で気兼ねなくもてなす、大人ウエディング","086-244-4810","岡山県岡山市北区大元上町8－33","×","https://le-merci.com/"],
    ["ヴェルジェくらしき","倉敷","倉敷市・周辺","Verger.png","幸せのブルーが輝く大聖堂！選べる3つのフロア貸切会場で、上質なおもてなしを"," 086-422-2233","岡山県倉敷市笹沖662","×","https://www.verger-kurashiki.jp/"],
    ["EYOHAKU-ヨハク-","倉敷","倉敷市・周辺","eyohaku.png","広大なガーデン、シックな会場、希少なチャペル！バリアフリーの全館がまるごと貸切に","0120-427-489","岡山県倉敷市羽島751－1","×","https://eyohaku-kurashiki.com/"],
    ["The 華紋(ザカモン)","倉敷","倉敷市・周辺","thekamon.png","倉敷美観地区の中心部に立地。歴史と伝統を受け継いだモダンな邸宅","086-421-7441","岡山県倉敷市中央1-10-13 2階","×","https://kamon-kurashiki.jp/"],
    ["SARA","津山","県北","sara.png","ゲスト×ふたりの想いが交差する。洗練された空間で感動的な一日を","0868-24-1101","岡山県津山市川崎105","×","https://sara-wedding.co.jp/"]
]



const area = [
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
    for(let i = 0;i < ceremonylist.length;i++){
        addElement(i);
    }
}

//検索ボタンをクリックした時の処理
function Search(){
    const parentDiv = document.getElementById("ceremonylist");
    const searchword = new RegExp(document.getElementById("searchword").value);
    while( parentDiv.firstChild ){
        parentDiv.removeChild( parentDiv.firstChild );
    }
    for(let i = 0;i < ceremonylist.length;i++){
        if(searchword.test(ceremonylist[i][0])){
            addElement(i);
        }
        else if(searchword.test(ceremonylist[i][1])){
            addElement(i);
        }
    }
    let sc = document.getElementById("searchconditions");
    sc.innerText = document.getElementById("searchword").value
    ;
}

function addElement(i){
    const ceremonyul = document.getElementById("ceremonylist");
    // const newContent = document.createElement('div');//div要素作成
    // newContent.setAttribute("class","list");//divにlistクラス設定
    const newtr = document.createElement("tr"); //tr要素作成
    const newdiv = document.createElement("div"); //
    newdiv.setAttribute("style","border:solid;color:black;");
    newdiv.setAttribute("onclick","pushExplanation("+ i + ")");
    newtr.appendChild(newdiv);//trにdiv要素追加
    const newth1 = document.createElement('th');//th要素作成
    newdiv.appendChild(newth1);//divにth要素追加
    const ceremonyimg = document.createElement('img');//img要素を作る
    ceremonyimg.setAttribute("src","img/ceremony/" + ceremonylist[i][3]);//ソース名
    newth1.appendChild(ceremonyimg);
    const ceremonyname = document.createTextNode(ceremonylist[i][0]); //式場名を生成
    const newth2 = document.createElement('th');//th要素作成
    const newname = document.createElement('p');//p要素作成 
    newname.setAttribute("class","ceremonyl");
    newname.appendChild(ceremonyname); // p要素に式場名を追加
    newth2.appendChild(newname);//th要素にp要素追加
    const newdiv2 = document.createElement('div');//div要素作成
    // newdiv2.setAttribute("hidden","true");
    const newp = document.createElement('p');
    newp.setAttribute('class','ceremonyl');
    newp.innerText = ceremonylist[i][4];
    newdiv2.appendChild(newp);
    const newp2 = document.createElement("p");
    newp2.setAttribute("class","ceremonyl");
    newp2.innerText ="電話番号:" + ceremonylist[i][5];
    newdiv2.appendChild(newp2);
    const newp3 = document.createElement("p");
    newp3.setAttribute("class","ceremonyl")
    newp3.innerText = "所在地:" + ceremonylist[i][6];
    newdiv2.appendChild(newp3);
    const newp4 = document.createElement("p");
    newp4.setAttribute("class","ceremonyl");
    newp4.innerText = "LGBT婚実績:" + ceremonylist[i][7];
    newdiv2.appendChild(newp4);
    const ofiurl = document.createElement("a");
    ofiurl.setAttribute("href",ceremonylist[i][8]);
    ofiurl.innerHTML = "公式サイトはこちら";
    newdiv2.appendChild(ofiurl);
    newth2.appendChild(newdiv2);
    newdiv.appendChild(newth2);//div要素にth要素追加
    newtr.appendChild(newdiv);//tr要素にdiv要素追加

    ceremonyul.appendChild(newtr);
}

function pfCheck(check){
    const areael = document.getElementById("area");
    while( areael.firstChild ){
        areael.removeChild( areael.firstChild );
    }
    for(let i=0;i < area[check.value].length;i++){
        const newlabel = document.createElement("label");
        areael.appendChild(newlabel);
        const newElement = document.createElement("input");
        newElement.setAttribute("type","checkbox"); 
        newElement.setAttribute("name","area");
        newElement.setAttribute("value",area[check.value][i]);
        newElement.setAttribute("onClick","areaCheck(this)");
        newlabel.appendChild(newElement);
        const newContent = document.createTextNode(area[check.value][i]); // テキストノードを作成
        newlabel.appendChild(newContent); // 要素にテキストノードを追加
    }
}
function areaCheck(check){
    const word = new RegExp("すべて");
    const checkbox = document.getElementsByName("area");
    if(check.checked && word.test(check.value)){
        for(let i = 1;i < checkbox.length;i++){
            checkbox.item(i).checked = true;
        }
    }
}

function pushExplanation(i){
    
}

function selectSearch(){
    let count = 0;
    const parentDiv = document.getElementById("ceremonylist");
    while( parentDiv.firstChild ){
        parentDiv.removeChild( parentDiv.firstChild );
    }
    const sc = document.getElementById('searchconditions');
    sc.innerText = "";
    const area = document.getElementsByName("area");
    for(let i = 0;i < area.length;i++){
        if(area.item(i).checked){
            if(i==0){
                for(let fj = 1;fj<area.length;fj++){
                    area.item(fj).checked = true;
                }
            }
            if(count > 0 && !area.item(0).checked){
                sc.innerText += "、";
            }
            if(!area.item(0).checked || i==0){
                sc.innerText += area[i].value;
            }
            for(let j=0;j<ceremonylist.length;j++){
                if(area[i].value == ceremonylist[j][2]){
                    addElement(j);
                }
            }
            count++;
        }
    }
}