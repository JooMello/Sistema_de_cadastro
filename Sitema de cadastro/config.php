<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'senhas';
    $dbName = 'usuarios-rocket';
    
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    if ($conexao->connect_errono)
    {
        echo "Error: ";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }
    ?>