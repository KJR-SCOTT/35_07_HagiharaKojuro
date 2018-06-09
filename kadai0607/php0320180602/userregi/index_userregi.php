<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Registrartion_Sense</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select_userregi.php">ユーザー登録一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert_userregi.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name"required></label><br>
     <label>ログインID（メールアドレス）：<input type="text" name="lid" value="pp@ww" required></label><br>
     <label>パスワード：<input type="text" name="lpw" required></label><br>
     <br>
<!-- 管理者フラグの立て方をどうするか-->
     <label>管理者ですか？：
     <input type="radio" name="kanri_flg" value="0"required> 0, はい
     <input type="radio" name="kanri_flg" value="1"> 1, いいえ
     </label><br>
     <label>使用中ですか？：
     <input type="radio" name="life_flg" value="0"required> 0, はい
     <input type="radio" name="life_flg" value="1"> 1, いいえ
     </label><br>
     
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
