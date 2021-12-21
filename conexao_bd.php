<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";

$conn = new PDO("mysql:host=$servername;dbname=restaurante_bd", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Conexão feita com sucesso";

?>