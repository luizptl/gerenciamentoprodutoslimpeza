<?php
include "db.php";

// Adicionar as informações do produto no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Condominio = $_POST["Condominio"];
    $mesano = $_POST["mesano"];
	$AlcoolLiquido = $_POST["AlcoolLiquido"];//1//
	$AguaSanitaria = $_POST["AguaSanitaria"];//2//
	$Detergente500ML = $_POST["Detergente500ML"];//3//
	$SabaoEmPo = $_POST["SabaoEmPo"];//4//
	$Desinfetante5L = $_POST["Desinfetante5L"];
    $Desinfetante10L = $_POST["Desinfetante10L"];
	$Desinfetante15L = $_POST["Desinfetante15L"];
	$Removedor = $_POST["Removedor"];
	$LimpaVidros = $_POST["LimpaVidros"];
	$LimpaInox = $_POST["LimpaInox"];
	$LimpadorMultiuso = $_POST["LimpadorMultiuso"];
	$PedraSanitaria = $_POST["PedraSanitaria"];
	$PapelHigienico = $_POST["PapelHigienico"];
   	$LustraMoveis = $_POST["LustraMoveis"]; 
	$LuvasdeBorrachaP = $_POST["LuvasdeBorrachaP"]; 
	$LuvasdeBorrachaM = $_POST["LuvasdeBorrachaM"]; 
	$LuvasdeBorrachaG = $_POST["LuvasdeBorrachaG"]; 
	$SacodeLixo20L = $_POST["SacodeLixo20L"];
	$SacodeLixo40L = $_POST["SacodeLixo40L"];
	$SacodeLixo60L = $_POST["SacodeLixo60L"];
	$SacodeLixo100L = $_POST["SacodeLixo100L"];
    $PanodeChao = $_POST["PanodeChao"];
	$Flanela = $_POST["Flanela"];
	$VassouraPiacava = $_POST["VassouraPiacava"];
    $VassouraCerdasMacia = $_POST["VassouraCerdasMacia"];
    $VasouraMOP = $_POST["VasouraMOP"];
	$Rodo = $_POST["Rodo"];
	$PaColetora = $_POST["PaColetora"];
    $Esponja = $_POST["Esponja"];
	$Balde10L = $_POST["Balde10L"];
	$Aromatizante = $_POST["Aromatizante"];



	
    $insertDados = "INSERT INTO estoque(Condominio,mesano,AlcoolLiquido,AguaSanitaria,Detergente500ML,SabaoEmPo,Desinfetante5L,Desinfetante10L,Desinfetante15L,Removedor,LimpaVidros,LimpaInox,LimpadorMultiuso,PedraSanitaria,PapelHigienico,LustraMoveis,LuvasdeBorrachaP,LuvasdeBorrachaM,LuvasdeBorrachaG,SacodeLixo20L,SacodeLixo40L,SacodeLixo60L,SacodeLixo100L,PanodeChao,Flanela,VassouraPiacava,VassouraCerdasMacia,VasouraMOP,Rodo,PaColetora,Esponja,Balde10L,Aromatizante) VALUES ('$Condominio','$mesano','$AlcoolLiquido','$AguaSanitaria','$Detergente500ML','$SabaoEmPo','$Desinfetante5L','$Desinfetante10L','$Desinfetante15L','$Removedor','$LimpaVidros','$LimpaInox','$LimpadorMultiuso','$PedraSanitaria','$PapelHigienico','$LustraMoveis','$LuvasdeBorrachaP','$LuvasdeBorrachaM','$LuvasdeBorrachaG','$SacodeLixo20L','$SacodeLixo40L','$SacodeLixo60L','$SacodeLixo100L','$PanodeChao','$Flanela','$VassouraPiacava','$VassouraCerdasMacia','$VasouraMOP','$Rodo','$PaColetora','$Esponja','$Balde10L','$Aromatizante')";
  
	
    $connection->query($insertDados);
}

$url = "estoque.php";

header('Location: '.$url);

$connection->close();
?>
