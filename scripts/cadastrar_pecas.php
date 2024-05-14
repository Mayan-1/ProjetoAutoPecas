<html>
<head>
    <body>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "config.php";

$nome = $_POST['nome'];
$fornecedor = $_POST['fornecedor'];
$quantidade = $_POST['quantidade'];
$valor_compra = $_POST['valor_compra'];
$valor_venda = $_POST['valor_venda'];


$sql = "INSERT INTO pecas (nome,fornecedor, quantidade, valor_compra,valor_venda) VALUES ('$nome','$fornecedor', '$quantidade', '$valor_compra','$valor_venda')";
$query = $mysqli->query($sql);

if($query){?>
    <script>
                Swal.fire({
                    title: "Sucesso!",
                    text: "Peça Cadastrada com Sucesso.",
                    icon: "success"
                    }).then(okay => {
                        if(okay){
                            window.location.href = "../templates/tela_cadastro_pecas.php";
                        }
                    });
            </script>
                
<?php }else{
    echo "<script>alert('Peça não cadastrada. Tente novamente!');</script>";
}

?>
    </body>
</html>