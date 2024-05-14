<html>
<head>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
include "config.php";

if(isset($_POST['nome'], $_POST['fornecedor'], $_POST['quantidade'], $_POST['valor_compra'], $_POST['valor_venda'], $_POST['id'])) {
    $nome = $_POST['nome'];
    $fornecedor = $_POST['fornecedor'];
    $quantidade = $_POST['quantidade'];
    $valor_compra = $_POST['valor_compra'];
    $valor_venda = $_POST['valor_venda'];
    $id = $_POST['id'];

    $sql = "UPDATE pecas SET nome = '$nome', fornecedor = '$fornecedor', quantidade = '$quantidade', valor_compra = '$valor_compra', valor_venda = '$valor_venda' WHERE id = '$id'";
    $query = $mysqli->query($sql);

    if($query){?>
        <script>
            Swal.fire({
                title: "Sucesso!",
                text: "Peça editada com sucesso.",
                icon: "success"
            }).then(okay => {
                if(okay){
                    window.location.href = "../templates/listar_pecas.php";
                }
            });
        </script>
    <?php } else { ?>
        <script>
            Swal.fire({
                title: "Erro!",
                text: "Erro ao editar peça.",
                icon: "error"
            }).then(okay => {
                if(okay){
                    window.location.href = "../templates/listar_pecas.php";
                }
            });
        </script>
    <?php }
} else {
    echo "<script>alert('Dados inválidos');</script>";
    echo "<script>window.location='../editar_pecas.php'</script>";
}
?>
</body>
</html>