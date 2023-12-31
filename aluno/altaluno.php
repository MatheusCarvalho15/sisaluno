<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>

  <?php
  require_once('../conexao.php');

  $id = $_POST['id'];

  ##sql para selecionar apens um aluno
  $sql = "SELECT * FROM aluno where id= :id";

  # junta o sql a conexao do banco
  $retorno = $conexao->prepare($sql);

  ##diz o paramentro e o tipo  do paramentros
  $retorno->bindParam(':id', $id, PDO::PARAM_INT);

  #executa a estrutura no banco
  $retorno->execute();

  #transforma o retorno em array
  $array_retorno = $retorno->fetch();

  ##armazena retorno em variaveis
  $nome = $array_retorno['nome'];
  $idade = $array_retorno['idade'];
  $datanascimento = $array_retorno['datanascimento'];
  $endereco = $array_retorno['endereco'];
  $estatus = $array_retorno['estatus'];


  ?>

  <form method="POST" action="crudaluno.php">
    <input type="text" name="nome" id="nome" value=<?php echo $nome ?>>

    <input type="num" name="idade" id="idade" value=<?php echo $idade ?>>

    <input type="date" name="datanascimento" id="datanascimento" value=<?php echo $datanascimento ?>>

    <input type="text" name="endereco" id="ender eco" value=<?php echo $endereco ?>>

    <select name="estatus" id="">
      <option value="<?php echo $estatus ?>"><?php echo $estatus ?></option>
      <option value="aprovado">Aprovado</option>
      <option value="reprovado">Reprovado</option>
    </select>

    <input type="hidden" name="id" id=" " value=<?php echo $id ?>>

    <input type="submit" name="update" value="Alterar">
  </form>
</body>

</html>