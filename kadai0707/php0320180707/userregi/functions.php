<?php
//共通で使うものを別ファイルにしておきましょう。

//DB接続関数（PDO）

function db_conn(){
  try {
    //returnした結果が$pdoにはいる
    return new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }
}


//SQL処理エラー
 //funtionの中に$stmtを引数としていれる
function errorMsg($stmt){
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}

/**
* XSS
* @Param:  $str(string) 表示する文字列
* @Return: (string)     サニタイジングした文字列
*/
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}


?>
