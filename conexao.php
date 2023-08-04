<?php

define('HOST', '10.70.230.53:3306 ');
define('DBNAME', 'sisaluno');
define('USER', 'sisaluno');
define('SENHA', 'sisaluno2023');



try {

    $conexao = new pdo('mysql:host=' . HOST . ';dbname=' .
        DBNAME, USER, SENHA);
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso.
     Erro gerado " . $e->getMessage();
}
