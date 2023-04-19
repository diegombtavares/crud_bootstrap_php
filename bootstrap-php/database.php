<?php

    // Qual é o banco de dados? - Qual endereço do banco?
    $local = '127.0.0.1:3307';
    $user = 'root';
    $pwd = '';
    $db = 'loja';

    $conn = new mysqli($local, $user, $pwd, $db);

    if($conn->connect_error) {
        echo $conn->connect_error;
    }

?>