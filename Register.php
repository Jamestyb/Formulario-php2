
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
</head>
<style>
    form
    {

    margin: auto;
    width: 220px;
    margin-top:115px;
    }
    h1{
     margin: auto;
    width: 220px;
    margin-top:50px;
    }
    
</style>

<h1>Registre-se</h1>
<body>
  <form action="index.php" method="post">

  <label>Nome:</label><br>
      <input type="text" name="user" placeholder="Usuario" required><br>
      <label>Senha:</label><br>
      <input type="password" name="senha" placeholder="Senha" required><br><br>
      <label>Confirme a sua senha:</label><br>
      <input type="password" name="senha" placeholder="Confirme a sua senha" required><br><br>
 
  <input type="submit" value="Registrar">


  </form>
</body>
</html>
