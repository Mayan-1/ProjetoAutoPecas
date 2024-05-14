<!DOCTYPE html>
<html lang="pt-br">

<?php include "head.php"; ?>

<body class="">
    <div class="wrapper ">
        <div class="main-panel">
            <?php include "nav_superior.php"; ?>

            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <!-- <div class="card-header ">
                                <h5 class="card-title">Listagem de Peças</h5>
                            </div> -->
                            <div class="card-body ">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Fornecedor</th>
                                            <th>Quantidade</th>
                                            <th>Valor de Compra</th>
                                            <th>Valor de Venda</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                            include "../scripts/config.php";
                                            $sql = "SELECT * FROM pecas";
                                            $query  = $mysqli->query($sql);
                                            // $dados = $query->fetch_array();
                                            while($dados = $query->fetch_array()){
                                            ?>
                                        <tr> 
                                            <td><?php echo $dados['id']; ?></td>
                                            <td><?php echo $dados['nome']; ?></td>
                                            <td><?php echo $dados['fornecedor']; ?></td>
                                            <td><?php echo $dados['quantidade']; ?></td>
                                            <td><?php echo $dados['valor_compra']; ?></td>
                                            <td><?php echo $dados['valor_venda']; ?></td>
                                            <td><a href="editar_pecas.php?id=<?php echo $dados['id']; ?> "><i class="fa-regular fa-pen-to-square"></i></a> |
                                            <a href="../scripts/deletar_peca.php?id=<?php echo $dados['id']; $dados['quantidade']; ?>"><i class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Fornecedor</th>
                                            <th>Quantidade</th>
                                            <th>Valor de Compra</th>
                                            <th>Valor de Venda</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </tfoot>
                                </table>
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