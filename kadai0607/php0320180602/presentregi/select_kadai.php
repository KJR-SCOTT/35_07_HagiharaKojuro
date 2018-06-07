<?php
//1.  DB接続します
//完全にコピーできます。
//functions.phpの関数を呼び出してる
include("functions.php");
//DB接続を関数化します！db-connの名前は何でもOK！ 
$pdo =db_conn();


//２．データ登録SQL作成
//【要変更】

$stmt = $pdo->prepare("SELECT * FROM gs_kadai0602_table");
$status = $stmt->execute();

//３．データ表示
//もらったデータをループして表示
$view="";
if($status==false){
  errorMsg($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  //ここにリンクを差し込む 教科書P.8
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .='<p>';
    $view .='<a href="detail_kadai.php?id='.$result["id"].'">'; 
    //内側で""使うために外側は''
    //hrefの中の移動先のリンク//?は左はURL右はデータを差す
    //id=の後に変数をいれる//'..'の中に変数
    $view .= $result["present"];

    $view .='</a>';
    //ここから削除
    $view .='　'; 
    $view .='<a href="delete_kadai.php?id='.$result["id"].'">'; 
    $view .= '[削除！]';
    $view .='</a>';

    $view .='</p>';   
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index_kadai.php">データ登録</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
  </div>
</div>
<!-- Main[End] -->

</body>
</html>
