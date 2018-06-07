<?php
//入力チェック(受信確認処理追加)
//【要変更】
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["mail"]) || $_POST["mail"]=="" ||
  !isset($_POST["pass"]) || $_POST["pass"]=="" 
){
  exit('ParamError');
}

//1. POSTデータ取得
//【要変更】
$name = $_POST["name"];
$mail = $_POST["mail"];
$pass = $_POST["pass"];


//2. DB接続します(エラー処理追加)
//functions.phpの関数を呼び出してる
include("functions.php");
//DB接続を関数化します！db-connの名前は何でもOK！ 
$pdo =db_conn();

//３．データ登録SQL作成
//prepareがSQLを書くという意味
//要変更
$stmt = $pdo->prepare("INSERT INTO gs_user_table(id, name, lid, lpw,
kanri_flg, life_flg )VALUES(NULL, :a1, :a2, :a3, :a4, :a5");
$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $mail);
$stmt->bindValue(':a3', $pass);
$stmt->bindValue(':a4', $aaaa);
$stmt->bindValue(':a5', $bbbb);
//$stmtの関数を実行せよ！の意味
$status = $stmt->execute();

//$tatusにはtrueかfalseがはいる。故に4．へ。

//４．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  //５．index.phpへリダイレクト
  //:の後はスペースが絶対必要です！
  header("Location: index_userregi.php");
  exit;
}
?>
