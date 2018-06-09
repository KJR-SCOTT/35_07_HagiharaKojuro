<?php
//入力チェック(受信確認処理追加)
//【要変更】
if(
   !isset($_POST["name"]) || $_POST["name"]=="" ||
   !isset($_POST["lid"]) || $_POST["lid"]=="" ||
   !isset($_POST["lpw"]) || $_POST["lpw"]=="" || 
   !isset($_POST["kanri_flg"]) || $_POST["kanri_flg"]=="" ||
   !isset($_POST["life_flg"]) || $_POST["life_flg"]=="" 
 ){
   exit('ParamError');
 }

//1. POSTデータ取得
//【要変更】
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg = $_POST["life_flg"];


//2. DB接続します(エラー処理追加)
//functions.phpの関数を呼び出してる
include("functions.php");
//DB接続を関数化します！db-connの名前は何でもOK！ 
$pdo =db_conn();

//３．データ登録SQL作成
//prepareがSQLを書くという意味
//要変更
$stmt = $pdo->prepare("INSERT INTO gs_user_table (id, name, lid, lpw,
kanri_flg, life_flg) VALUES (NULL, :a1, :a2, :a3, :a4, :a5)");
$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $lid);
$stmt->bindValue(':a3', $lpw);
$stmt->bindValue(':a4', $kanri_flg);
$stmt->bindValue(':a5', $life_flg);
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
