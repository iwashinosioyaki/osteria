<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>Menu</title>
	<link href="menu.css" rel="stylesheet" type="text/css" />
    <link href="nav.css" rel="stylesheet" type="text/css" />
	<link href="sub_layout.css" rel="stylesheet" type="text/css" />
	<link rel="shotcut icon" href="images/favicon.png"/>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
	</script>

<script type="text/javascript">
$(function(){
    $('a[href^=#]').click(function(){
        var speed = 50;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});
</script>
</head>

<body>
<div id="container">
	<a href="index.php" class="image"><img src="images/top_img.png" width="160" height="90" border="0" /></a>
	<?php include "nav.html"; ?>

</div>

<div id=contents>
	
	<div class="menu-box" >
		<h1>Menu</h1>
		
		<div id="select">
			<a href="#select1">屋台のコース</a>
			:<a href="#select2">郷土料理のコース</a>
			:<a href="#select3">アラカルト</a>
			</div>
		
		<h2 id="select1">屋台のコース Cucina Volante</h2>
		<p><img src="images/photo1.jpg" width="150" height="170" alt="屋台コースの写真" class="photo"/>
			前菜の盛り合わせ<br/>
			パスタ料理　手長海老のリングィーネ 他18種類<br />
メイン料理　本日のお魚　メッシーナ風<br />
または　無菌豚ヒレ肉とパンチェッタ<br />
デザートとお飲物 赤オレンジのゼリー　他<br />
￥3,800<br />
</p>
<span class="menu">
		<!--ここのpタグの中身を切りとってJavaに貼り付けidをつけてください
			Jsで動的に文字列既成してみます-->
			<p id="yatai">
				
			</p>
		
		<script>
		    document.getElementById("yatai").innerHTML="夕方,ひと仕事を終えた漁師たちが集まる場所といえば屋台!どいつもこいつもうまそうに食べている｡イタリアのどこの街にもある、そんな海辺の屋台で食べた料理は格別においしかった｡シンプルでダイナミックな料理をここで再現したいと思います｡";
		</script>
		</span>
		</div>
		
		<div class="menu-box">
			<h2 id="select2">郷土料理のコース Cucina Locale</h2>
			<p><img src="images/photo2.jpg" width="150" height="170" alt="郷土料理のコース" class="photo" />
				前菜の盛り合わせ<br />
				本日の前菜<br />
本日のお魚　蛤のスープ仕立て<br />
パスタ料理　カラスミのスパゲッティーニ 他18種類<br />
肉料理　猪肉のグリル　季節の野菜添え 他2種類<br />
デザートとお飲物　さとう錦のカラメレーゼ<br />
￥5,800<br />
				<span class="menu">
					食いしん坊の国の人々に愛され、世代を超えて伝承されるイタリアの郷土料理｡
				それぞれの土地に代表的な、季節の味を堪能する料理をご紹介いたします｡
				お喋りとワインをお供に、夕食にたっぷり時間をかけるイタリア人のように、たくさんの皿数のお料理をどうぞゆっくり楽しんでください｡
			</span>
			</p>
		</div>

		<div class="menu-box">
			<h2 id="select3">アラカルト Alla Carta</h2>
			<p><img src="images/photo3.jpg" width="150" height="170" alt="アラカルト" class="photo" />
				リグーリア風カポナータ ￥800<br />
				バーニャ・カウダ　￥1100<br />
サンダニエーレ産生ハムのサラダ　￥1100<br />
緑野菜とフルーツトマトのサラダ　￥700<br />
手長海老のリングイーネ　￥1900<br />
イカスミのスパゲッティーニ　￥1500<br />
ポモドーロ（トマトソース）　￥1100<br />
				
				<span class="menu">
					単品からのご注文も賜ります｡「今日はパスタをたくさん食べたい!」
				「思いっきりワインを飲みたいから、料理は軽く」「おいしいお肉(魚)が食べたいな～」など、
				 ご気分に合わせた組み合わせでどうぞ｡
				 </span>
			</p>
		</div>
	
</div>

</body>
</html>
