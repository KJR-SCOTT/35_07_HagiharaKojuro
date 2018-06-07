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
    <div class="navbar-header"><a class="navbar-brand" href="select_kadai.php">ほしいものデータ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

<!-- 【要変更】-->

<form method="post" action="update_kadai.php">
<div class="jumbotron">
   <fieldset>
    <legend>あなたのセンスや好みを教えて下さい</legend>
     <label>ほしいもの：<input type="text" name="present" value="<?=$rs["present"]?>"></label><br>
     <label>金額：<input type="text" name="amount" value="<?=$rs["amount"]?>"></label><br>
     <label>用途：<textArea name="uses" rows="4" cols="40"><?=$rs["uses"]?></textArea></label>
     <br>     
     <label>センス：
     <select name="sense" size="5" value="<?=$rs["sense"]?>">
     <option value="カリフォルニア">カリフォルニア</option>
     <option value="パリ">パリ</option>
     <option value="ニューヨーク">ニューヨーク</option>
     <option value="ハワイ" selected>ハワイ</option>
     <option value="和">和</option>
     </select>
     </label>
     <br>

     <input type="submit" value="送信">
     <input type="hidden" name="id" value="<?=$rs["id"]?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
