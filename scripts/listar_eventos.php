<?php
// Inclua o arquivo de configuração
include 'config.php';

// Consulta SQL
$query = "SELECT id, title, color, start, end FROM events";

// Prepare a consulta usando o objeto mysqli
$resultado_eventos = $mysqli->prepare($query);

// Verifique se a preparação da consulta foi bem-sucedida
if ($resultado_eventos) {
    // Execute a consulta
    $resultado_eventos->execute();

    // Associe os resultados da consulta a variáveis
    $resultado_eventos->bind_result($id, $title, $color, $start, $end);

    // Array para armazenar os resultados
    $eventos = [];

    // Iterar sobre os resultados
    while ($resultado_eventos->fetch()) {
        // Adicione os resultados ao array de eventos
        $eventos[] = [
            'id' => $id,
            'title' => $title,
            'color' => $color,
            'start' => $start,
            'end' => $end
        ];
    }

    // Codifique os resultados em JSON e imprima
    echo json_encode($eventos);
} else {
    // Se a preparação da consulta falhar, exiba uma mensagem de erro
    echo "Erro ao preparar a consulta SQL.";
}
?>
