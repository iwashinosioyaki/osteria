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

//ランチ
var rykn_array = [9000,10500,6500,7000];//配列 array


$('#runch').click(function(){//ランチをクリック
$('#jkn_runch').show(800); $('#jkn_diner').hide(500);
});

$('#diner').click(function(){//ディナーをクリック
$('#jkn_diner').show(800); $('#jkn_runch').hide(500);
});

$('#total_chk').click(function(){
var nStr =1 ; const tax=1.08;});
