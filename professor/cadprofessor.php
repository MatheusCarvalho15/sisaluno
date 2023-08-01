<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_professor.css">
  <title>Document</title>
</head>

<body>

<div class="container">
  <div class="formulario">

  <form method="POST" action="crudprofessor.php">
    
    <h2>Cadastro do Professor</h2>
    <label for="">Nome</label>
    <input type="text" name="nome" required>
    <label for="">Cpf</label>
    <input type="num" name="cpf" required>
    <label for="">idade</label>
    <input type="num" name="idade">
    <label for="">Data de nascimento</label>
    <input type="date" name="datanascimento">
    <label for="">Endereco</label>
    <input type="text" name="endereco">
    <select name="estatus" id="estatus">
      <option value="aprovado">aprovado</option>
      <option value="reprovado">reprovado</option>
      <option value="trancado">Trancado</option>
    </select>
    
    

    <input type="submit" name="cadastrar" value="cadastrar">
  </form>
  </div>
  <div class="imagem"></div>
</div>

  <button class="button"><a href="../sisaluno">voltar</a></button>

</body>

</html>