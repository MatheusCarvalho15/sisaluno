<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_aluno.css">
  <title>Document</title>
</head>

<body>

<div class="container">
  <div class="formulario">
  <form method="GET" action="crudaluno.php">
    
     <h2>Cadastro do Aluno</h2>
     
    <label for="">Nome</label>
    <input type="text" name="nome" required="">
    <label for="">Idade</label>
    <input type="num" name="idade" required="">
    <label for="">Datanascimento</label>
    <input type="date" name="datanascimento" required="">
    <label for="">Endereco</label>
    <input type="text" name="endereco" required="">
    <select name="estatus" id="estatus" required="">
    <option value=""></option>
      <option value="aprovado">aprovado</option>
      <option value="reprovado">reprovado</option>
    
    </select>
    
    

    <input type="submit" name="cadastrar" value="cadastrar">
  </form>
  </div>
  <div class="imagem"></div>
</div>
  

  <button class="button"><a href="../sisaluno">voltar</a></button>

</body>

</html>