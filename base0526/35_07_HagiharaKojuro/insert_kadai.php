<?php
//条件飛んできてない場合のAlert。おまじないなのでコピー。
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["email"]) || $_POST["email"]=="" ||
  !isset($_POST["food"]) || $_POST["food"]=="" ||
  !isset($_POST["entertainment"]) || $_POST["entertainment"]=="" ||
  !isset($_POST["naiyo"]) || $_POST["naiyo"]==""  ||
  !isset($_POST["attendance"]) || $_POST["attendance"]==""
 ){
  exit('ParamError要はエラーのメッセージ');
}

//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name = $_POST["name"];
$email = $_POST["email"];
$food = $_POST["food"];
$entertainment = $_POST["entertainment"];
$naiyo = $_POST["naiyo"];
$attendance = $_POST["attendance"];


//2. DB接続します
//PDOは教科書参照//host後は、ユーザー名とパスワード。
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('dbError:'.$e->getMessage());
}


//３．データ登録SQL作成
//SQL文は""の中に文字列として書く
$sql ="INSERT INTO gs_an_table(id, name, email, food, entertainment, naiyo, indate, attendance)
VALUE(NULL, :a1,:a2,:a3,:a4,:a5,sysdate(), :a6)";



$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $email,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $food,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $entertainment,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $naiyo,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a6', $attendance,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("sqlError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
header("Location: index_kadai.php");

}
?>
