<!DOCTYPE html>
<html lang="pt-br">

<?php 
  include "head.php"; 
  $dados_pecas = dadosAlterarPecas($_GET['id']);
?>

<body class="">
  <div class="wrapper ">
    <div class="main-panel">

      <?php include "nav_superior.php"; ?>

      <div class="content">

      <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Edição - Cadastro de Peças</h5>
              </div>
              <div class="card-body ">
                <form class="row g-3" method="post" action="../scripts/salvar_edicao.php">
                  <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                  <div class="col-md-6">
                    <label for="inputNome" class="form-label">Nome</label>
                    <input type="text" name="nome" required class="form-control" id="inputNome" value="<?php echo $dados_pecas['nome']; ?>">
                  </div>
                  <div class="col-md-6">
                    <label for="inputFornecedor"  class="form-label">Fornecedor</label>
                    <input type="text" name="fornecedor" required class="form-control" id="inputFornecedor" value="<?php echo $dados_pecas['fornecedor']; ?>">
                  </div>
                  <div class="col-4">
                    <label for="inputQuantidade"  class="form-label">Quantidade</label>
                    <input type="text" name="quantidade" required id="quantidade" class="form-control" value="<?php echo $dados_pecas['quantidade']; ?>">
                  </div>
                  <div class="col-8">
                    <label for="inputValorCompra" class="form-label">Valor de Compra</label>
                    <input type="text" class="form-control"  name="valor_compra"  id="rua" value="<?php echo $dados_pecas['valor_compra'];?>">
                  </div>
                  <div class="col-md-4">
                    <label for="inputValorVenda" class="form-label">Valor de Venda</label>
                    <input type="text" name="valor_venda" id="valor_venda" class="form-control" value="<?php echo $dados_pecas['valor_venda'];?>">
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Editar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include "footer.php"; ?>
    </div>
  </div>
  <?php include "js.php"; ?>

</body>

</html>