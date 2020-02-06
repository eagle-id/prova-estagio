<?php 

require_once "php/config.php";

if (!empty($_POST["submit"])) {

    $novoNome = mysql_escape_string(htmlspecialchars(filter_input(INPUT_POST, "novoNome")));

    $resultado = mysqli_query($link, "INSERT INTO Atores VALUES (NULL, '$novoNome')");

    if ($resultado)
        echo "$novoNome cadastrado com sucesso!<br>";
    else
        echo "Não foi possível cadastrar $novoNome.<br>";
}

?>


<form action="criar-ator.php" method="POST">
    <label for="novoNome">Digite o nome do ator: </label>
    <input id="novoNome" name="novoNome" type="text" placeholder="Fulano" require>

    <input type="submit" name="submit" value="Enviar">
</form>