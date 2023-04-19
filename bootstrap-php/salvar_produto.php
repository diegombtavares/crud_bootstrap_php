<?php

    //var_dump($_POST);

    include("database/database.php");

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $peso = $_POST['peso'];

    $sql = "INSERT INTO produto
        (nome, preco, quantidade, peso)
        VALUES
        ('{$nome}', {$preco}, {$quantidade}, {$peso})";

    $conn->query($sql); // Executa o insert
    $conn->close(); // Fechar conexão

    header("location: index.php");
 
?>


