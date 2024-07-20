<?php
try{
 $DB_DATABASE = 'nekonikoban_maru';
 $DB_USERNAME = 'nekonikoban_maru';
 $DB_PASSWORD = 'shihoko1600';
 $DB_OPTION = 'charset=utf8';
 $PDO_DSN = "mysql:host=mysql7026.xserver.jp;dbname=" . $DB_DATABASE . ";" . $DB_OPTION;
 $db = new PDO($PDO_DSN, $DB_USERNAME, $DB_PASSWORD,
 [   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 ]);
 echo 'DB接続成功';
 } catch(PDOException $e){
 echo 'DB接続失敗';
}
?>