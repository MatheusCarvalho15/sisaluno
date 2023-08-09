<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_listaDisciplina.css">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$nome = $_GET['nomedisciplina'];
?>
<div class="container">
    <h2>Voce tem certeza que deseja excluir a Disciplina <?php echo $nome ?>?
    </h2>
</div>
 <form method="GET" action="crudDisciplina.php">
 <input type="hidden"  name="id" value="<?php echo $id?>" required='required'>

 <button name="excluir"  type="submit">Excluir</button>
 </form>
 <button class="button"><a href="../Disciplina/listaDisciplina.php">voltar</a></button>

</body>
</html>

