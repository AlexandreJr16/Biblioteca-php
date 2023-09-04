<?php

$host ="localhost";
$dbname = "livrariai2a";
$username = "root";
$password = "root";

$conn = mysqli_connect($host, $username, $password, $dbname);

if($conn->connect_errno != 0){
    echo "Falha ao conectar: (".$conn->connect_errno. ")";
}else{
    //echo "Conectado ao banco";
}

?>