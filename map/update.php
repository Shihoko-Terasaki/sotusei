<?php
session_start();
//1. POSTデータ取得
$name   = $_POST["name"];
$address  = $_POST["address"];
$hp = $_POST["hp"];
$lat    = $_POST["lat"];
$lon    = $_POST["lon"];
$id     = $_POST["id"];

//2. DB接続します
include("funcs.php");
//LOGINチェック → funcs.phpへ関数化しましょう！
sschk();
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE petshop SET name=:name,address=:address,hp=:hp,lat=:lat,lon=:lon, WHERE id=:id");
$stmt->bindValue(':name',   $name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':address',  $address,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':hp',    $hp,    PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lat', $lat, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lon', $lon, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id',     $id,     PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("select.php");
}
?>
