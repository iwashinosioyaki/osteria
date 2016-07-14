<?php
/*
Plugin Name: CSV UPLOAD ADD USER Plugin
Plugin URI: http://ultimai.com/plugin
Description: プラグインCSVをアップしてユーザーを一気に追加するもの
Author: sashimi
Version: 3.1
Author URI: http://www.example.com
*/
function add_pages(){ //管理画面のメニューに表示を追加
  add_menu_page('CSVアップローダー', 'CSVアップローダー', 'level_8', __FILE__, 'csv_upload', 'dashicons-upload',26);
}
//CSS追加関数
function add_init(){
    // CSS登録 http://[site domain]/wp-content/plugins/csv_up/css/csv-upload.css
    wp_register_style('csv-upload', plugins_url('css/csv-upload.css', __FILE__));
    wp_enqueue_style('csv-upload');
}
add_action('admin_init', 'add_init');


			
	//プラグインの表示関数
  function csv_upload(){
  //追記文ここから	
   require_once 'indexq.php';
   
  } 		
	//片方にだけ入って終わらないようにトランザクション開始する
	//トランザクションは複数のsqlが全部成功か失敗か保障するもの
	//例えば途中で失敗した場合これまでの処理をなかったことにする。
	//(ロールバック)//完全に成功した時だけコミットで終了する

// 管理メニューに追加するフック
add_action('admin_menu', 'add_pages');
