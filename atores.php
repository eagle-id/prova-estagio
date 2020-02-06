<?php
    require_once "php/config.php";

    $resultado = mysqli_query($link, "SELECT * FROM Atores");

    while ($ator = mysqli_fetch_object($resultado))
        echo "Ator $ator->id: $ator->nome<br>";
?>