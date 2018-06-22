<?php
//最初にSESSIONを開始！！
//マスト
session_start();

//0.外部ファイル読み込み
include("functions.php");

//1.  DB接続します
$pdo = db_con();
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//2. データ登録SQL作成
//life_flgは退会者等が出た場合には1のflgをつける事で使えなくする
// バインド関数
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid=:lid AND lpw=:lpw AND life_flg=0");
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$res = $stmt->execute();
//$resはエラーないか検証してる

//3. SQL実行時にエラーがある場合
if($res==false){
  queryError($stmt);
}

//4. 抽出データ数を取得
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()
$val = $stmt->fetch(); //1レコードだけ取得する方法(ユーザーは一人なので)

//5. 該当レコードがあればSESSIONに値を代入
//認証してます。ifレコードが空っぽじゃなければ(!)
//chk_ssidは今作った。今のセッションIdを渡す。「○○さんこんにちは」用にnameも渡す。
if( $val["id"] != "" ){
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  header("Location: select.php");
}else{
  //logout処理を経由して全画面へ
  header("Location: login.php");
}

exit();
?>

