<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  // Coleta os dados do formulário
  $user = $_POST["usuario"];
  $senha = $_POST["senha"];
  
  // Insere os dados no banco de dados
  $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$user', '$senha')";
  if ($conn->query($sql) === TRUE) {
    echo "<br> Dados inseridos com sucesso"."<br>"."<br>";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }
}
?>