<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>参列者登録画面</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>

<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select_kadai.php">参列者一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert_kadai.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Ann&John結婚式参列者登録</legend>
     <label>名前：<input type="text" name="name"required></label><br>
     <label>Email：<input type="text" name="email"required></label><br>
     <label>出欠：
     <input type="radio" name="attendance" value="はい"required> はい
     <input type="radio" name="attendance" value="いいえ"> いいえ
     </label><br>
     <label>食事のアレルギー：<input type="text" name="food" value="なし"></label><br>
     <label>希望する出し物：<input type="text" name="entertainment" value="伝統芸能"></label><br>
     <label>その他、ご要望：<textArea name="naiyo" rows="4" cols="40"></textArea></label><br>
    
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
