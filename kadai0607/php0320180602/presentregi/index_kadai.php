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
    <div class="navbar-header"><a class="navbar-brand" href="select_kadai.php">ユーザー一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert_kadai.php">
  <div class="jumbotron">
   <fieldset>
    <legend>あなたのセンスや好みを教えて下さい</legend>
     <label>ほしいもの：<input type="text" name="present"required></label><br>
     <label>金額：<input type="text" name="amount" value="円" required></label><br>
     <label>用途：<textArea name="uses" rows="1" cols="20"></textArea></label><br>
     <label>
     センス：
     <select name="sense" size="5">
     <option value="カリフォルニア">カリフォルニア</option>
     <option value="パリ">パリ</option>
     <option value="ニューヨーク">ニューヨーク</option>
     <option value="ハワイ">ハワイ</option>
     <option value="和">和</option>
     </select>
     </label>
   

     <br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
