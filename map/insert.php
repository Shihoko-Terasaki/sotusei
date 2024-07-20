<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$address = $_POST["address"];
$hp = $_POST["hp"];
$lat    = $_POST["lat"];
$lon    = $_POST["lon"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO petshop(name,address,hp,lat,lon)VALUES(:name,:address,:hp,:lat,:lon())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);      //String（文字列の場合 PDO::PARAM_STR)
$stmt->bindValue(':address', $address, PDO::PARAM_STR);      //String（文字列の場合 PDO::PARAM_STR)
$stmt->bindValue(':hp', $hp, PDO::PARAM_STR);    //String（文字列の場合 PDO::PARAM_STR)
$stmt->bindValue(':lat', $lat, PDO::PARAM_INT);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lon', $lon, PDO::PARAM_INT);  //String（文字列の場合 PDO::PARAM_STR)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("index.php");
}
?>