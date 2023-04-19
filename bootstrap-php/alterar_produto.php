
<?php

  include("layout/topo.php");
  
  $id = $_GET["id"];

  $sql = "SELECT * FROM produto WHERE id=" . $id;

  include("database/database.php");

  $resultado = $conn->query($sql);
  $dados = $resultado->fetch_assoc();

  //var_dump($resultado);

?>

<h1>Alteração de Produto</h1>

<form method="post" action="salvar_alt_produto.php">

  <input type="hidden" name="id" value="<?php echo $dados['id']; ?>" >

  <div class="form-group">
    <label>Nome do produto</label>
    <input type="text" name="nome" class="form-control" placeholder="Ex: Calça jeans" value="<?php echo $dados['nome']; ?>" >
  </div>
 
  <div class="form-group">
    <label>Preço</label>
    <input type="text" name="preco" class="form-control" placeholder="Ex: 50.89" value="<?php echo $dados['preco']; ?>" />
  </div>

  <div class="form-group">
    <label>Quantidade</label>
    <input type="text" name="quantidade" class="form-control" placeholder="Ex: 10" value="<?php echo $dados['quantidade']; ?>" />
  </div>

  <div class="form-group">
    <label>Peso em KG</label>
    <input type="text" name="peso" class="form-control" placeholder="Ex: 0.8" value="<?php echo $dados['peso']; ?>" />
  </div>

  <button type="submit" class="btn btn-success">Cadastrar Produto</button>

</form>
    
<?php

  include("layout/baixo.php");

?>

</body>
</html>