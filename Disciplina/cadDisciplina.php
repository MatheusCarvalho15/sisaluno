<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_Disciplina.css">
    <title>Document</title>
</head>


<body>



    <div class="container">
        <div class="formulario">




            <form method="GET" action="crudDisciplina.php">
                <h2>Cadastro da Disciplina</h2>


                <label for="">Nome da disciplina</label>
                <input type="text" name="nomedisciplina" required="">
                <label for="">Ch</label>
                <input type="num" name="ch" required="">
                <label for="">Semestre</label>
                <select name="semestre" id="semestre" required="">
                    <option value=""></option>
                    <option value="1º">1ºSemestre</option>
                    <option value="2º">2ºSemestre</option>
                </select>

                <label for="idProfessor">Professor:</label>

                <select name="codProfessor" class="acesso-professores">
                    <option> Selecione o Professor</option>
                    <?php
                
                        require_once "../sisaluno/conexao.php";

                        // Query SQL para buscar os nomes e códigos dos professores no banco de dados
                        $sql = "SELECT id, nome FROM professor";

                        // Prepara a consulta
                        $stmt = $conexao->prepare($sql);

                        // Executa a consulta
                        $stmt->execute();

                        // Obtém os resultados e preenche as opções do select com os nomes dos professores
                        $professores = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        if (count($professores) > 0) {
                            foreach ($professores as $row) {
                                echo '<option value="' . $row["id"] . '">' . $row["nome"] . '</option>';
                            }
                        } else {
                            echo '<option value="">Nenhum Professor encontrado</option>';
                        }
                    
                    ?>
                </select>
            <input type="submit" name="cadastrar" value="Cadastrar" id="cadastrar">
        </div>
        </form>

        </section>
        <button class="button"><a href="../sisaluno/index.php">Voltar</a></button>


    </div>
    </div>





</body>


</html>