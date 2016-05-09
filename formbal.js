
			function numCheck(){
num =document.frm.num.value;

if(!num.match(/^[0-9]+$/)|| 1 > num || num > 10 ){
alert("1~10の間で入れてください");
}
}
	
	function addcheck(){
var addr =document.frm.addr.value;
//半角と全角の0－9まで
if(!addr.match(/[0-9０－９]/) ){
alert("住所は番地まで入れてください");
}
}
//カナチェック
function kanacheck(){
var kana =document.frm.kana.value;
//半角と全角の0－9まで
if(!kana.match(/^[ァ-ン]+$/) ){
alert("フリガナはカタカナで入れてください");
}
}

//ランチ・ディナー
var jkn_runch = document.getElementById("jkn_runch");
var jkn_diner = document.getElementById("jkn_diner");
var rykn_array = [9000,10500,6500,7000];//配列 array
var tax=1.08;


function numcheck(){
num =document.frm.num.value;
if(!num.match( /^\d{1,2}$/ ) || num > 12 || num< 1 ){
alert("1~12までの数字で入れてください");
}
}

function total_chk(){
var total_plice = document.getElementById("total_plice");
//selectmenuで選んだ値を所得するための文
var rl=document.frm.cose_runch;
var rd=document.frm.cose_diner;

if(document.frm.runch.checked){
//ランチにチェックはいってたら
var menu =
document.frm.cose_runch.options[document.frm.cose_runch.selectedIndex].value;
total_plice.value =(num * rykn_array[menu]*tax).toLocaleString();
}else if(document.frm.diner.checked) {
//ディナーにチェックはいってたら
var menu =
document.frm.cose_diner.options[document.frm.cose_diner.selectedIndex].value;

}
else {//どっちにもはいってなかったら
	alert("ランチかディナーを選んでください");
}
total_plice.value =(num * rykn_array[menu]*tax).toLocaleString();

//boxの値がセレクトで選んだ値になる
//消費税を掛け算した結果が出るように
}
 document.onkeypress = enter;
    function enter(){
        if( window.event.keyCode == 13 ){
            return false;
            
            
        }
    }
