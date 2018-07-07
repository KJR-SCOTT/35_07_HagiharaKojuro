<?php
//1. POSTデータ取得
//deleteはid特定すればOK
$id   = $_GET["id"];

//2. DB接続します(エラー処理追加)
//functions.phpの関数を呼び出してる
include("functions.php");
//DB接続を関数化します！db-connの名前は何でもOK！ 
$pdo =db_conn();

//３．データ登録SQL作成
//prepareがSQLを書くという意味
$stmt = $pdo->prepare("DELETE FROM gs_user_table WHERE id=:id");
$stmt->bindValue(':id', $id);

//$stmtの関数を実行せよ！の意味
$status = $stmt->execute();

//$tatusにはtrueかfalseがはいる。故に4．へ。

//４．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  //５．index.phpへリダイレクト
  //:の後はスペースが絶対必要です！
  header("Location: select_userregi.php");
  exit;
}
?>

