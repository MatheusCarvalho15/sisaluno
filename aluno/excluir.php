<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_listaAluno.css">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$nome = $_GET['nome'];
?>
<div class="container">
    <h2>Voce tem certeza que deseja excluir o aluno <?php echo $nome ?>?
    </h2>
</div>
 <form method="GET" action="crudaluno.php">
 <input type="hidden"  name="id" value="<?php echo $id?>" required='required'>

 <button name="excluir"  type="submit">Excluir</button>
 </form>
 <button class="button"><a href="../aluno/listaalunos.php">voltar</a></button>

</body>
</html>

