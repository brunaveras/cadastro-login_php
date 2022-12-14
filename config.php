<?php

    // Configuração do Banco de Dados
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_work';

    // Criando conexão com o banco de dados
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($connection->connect_error){
    //     echo("Falha na conexão: " . $conexao->connect_error);
    // } else {
    //     echo "Conexão realizada com sucesso!";
    // }

?>