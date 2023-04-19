
<?php

  include("layout/topo.php");

?>

<h1>Novo Produto</h1>

<form method="post" action="salvar_produto.php">

  <div class="form-group">
    <label>Nome do produto</label>
    <input type="text" name="nome" class="form-control" placeholder="Ex: Calça jeans" />
  </div>
 
  <div class="form-group">
    <label>Preço</label>
    <input type="text" name="preco" class="form-control" placeholder="Ex: 50.89" />
  </div>

  <div class="form-group">
    <label>Quantidade</label>
    <input type="text" name="quantidade" class="form-control" placeholder="Ex: 10" />
  </div>

  <div class="form-group">
    <label>Peso em KG</label>
    <input type="text" name="peso" class="form-control" placeholder="Ex: 0.8" />
  </div>

  <button type="submit" class="btn btn-success">Cadastrar Produto</button>

</form>
    
<?php

  include("layout/baixo.php");

?>

</body>
</html>