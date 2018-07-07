<?php
//入力チェック(受信確認処理追加)
//【要変更】
if(
  !isset($_POST["present"]) || $_POST["present"]=="" ||
  !isset($_POST["amount"]) || $_POST["amount"]=="" ||
  !isset($_POST["uses"]) || $_POST["uses"]=="" ||
  !isset($_POST["sense"]) || $_POST["sense"]==""
){
  exit('ParamError');
}
//1. POSTデータ取得
//【要変更】
$id = $_POST["id"];
$present = $_POST["present"];
$amount = $_POST["amount"];
$uses = $_POST["uses"];
$sense = $_POST["sense"];

//2. DB接続します(エラー処理追加)
//functions.phpの関数を呼び出してる
include("functions.php");
//DB接続を関数化します！db-connの名前は何でもOK！ 
$pdo =db_conn();

//３．データ登録SQL作成
//prepareがSQLを書くという意味
//【要変更】

$stmt = $pdo->prepare("UPDATE gs_kadai0602_table SET present=:a1, amount=:a2, uses=:a3, sense=:a4 WHERE id=:id");

$stmt->bindValue(':a1', $present);
$stmt->bindValue(':a2', $amount);
$stmt->bindValue(':a3', $uses);
$stmt->bindValue(':a4', $sense);
$stmt->bindValue(':id', $id);

$status = $stmt->execute();

//$tatusにはtrueかfalseがはいる。故に4．へ。

//４．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  //５．index.phpへリダイレクト
  //:の後はスペースが絶対必要です！
  header("Location: select_kadai.php");
  exit;
}
?>

