<?php
    require_once "php/config.php";

    $id = (int)filter_input(INPUT_GET, "id");

    if ($id) {
        $resultado = mysqli_query($link, "SELECT * FROM Atores WHERE id = $id");

        if ($resultado->num_rows > 0) {
            $ator = mysqli_fetch_object($resultado);

            echo "Ator $ator->nome<br>";
        }
        else
            echo "Ator não encontrado<br>";
    }
    else
        echo "Nenhum ator especificado.<br>";
?>