<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
function db_conn(){
  try {
      $db_name = "nekonikoban_maru";    //データベース名
      $db_id   = "nekonikoban_maru";      //アカウント名
      $db_pw   = "shihoko1600";      //パスワード：XAMPPはパスワード無しに修正してください。
      $db_host = "mysql7026.xserver.jp"; //DBホスト
      return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
  } catch (PDOException $e) {
    exit('DB Connection Error:'.$e->getMessage());
  }
}

//SQLエラー
function sql_error($stmt){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}

//リダイレクト
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}

//SessionCheck(スケルトン)
function sschk(){
  if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    exit("Login Error");
}else{
    session_regenerate_id(true); //セッションKEYを入れ替える
    $_SESSION["chk_ssid"] = session_id();
}
}
