<?php
Create table users(
    id INT NOT NULL PRIMARY KEY AUTO_INCRIMENT,
    usuario varchar(50) NOT NULL UNIQUE,
    senha varchar(255) NOT NULL,
)

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','demo');

$connect = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD, DB_NAME);

if($connect === false){
    die("ERRO: Não foi possivel conectar." . mysqli_connect_error());
}
?>