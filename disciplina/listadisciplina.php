<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_listaDisciplina.css">
</head>
<body>
    

<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
    require_once "../conexao.php";

   
  $retorno = $conexao->prepare('SELECT * FROM disciplina');
  $retorno->execute();

  // Função para obter o nome do professor a partir do ID do professor



?>       
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CH</th>
                    <th>SEMESTRE</th>
                    <th>PROFESSOR</th>
                    <th></th>
                    <th></th>
                 
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id'] ?>   </td> 
                            <td> <?php echo $value['nomedisciplina']?>  </td> 
                            <td> <?php echo $value['ch']?>  </td> 
                            <td> <?php echo $value['semestre']?> </td> 
                            <td> <?php echo $value['idprofessor'] ?></td> 
                       
                            <td>
                               <form method="POST" action="altDisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="excluir.php">
                                    <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                    <input name="nomedisciplina" type="hidden" value="<?php echo $value['nomedisciplina'];?>"/>
                                        <button name="excluir"  type="submit">Excluir</button>
                                </form>

                             </td> 
                            

                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
<?php         
   echo "<button class='button button3'><a href='../sisaluno'>voltar</a></button>";
?>
</body>
</html>



