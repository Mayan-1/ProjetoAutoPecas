<!DOCTYPE html>
<html lang="pt-br">

<?php include "head.php";?>

<body class="">
  <div class="wrapper ">
    <?php// include "menu.php"; ?>
    <div class="main-panel">
     
    <?php include "adress.php";?>
    <?php include "nav_superior.php"; ?>

      <div class="content">
        <!--cards-->
        <div class="row">
          <div class="col-md-12">
          <!-- <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Cadastro de Peças</h5>
                <p class="card-category">Preencha os campos</p>
              </div> -->
              <div class="card-body ">
                <form class="row g-3" method="post" action="../scripts/cadastrar_pecas.php">
                  <div class="col-md-6">
                    <label for="inputNome" class="form-label">Nome</label>
                    <input type="text" name="nome" required class="form-control" id="nome">
                  </div>
                  <div class="col-md-6">
                    <label for="inputFornecedor"  class="form-label">Fornecedor</label>
                    <input type="text" name="fornecedor" required class="form-control" id="fornecedor">
                  </div>
                  <div class="col-md-6">
                    <label for="inputFornecedor"  class="form-label">Quantidade</label>
                    <input type="number" name="quantidade" required class="form-control" id="quantidade">
                  </div>
                  <div class="col-4">
                    <label for="inputValorCompra"  class="form-label">Valor de Compra</label>
                    <input type="number" name="valor_compra" required id="valor_compra" class="form-control">
                  </div>
                  <div class="col-8">
                    <label for="inputValorVenda" class="form-label">Valor de Venda</label>
                    <input type="number" class="form-control"  name="valor_venda"  id="valor_venda">
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
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
  <?php// include "js.php"; ?>

</body>

</html>