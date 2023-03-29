<?php


$servidor = "localhost";
$usuario = "id20479527_skl";
$senha = "+V<28X<jQ*e^A+a=";
$nomedb = "id20479527_db2"; // nome do banco de dados que será usado

// Cria a conexão com o banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $nomedb);

// Checa a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>