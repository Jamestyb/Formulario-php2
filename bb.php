
<?php


//variaveis da conexão do banco dados

include "conexao.php";




echo "Conectado ao banco de dados"."<br>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coleta os dados do formulário
  $user = isset $_POST["user"];
  $senha = $_POST["senha"];
  
  // Insere os dados no banco de dados
  $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$user', '$senha')";
  if ($conn->query($sql) === TRUE) {
    echo "<br> Dados inseridos com sucesso"."<br>"."<br>";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }
}



//visualiza tabela
$sql = "SELECT usuario,  senha  FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "usuario: " . $row["usuario"]. " - senha: " . $row["senha"]. "<br>"."<br>";
  }
} else {
  echo " 0 resultados tabela vazia ";
}

$conn->close();
?>