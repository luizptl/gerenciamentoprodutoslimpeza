<?php
include "db.php";

// Atualiza os produtos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["idproduto"])){
    $idproduto = $_POST["idproduto"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $valor = $_POST["valor"];
	$imagem = $_POST["imagem"];
    $updateDados = "UPDATE produto SET nome='$nome', descricao='$descricao', valor='$valor',imagem='$imagem'  WHERE idproduto=$idproduto";
    $connection->query($updateDados);
}

$connection->close();
?>
