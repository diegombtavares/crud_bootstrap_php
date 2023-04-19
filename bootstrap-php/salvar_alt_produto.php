<?php

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $peso = $_POST['peso'];
    

    $sql = "UPDATE produto SET nome ='{$nome}', quantidade = {$quantidade}, preco = {$preco}, peso = {$peso} WHERE id={$id} ";

    include("database/database.php");
    $conn->query($sql);

    header("location: index.php");

?>
