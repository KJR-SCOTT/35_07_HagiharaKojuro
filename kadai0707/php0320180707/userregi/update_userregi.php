<?php
//入力チェック(受信確認処理追加)
//【要変更】
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["mail"]) || $_POST["mail"]=="" ||
  !isset($_POST["pass"]) || $_POST["pass"]=="" || 
  !isset($_POST["kanri_flg"]) || $_POST["kanri_flg"]=="" ||
  !isset($_POST["life_flg"]) || $_POST["life_flg"]=="" 
){
  exit('ParamError');
}
//1. POSTデータ取得
//【要変更】
$id = $_POST["id"];
$name = $_POST["name"];
$mail = $_POST["mail"];
$pass = $_POST["pass"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg = $_POST["life_flg"];

//2. DB接続します(エラー処理追加)
//functions.phpの関数を呼び出してる
include("functions.php");
//DB接続を関数化します！db-connの名前は何でもOK！ 
$pdo =db_conn();

//３．データ登録SQL作成
//prepareがSQLを書くという意味
//【要変更】

$stmt = $pdo->prepare("UPDATE gs_user_table SET name=:a1, lid=:a2, lpw=:a3, kanri_flg=:a4, life_flg=:a5 WHERE id=:id");

$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $mail);
$stmt->bindValue(':a3', $pass);
$stmt->bindValue(':a4', $kanri_flg);
$stmt->bindValue(':a5', $life_flg);
$stmt->bindValue(':id', $id);


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

