<?php

$dbuser = $_ENV['MYSQL_USER'];
$dbpass = $_ENV['MYSQL_PASS'];

define('DB_SERVER', 'mysql');
define('DB_USERNAME',$dbuser);
define('DB_PASSWORD',$dbpass);
define('DB_NAME','db_donaflor');

$connect = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD, DB_NAME);

if($connect === false){
    die("ERRO: Não foi possivel conectar." . mysqli_connect_error());
}
?>