<?php
    $domain = "localhost";
    $user = ""; //Adicione o ususario
    $password = ""; //Adicione a senha do usuario do banco
    $database = ""; //Adicione o banco

    $mysqli = new mysqli ($domain, $user, $password, $database);

    if ($mysqli->connect_errno) {
        echo "Não foi possível conectar com o banco de dados ";
        echo $mysqli->connect_error;
    }

?>