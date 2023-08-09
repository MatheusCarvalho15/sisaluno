<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_listaprof.css">
</head>
<body>
    

<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
    require_once "../sisaluno/conexao.php";

   
  $retorno = $conexao->prepare('SELECT * FROM professor');
  $retorno->execute();

?>       
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>IDADE</th>
                    <th>DATANASCIMENTO</th>
                    <th>ENDERECO</th>
                    <th>ESTATUS</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id'] ?>   </td> 
                            <td> <?php echo $value['nome']?>  </td> 
                            <td> <?php echo $value['cpf']?>  </td> 
                            <td> <?php echo $value['idade']?>  </td> 
                            <td> <?php echo $value['datanascimento']?> </td> 
                            <td> <?php echo $value['endereco']?> </td> 
                            <td> <?php echo $value['estatus']?> </td>

                            <td>
                               <form method="POST" action="altaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="excluir.php">
                                    <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                    <input name="nome" type="hidden" value="<?php echo $value['nome'];?>"/>
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



