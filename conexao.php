<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "biblioteca";
$port = 3306;


try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user,$pass);
    //echo "Conexão realizada com sucesso";
}
    catch(PDOException $err) {
        echo "CONEXÃO FALHOU! " . $err->getMessage();
    }
?>