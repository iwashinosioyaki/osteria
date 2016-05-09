<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>Osteria Grazie[イタリア料理の店]
		</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<link href="nav.css" rel="stylesheet" type="text/css"/>
		<link href="side.css" rel="stylesheet" type="text/css" />
		<link href="index_layout.css" rel="stylesheet" type="text/css" />
		<link rel="shotcut icon" href="images/favicon.png"/>

		<!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
<script>	
$(function(){
  $("#toggle").click(function(){
    $("#menu").slideToggle();
    return false;
  });
  $(window).resize(function(){
    var win = $(window).width();
    var p = 480;
    if(win > p){
      $("#menu").show();
    } else {
      $("#menu").hide();
    }
  });
});
	</script>
	</head>

<body>
	<div id="container">
	<div id="header">
		<h1><img src="images/title_780.png"alt="Osteria Grazie" width="780" height="90" /></h1>
	</div>
		<div id="menu-box">
  <div id="toggle"><a href="#">menu</a></div>
  <ul id="menu" class="">
	  <li><a href="info.php">店舗紹介</a></li>
	  <li><a href="#">ランチ</a></li>
	  <li><a href="menu.php">ディナー</a></li>
	  <li><a href="menu.php">アラカルト</a></li>
	  <li><a href="recipe.php">豚の背肉グリル</a></li>
	  <li><a href="#">ティラミス</a></li>
	  <li><a href="yoyaku.php">ご意見ご要望</a></li>
	  <li><a href="#">メール</a></li>
  </ul>
</div>
	<?php include "nav.html"; ?>
	

	
	
	<div id="contents">
	<img src="images/top2.jpg" alt="料理の写真" width="380" height="240" />
	
	<!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:450px;margin:0px auto 6px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/top1.jpg" />
                </li>
                <li><img src="images/top4.jpg" />
                </li>
                <li><img src="images/top3.jpg" />
                </li>
                <li><img src="images/top5.jpg" />
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="images/top1-tn.jpg" /></li>
                <li><img src="images/top4-tn.jpg" /></li>
                <li><img src="images/top3-tn.jpg" /></li>
                <li><img src="images/top5-tn.jpg" /></li>
            </ul>
        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="jQuery Slideshow">jQuery Slideshow</a></div>
        </div>
    </div>
    <!-- End of body section HTML codes -->
    

	
	
	<h2> Welcome to Osteria Grazie</h2>
	
	<p><span id"osteria">オステリア･グラッツェ</span>へようこそ!グラッツェとは<span class="italia">イタリア</span>語でありがとうという意味です｡
		本場<span class="italia">イタリア</span>で修行したシェフの味を、是非一度お試しください!</p>
		
		
	</div>
	<div id="side">
		<h3>店長のblog</h3>
		<ul>
			<li><a href="#">旬の食材(18)</a></li>
			<li><a href="#">ワイン(16)</a></li>
			<li><a href="#">我が家の猫(5)</a></li>
			<li><a href="#">今日のスイーツ(4)</a></li>
			<li><a href="#">店長のぼやき(2)</a></li>
		</ul>
		<h3>Archives</h3>
		<ul>
			<li><a href="#">Augast 2014</a></li>
			<li><a href="#">July 2014</a></li>
			<li><a href="#">June 2014</a></li>
			<li><a href="#">May 2014</a></li>
			<li><a href="#">April 2014</a></li>
			<li><a href="#">March 2014</a></li>
		</ul>
	</div> 
	
	<div id="footer">
			<address id="copyright"><small>Copyright (C) 2014 Osteria Grazie. All Rights Reserved.
			</small></address>
			</div>
	</div>
	
</body>
</html>