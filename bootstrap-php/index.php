
<?php 

    include("layout/topo.php");
    include("database/database.php");
    //requered("database/database.php");

    $sql = "SELECT * FROM produto";

    $result = $conn->query($sql);
  
?>

<h1>Cadastro de Produtos</h1>

<a href="novo_produto.php" class="btn btn-dark">Novo produto</a><br><br>

<table class="table table-dark table-striped">

    <thead>
        <td>Id</td>
        <td>Nome</td>
        <td>Preço</td>
        <td>Quantidade</td>
        <td>Peso</td>
        <td></td>
    </thead>

    <tbody>

        <?php

            while($row = $result->fetch_assoc()) {

                echo
                "<tr>
                    <td>". $row['id'] ."</td>
                    <td>". $row['nome'] ."</td>
                    <td>". $row['preco'] ."</td>
                    <td>". $row['quantidade'] ."</td>
                    <td>". $row['peso'] ."</td> 
                    <td>
                       <a href='/aula08/alterar_produto.php?id=" . $row['id'] . "'> ✏️ </a>
                        🗑️
                    </td>
                </tr>";  

            }

        ?>

    </tbody>

</table>

<?php

    $conn->close();
    include("layout/baixo.php");

?>
