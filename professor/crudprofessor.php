<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');



##cadastrar
if(isset($_POST['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $idade = $_POST["idade"];
        $datanascimento = $_POST["datanascimento"];
        $endereco = $_POST["endereco"];
        $estatus = $_POST["estatus"];

        $erros = [];

        $nome = filter_input(INPUT_POST, 'nome',
        FILTER_SANITIZE_SPECIAL_CHARS);

    
        if(!$idade = filter_input(INPUT_POST, 'idade',
        FILTER_VALIDATE_INT)){
            $erros[] = "idade invalido";
        }
        if($idade <18){
            $erros[] = "Voce precisa ter 18 anos ou mais para realizar o cadastro";
        }
        
        $endereco = filter_input(INPUT_POST, 'endereco',
        FILTER_SANITIZE_SPECIAL_CHARS);
    
        if(!empty($erros)){
            foreach($erros as $erro){
                echo "<li>$erro</li>";
                
            }echo " <button class='button'><a href='cadprofessor.php'>voltar</a></button>";
        } else{
    

        ##codigo SQL
        $sql = "INSERT INTO professor(nome,cpf,idade,datanascimento,endereco,estatus) 
                VALUES('$nome','$cpf','$idade','$datanascimento','$endereco','$estatus')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);


        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o Professor
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='../sisaluno/'>voltar</a></button>";
            }
        }
    
}
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $idade = $_POST["idade"];
    $datanascimento = $_POST["datanascimento"];
    $endereco = $_POST["endereco"];
    $estatus = $_POST["estatus"];
    
    
   
      ##codigo sql
    $sql = "UPDATE  professor SET nome= :nome, cpf= :cpf, idade= :idade, datanascimento= :datanascimento, endereco= :endereco, estatus= :estatus WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_INT);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o Professor
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='listaalunos.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `Professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o Professor
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaprofessor.php'>voltar</a></button>";
        }

}
