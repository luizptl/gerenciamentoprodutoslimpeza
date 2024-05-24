<?php
include "db.php";

// Adicionar as informações do produto no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Condominio = $_POST["Condominio"];
    $dia = $_POST["dia"];
	$mesano = $_POST["mesano"];
	$Item = $_POST["Item"];
	$Justificativa= $_POST["Justificativa"];
					
    $insertDados = "INSERT INTO listadecompras2(Condominio,dia,mesano,Item,Justificativa) VALUES ('$Condominio','$dia','$mesano','$Item','$Justificativa')";
    $connection->query($insertDados);
}

$url = "solicitar.php";

header('Location: '.$url);

$connection->close();
?>
