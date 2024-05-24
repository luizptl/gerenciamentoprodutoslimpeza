<?php
include "db.php";

// Apaga o produto do banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["idproduto"])){
    $idproduto = $_POST["idproduto"];
    $apagarDados = "DELETE FROM produto WHERE idproduto=$idproduto";
    $connection->query($apagarDados);
}

$connection->close();
?>

