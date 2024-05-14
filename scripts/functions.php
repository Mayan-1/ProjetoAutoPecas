<?php

function dadosAlterarPecas($id){
    include "config.php";
    $sql = "SELECT * FROM pecas WHERE id = '$id'";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return ($dados);
}

?>