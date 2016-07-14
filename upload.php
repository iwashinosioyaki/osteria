<?php //echo "testtest";
require_once dirname(__FILE__) . './../../../wp-config.php';
  
  $count = count($_FILES['files']['tmp_name']);
  
  for($i = 0 ; $i < $count ; $i ++ ) {
  if(is_uploaded_file($_FILES["files"]["tmp_name"][$i])){
    //csvかチェック
    
    if(pathinfo($_FILES["files"]["name"][$i], PATHINFO_EXTENSION) == "csv"){
      $lines = file($_FILES["files"]["tmp_name"][$i]);
    }  //配列に格納した
   // 中身を見るなら  var_dump($lines );
  
  // CSVファイルを回して表示する
 //global $wpdb; この変数がDBに接続するクラス。WPネイティブ
    
		  
  if(isset($lines)){
 
     try{
       
      $db = 'mysql:dbname=' . DB_NAME . ';host='.DB_HOST ;
      $pdo = new PDO($db, DB_USER, DB_PASSWORD);
      $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
       
       $pdo->beginTransaction();
       
       var_dump( '$lines' );exit();
       
       foreach($lines as $line){ 
        $user = substr( $line, 0, strpos($line, ",")); 
		                //文字の切り出し。$lineの0文字目から最初のカンマがあるところまで     
  //ファイルに1行でも重複したユーザーがあれば全部入れない。
	   $strsql="SELECT COUNT(ID) FROM wp_users WHERE user_login= " ;
	   $strsql .= $user;//先頭のユーザーIDだけを一行から取り出す文を書くところ
   
		$stmt = $pdo-> prepare($strsql); //$results = $pdo->get_results( $strsql );
        $stmt -> execute(); 
        $assoc= $stmt->fetch(PDO::FETCH_ASSOC) ; //カラム名で配列化
        $assoc = $assoc["COUNT(ID)"]; //行数をカウントした結果
 			
 			//user1の検索結果が1行でもあれば
              if( $assoc > 0) throw new Exception('データベース処理中止');
             //意図的にエラー→rollbackします
 			
 			//WP八種の暗号化
 			$password_arr = explode(',' , $line);
			//両脇’を除去してから暗号化 くっつけてから配列に戻す
             $password_arr[1] = str_replace("'","",$password_arr[1]);
             //暗号化
             $password_arr[1] =wp_hash_password($password_arr[1]);
             //'で囲って配列の2番目を暗号化された方で上書き 
             $password_arr[1] ="'". $password_arr[1]."'";
             //カンマ区切りの1行に戻す
             
             $outher= str_replace( "'",'"', $password_arr[9]) ;
			 if(trim($password_arr[9])=="'administrator'"){
			 	$outher_num = 13;
			 }else{
			 	$outher_num = 6;
			 }
				 //a:1:{s:6 編集者editor･寄稿者author･投稿者author //a:1:{s:13 管理者
			   //配列から[9] を削除
			   unset($password_arr[9]);
			  //配列をカンマ区切りの1行に戻す。
			   $line = implode( ',', $password_arr); 
             
              
			
             
            $strsql= "INSERT INTO $wpdb->users 
            (`user_login`, `user_pass`, `user_nicename`,
             `user_email`, `user_url`, `user_registered`, 
             `user_activation_key`, `user_status`, `display_name`) VALUES ";
           
            
             $sqlmeta= "insert into $wpdb->usermeta (user_id,meta_key,meta_value) 
             SELECT ID,'wp_capabilities','a:1:{s:$outher_num:$outher;b:1;}' 
             FROM $wpdb->users where user_login = "; 
			 //a:1:{s:16:$outher;b:1;}編集者
			 //a:1:{s:6:$outher;b:1;}投稿者
          
             $sql='';//連結代入で使いはじめる\のでか必ず初期化
              $sql .= "($line)" ;
                $strsql .= $sql;
                 $stmt = $pdo-> prepare($strsql); 
                  $stmt -> execute(); 
				  
            $sqlmeta .= "$user";//先頭のユーザーIDだけを一行から取り出す文を書くところ
               //この文字*(ユーザー名)でusersテーブルから1行絞り込む。
            
             $stmt = $pdo-> prepare($sqlmeta); // $results = $pdo->get_results( $sqlmeta );
               $stmt -> execute(); 
             
             echo "<h3>以下の内容をアップロードしました。</h3> <p>".$strsql;echo "<p>".$sqlmeta;
        } //一行の処理の終わり
        
       $pdo->commit(); 
      }catch (PDOException $err){
        $pdo->rollBack();
        echo "<h3>ロールバックしました</h3>".$err;
      }   
   }   //ファイル処理全て終わり
   }else{
      echo "no file" . $i . "\n";
    }
  }
