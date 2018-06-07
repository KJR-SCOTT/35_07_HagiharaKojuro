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
//要変更
$stmt = $pdo->prepare("INSERT INTO gs_kadai0602_table(id, present, amount, uses,
sense, indate )VALUES(NULL, :a1, :a2, :a3, :a4, sysdate())");
$stmt->bindValue(':a1', $present);
$stmt->bindValue(':a2', $amount);
$stmt->bindValue(':a3', $uses);
$stmt->bindValue(':a4', $sense);
//$stmtの関数を実行せよ！の意味
$status = $stmt->execute();

//$tatusにはtrueかfalseがはいる。故に4．へ。

//４．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  //５．index.phpへリダイレクト
  //:の後はスペースが絶対必要です！
  header("Location: index_kadai.php");
  exit;
}
?>
