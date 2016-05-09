<!doctype html>
<html lang="ja">

<head>
	<meta charset="UTF-8" />
	<link href="yoyaku.css" rel="stylesheet" type="text/css" />
	<link href="nav.css" rel="stylesheet" type="text/css"/>
	<link href="sub_layout.css" rel="stylesheet" type="text/css" />
	<link rel="shotcut icon" href="images/favicon.png"/>
	<link rel="stylesheet" href="jquery.datetimepicker.css">
	<script src="http://ajaxzip3.github.io/ajaxzip3.js"></script>
	
	<title>Message</title>
	</head>

	<body>

		<div id="container">
			<a href="index.php" class="image"><img src="images/top_img.png" width="160" height="90" border="0" /></a>
		
		<?php include "nav.html"; ?>

		<div id="contents">
			<form name="frm">
			<h1>Message</h1>
		<h2>ご意見ご感想をお書きください</h2>
		
			■ご予約日時<br/>
				
		<p>		
		<input type="text" name="yyk_dhms" id="yyk_dhms" 
placeholder="ご希望の日程" size="24" autocomplete="off" onchange="checkForm();"><br/>

<br/>■人数<br />
<input type="num" name="num" size="2"
onchange="numCheck()">名様

<input type="button" value="確認">
</p>
<!--mail-->

<br>■メールアドレス<br />
<input type="text" name="mail1"><br />
例：osteria@xxxxxx.jp<br />
<input type="text" name="mail2"><br />
※確認のため再度ご入力ください
<p>
<br>■住所<p>	
			
 <label>■郵便番号</label>
 <input type="text" name="zip1" maxlength="3"> -
  <input type="text" name="zip2" maxlength="4" onchange="AjaxZip3.zip2addr('zip1','zip2','pref','city','addr')"> <br>
<label>都道府県</label> 
 <input type="text" name="pref" maxlength="4"> 
<label>市町村</label> 
 <input type="text" name="city"><br>
<label>■それ以降の住所と番地</label> <br>
 <input type="text" name="addr" maxlength="20">
<br />
</p>	

■氏名<br>
<input name="kana" id="kana" placeholder="フリガナ" onchange="kanacheck();">
<br>
<input name="name" id="name" placeholder="名前" >
<br/>
</p>
<p>
<!--ランチ選択-->

<br>■ご希望のコース<br />

<form name="ufrm" action="" method="GET">

<input type="radio" name="kibo" id="runch">
<label for="runch">ランチ</label>
<!--消えてる-->
<div class="none" id="jkn_runch">
<select>
<option>ご希望のお時間</option>
<option>11:30(ランチ)</option>
<option>12:00(ランチ)</option>
</select>

<select id="cose_runch" name="cose_runch">
<option>ご希望のコース</option>
<option value="0">美食の歓びコースの内容はこちら &yen 9,000</option>
<option value="1">至福の晩餐会コースの内容はこちら &yen 10,500</option>
</select>
</div>

<input type="radio" name="kibo" id="diner">
  <label for="diner">ディナー</label>
<!--消えてる-->
<div class="none" id="jkn_diner">

<select>
<option>ご希望のお時間</option>
<option>17:30(ディナー)</option>
<option>18:00(ディナー)</option>
</select>

<select id="cose_diner" name="cose_diner">
<option>ご希望のコース</option>
<option value="2">ムニュKAGURA~神楽~ &yen 6,500</option>
<option value="3">シェフ大堀スペシャルディナーコース　&yen 7,000</option>
</select>
</div>

<input type="button" id="total_chk" value="お支払い料金を合計">
<br><br>
<input type="num" name="total_plice" id="total_plice">
円
<input type="button" onclick="submit();" value="送信" />
</form>

	
	</div>
	</div>
			
			<script src="jquery.js"></script> 
<script src="yoyaku.js"/></script>
<script src="jquery.datetimepicker.js"></script> 

</body>
<script>

	$('#yyk_dhms').datetimepicker({

		lang:'ja',
		formatdate:'Y/m/d',
		minDate : '-1970/01/01',
		maxDate : '+1970/01/31',
		timepicker:false,
		allowTimes : ['12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30',
		'18:00','18:30','19:00','19:30','20:00','20:30','21:00']
		//step : 30
	}); 
	
	
	</script>
	
</html>