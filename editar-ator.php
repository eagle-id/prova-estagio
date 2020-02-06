<?php 

require_once "php/config.php";

$id = (int)filter_input(INPUT_GET, "id");

if (!$id) {
    echo "Nenhum ator especificado";
    die();
}

$resultado = mysqli_query($link, "SELECT * FROM Atores WHERE id = $id");
if ($resultado->num_rows === 0) {
    echo "Ator inexistente";
    die();
}

$ator = mysqli_fetch_object($resultado);

if (!empty($_POST["submit"])) {
    $novoNome = mysql_escape_string(htmlspecialchars(filter_input(INPUT_POST, "novoNome")));

    $resultado = mysqli_query($link, "UPDATE Atores SET nome = '$novoNome' WHERE id = $id");

    if ($resultado)
        echo "$novoNome editado com sucesso!<br>";
    else
        echo "Não foi possível editar os dados de $ator->nome.<br>";
}

?>


<form action="editar-ator.php?id=<?php echo $id ?>" method="POST">
    <input type="number" name="id" id="id" hidden value="<?php echo $id; ?>">
    <label for="novoNome">Digite o nome do ator: </label>
    <input id="novoNome" name="novoNome" type="text" value="<?php echo $ator->nome ?>" placeholder="Fulano" require>

    <input type="submit" name="submit" value="Enviar">
</form>