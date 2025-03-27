<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'PostGreen2k22.';
    $dbName = 'new_form';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>