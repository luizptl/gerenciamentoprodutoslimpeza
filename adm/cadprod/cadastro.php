<?php
include "db.php";

// Adicionar as informações do produto no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $valor = $_POST["valor"];
	$imagem = $_POST["imagem"];
    $insertDados = "INSERT INTO produto(nome, descricao, valor, imagem) VALUES ('$nome', '$descricao', '$valor', '$imagem')";
    $connection->query($insertDados);
}

$url = "cadprod.php";

header('Location: '.$url);

$connection->close();
?>
