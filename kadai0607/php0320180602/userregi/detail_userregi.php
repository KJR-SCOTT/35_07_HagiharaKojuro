<?php

$id = $_GET["id"];

//select.phpからそのままもってくる

//1.  DB接続します
//完全にコピーできます。
//functions.phpの関数を呼び出してる
include("functions.php");
//DB接続を関数化します！db-connの名前は何でもOK！ 
$pdo =db_conn();

//２．データ登録SQL作成

//【要変更】

$stmt = $pdo->prepare("SELECT * FROM gs_kadai0602_table WHERE id=:id");
//:idはbind関数
$stmt->bindValue(":id", $id, PDO::PARAM_INT);//PDO::～はセキュリティ。プロトのときはなくてもよい
$status = $stmt->execute(); //$stmtがexecuteした結果をもち、$statusにtrue/falseがはいる


//３．データ表示
if($status==false){
    errorMsg($stmt);
}else{
    $rs = $stmt->fetch();
}
?>

<!--以下、HTML-->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select_userregi.php">ほしいものデータ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

<!-- 【要変更】-->

<form method="post" action="update_userregi.php">
<div class="jumbotron">
   <fieldset>
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name"required></label><br>
     <label>ログインID（メールアドレス）：<input type="text" name="mail" value="aa@aa.com" required></label><br>
     <label>パスワード：<input type="text" name="pass" required></label><br>
     <br>
<!-- 管理者フラグの立て方をどうするか-->
     <label>スーパー管理者ですか？：
     <input type="radio" name="kanri_flg" value="1"required> はい
     <input type="radio" name="kanri_flg" value="0"> いいえ
     </label><br>
     <label>使用中ですか？：
     <input type="radio" name="life_flg" value="0"required> はい
     <input type="radio" name="life_flg" value="1"> いいえ
     </label><br>
     
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>