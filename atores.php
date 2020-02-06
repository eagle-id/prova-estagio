<?php
    require_once "php/config.php";

    $resultado = mysqli_query($link, "SELECT * FROM Atores");

    while ($ator = mysqli_fetch_object($resultado))
        echo "Ator $ator->id: <a href='ator.php?id=$ator->id'>$ator->nome</a>   <a href='editar-ator.php?id=$ator->id'>Editar</a><br>";
?>