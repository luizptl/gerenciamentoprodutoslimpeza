<?php
include_once "conexao.php";
$pesquisa = $mysqli->real_escape_string($_GET['busca']);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
        <title>Lista de Compras Geral Mensal</title>
		<head>
    
		
		
		
    </head>
    <body>
	<li><a href="../../indexadm.php">Início</a></li>
	   <ul>Para valores exatos em um determinado período digitar: 3 primeiras letras do mês e/ou 2 últimos números do ano </ul>

	
    <form action="">
        <input name="busca"  placeholder="Digite os termos de pesquisa" type="text">
        <button type="submit">Pesquisar</button>
 
     <br> <br>Lista de Compras para <?php echo $pesquisa; ?> </br></br>
	  
		
            <table>
            <tr>
			
            <th>Produto</th>
			<th>Quantidade</th>
        
            </tr>
           	
			
		<tr>
        <td>Aromatizante</td>
        <td>  
		<?php        
        $pesquisa = $mysqli->real_escape_string($_GET['busca']);
		$query_Aromatizante = "SELECT SUM(Aromatizante) AS qnt_Aromatizante FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_Aromatizante = $conn->prepare($query_Aromatizante);
        $result_Aromatizante->execute();
        $row_Aromatizante = $result_Aromatizante->fetch(PDO::FETCH_ASSOC);
        echo  $row_Aromatizante['qnt_Aromatizante'];
        ?> 
		</td> </tr>	
		
		<tr>
        <td>Álcool Líquido</td>
        <td>  
		<?php        
        $query_AlcoolLiquido = "SELECT SUM(AlcoolLiquido) AS qnt_AlcoolLiquido FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_AlcoolLiquido = $conn->prepare($query_AlcoolLiquido);
        $result_AlcoolLiquido->execute();
        $row_AlcoolLiquido = $result_AlcoolLiquido->fetch(PDO::FETCH_ASSOC);
        echo   $row_AlcoolLiquido['qnt_AlcoolLiquido'] . "<br>";
        ?> 
		</td> </tr>	
		
		<tr>
        <td>Água Sanitária</td>
        <td>  
		<?php        
        $query_AguaSanitaria = "SELECT SUM(AguaSanitaria) AS qnt_AguaSanitaria FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_AguaSanitaria = $conn->prepare($query_AguaSanitaria);
        $result_AguaSanitaria->execute();
        $row_AguaSanitaria = $result_AguaSanitaria->fetch(PDO::FETCH_ASSOC);
        echo $row_AguaSanitaria['qnt_AguaSanitaria'] . "<br>";
        ?>  
		</td></tr>

        <tr>
        <td>Detergente 500ML</td>
        <td> 
		<?php        
        $query_Detergente500ML = "SELECT SUM(Detergente500ML) AS qnt_Detergente500ML FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_Detergente500ML = $conn->prepare($query_Detergente500ML);
        $result_Detergente500ML->execute();
        $row_Detergente500ML = $result_Detergente500ML->fetch(PDO::FETCH_ASSOC);
        echo $row_Detergente500ML['qnt_Detergente500ML'] . "<br>";
        ?>  
		</td></tr>


        <tr>
        <td>Sabão em Pó</td>
        <td> 
		<?php        
        $query_SabaoEmPo = "SELECT SUM(SabaoEmPo) AS qnt_SabaoEmPo FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_SabaoEmPo = $conn->prepare($query_SabaoEmPo);
        $result_SabaoEmPo->execute();
        $row_SabaoEmPo = $result_SabaoEmPo->fetch(PDO::FETCH_ASSOC);
        echo $row_SabaoEmPo['qnt_SabaoEmPo'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Desinfetante 5L</td>
        <td> 
		<?php        
        $query_Desinfetante5L = "SELECT SUM(Desinfetante5L) AS qnt_Desinfetante5L FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_Desinfetante5L = $conn->prepare($query_Desinfetante5L);
        $result_Desinfetante5L->execute();
        $row_Desinfetante5L = $result_Desinfetante5L->fetch(PDO::FETCH_ASSOC);
        echo $row_Desinfetante5L['qnt_Desinfetante5L'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Desinfetante 10L</td>
        <td> 
		<?php        
        $query_Desinfetante10L = "SELECT SUM(Desinfetante10L) AS qnt_Desinfetante10L FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_Desinfetante10L = $conn->prepare($query_Desinfetante10L);
        $result_Desinfetante10L->execute();
        $row_Desinfetante10L = $result_Desinfetante10L->fetch(PDO::FETCH_ASSOC);
        echo $row_Desinfetante10L['qnt_Desinfetante10L'] . "<br>";
        ?>
		</td></tr>
		

        <tr>
        <td>Desinfetante 15L</td>
        <td> 
		<?php        
        $query_Desinfetante15L = "SELECT SUM(Desinfetante15L) AS qnt_Desinfetante15L FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_Desinfetante15L = $conn->prepare($query_Desinfetante15L);
        $result_Desinfetante15L->execute();
        $row_Desinfetante15L = $result_Desinfetante15L->fetch(PDO::FETCH_ASSOC);
        echo $row_Desinfetante15L['qnt_Desinfetante15L'] . "<br>";
        ?>
		</td></tr>
		
		<tr>
        <td>Removedor</td>
        <td> 
		<?php        
        $query_Removedor = "SELECT SUM(Removedor) AS qnt_Removedor FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_Removedor = $conn->prepare($query_Removedor);
        $result_Removedor->execute();
        $row_Removedor = $result_Removedor->fetch(PDO::FETCH_ASSOC);
        echo $row_Removedor['qnt_Removedor'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Limpa Vidros</td>
        <td> 
		<?php        
        $query_LimpaVidros = "SELECT SUM(LimpaVidros) AS qnt_LimpaVidros FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_LimpaVidros = $conn->prepare($query_LimpaVidros);
        $result_LimpaVidros->execute();
        $row_LimpaVidros = $result_LimpaVidros->fetch(PDO::FETCH_ASSOC);
        echo $row_LimpaVidros['qnt_LimpaVidros'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Limpa Inox</td>
        <td> 
		<?php        
        $query_LimpaInox = "SELECT SUM(LimpaInox) AS qnt_LimpaInox FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_LimpaInox = $conn->prepare($query_LimpaInox);
        $result_LimpaInox->execute();
        $row_LimpaInox = $result_LimpaInox->fetch(PDO::FETCH_ASSOC);
        echo $row_LimpaInox['qnt_LimpaInox'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Limpador Multiuso</td>
        <td> 
		<?php        
        $query_LimpadorMultiuso = "SELECT SUM(LimpadorMultiuso) AS qnt_LimpadorMultiuso FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_LimpadorMultiuso = $conn->prepare($query_LimpadorMultiuso);
        $result_LimpadorMultiuso->execute();
        $row_LimpadorMultiuso = $result_LimpadorMultiuso->fetch(PDO::FETCH_ASSOC);
        echo $row_LimpadorMultiuso['qnt_LimpadorMultiuso'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Pedra Sanitária</td>
        <td> 
		<?php        
        $query_PedraSanitaria = "SELECT SUM(PedraSanitaria) AS qnt_PedraSanitaria FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_PedraSanitaria = $conn->prepare($query_PedraSanitaria);
        $result_PedraSanitaria->execute();
        $row_PedraSanitaria = $result_PedraSanitaria->fetch(PDO::FETCH_ASSOC);
        echo $row_PedraSanitaria['qnt_PedraSanitaria'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Papel Higiênico</td>
        <td> 
		<?php        
        $query_PapelHigienico = "SELECT SUM(PapelHigienico) AS qnt_PapelHigienico FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_PapelHigienico = $conn->prepare($query_PapelHigienico);
        $result_PapelHigienico->execute();
        $row_PapelHigienico = $result_PapelHigienico->fetch(PDO::FETCH_ASSOC);
        echo $row_PapelHigienico['qnt_PapelHigienico'] . "<br>";
        ?>
		</td></tr>
		
		<tr>
        <td>Lustra Móveis</td>
        <td> 
		<?php        
        $query_LustraMoveis = "SELECT SUM(LustraMoveis) AS qnt_LustraMoveis FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_LustraMoveis = $conn->prepare($query_LustraMoveis);
        $result_LustraMoveis->execute();
        $row_LustraMoveis = $result_LustraMoveis->fetch(PDO::FETCH_ASSOC);
        echo $row_LustraMoveis['qnt_LustraMoveis'] . "<br>";
        ?>
		</td></tr>
		
		<tr>
        <td>Luvas de Borracha P</td>
        <td> 
		<?php        
        $query_LuvasdeBorrachaP = "SELECT SUM(LuvasdeBorrachaP) AS qnt_LuvasdeBorrachaP FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_LuvasdeBorrachaP = $conn->prepare($query_LuvasdeBorrachaP);
        $result_LuvasdeBorrachaP->execute();
        $row_LuvasdeBorrachaP = $result_LuvasdeBorrachaP->fetch(PDO::FETCH_ASSOC);
        echo $row_LuvasdeBorrachaP['qnt_LuvasdeBorrachaP'] . "<br>";
        ?>
		</td></tr>
		
		<tr>
        <td>Luvas de Borracha M</td>
        <td> 
		<?php        
        $query_LuvasdeBorrachaM = "SELECT SUM(LuvasdeBorrachaM) AS qnt_LuvasdeBorrachaM FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_LuvasdeBorrachaM = $conn->prepare($query_LuvasdeBorrachaM);
        $result_LuvasdeBorrachaM->execute();
        $row_LuvasdeBorrachaM= $result_LuvasdeBorrachaM->fetch(PDO::FETCH_ASSOC);
        echo $row_LuvasdeBorrachaM['qnt_LuvasdeBorrachaM'] . "<br>";
        ?>
		</td></tr>
		
		<tr>
        <td>Luvas de Borracha G</td>
        <td> 
		<?php        
        $query_LuvasdeBorrachaG = "SELECT SUM(LuvasdeBorrachaG) AS qnt_LuvasdeBorrachaG FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_LuvasdeBorrachaG = $conn->prepare($query_LuvasdeBorrachaG);
        $result_LuvasdeBorrachaG->execute();
        $row_LuvasdeBorrachaG = $result_LuvasdeBorrachaG->fetch(PDO::FETCH_ASSOC);
        echo $row_LuvasdeBorrachaG['qnt_LuvasdeBorrachaG'] . "<br>";
        ?>
		</td></tr>
		
		<tr>
        <td>Saco de Lixo 20L</td>
        <td> 
		<?php        
        $query_SacodeLixo20L = "SELECT SUM(SacodeLixo20L) AS qnt_SacodeLixo20L FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_SacodeLixo20L = $conn->prepare($query_SacodeLixo20L);
        $result_SacodeLixo20L->execute();
        $row_SacodeLixo20L = $result_SacodeLixo20L->fetch(PDO::FETCH_ASSOC);
        echo $row_SacodeLixo20L['qnt_SacodeLixo20L'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Saco de Lixo 40L</td>
        <td> 
		<?php        
        $query_SacodeLixo40L = "SELECT SUM(SacodeLixo40L) AS qnt_SacodeLixo40L FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_SacodeLixo40L= $conn->prepare($query_SacodeLixo40L);
        $result_SacodeLixo40L->execute();
        $row_SacodeLixo40L = $result_SacodeLixo40L->fetch(PDO::FETCH_ASSOC);
        echo $row_SacodeLixo40L['qnt_SacodeLixo40L'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Saco de Lixo 60L</td>
        <td> 
		<?php        
        $query_SacodeLixo60L = "SELECT SUM(SacodeLixo60L) AS qnt_SacodeLixo60L FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_SacodeLixo60L = $conn->prepare($query_SacodeLixo60L);
        $result_SacodeLixo60L->execute();
        $row_SacodeLixo60L = $result_SacodeLixo60L->fetch(PDO::FETCH_ASSOC);
        echo $row_SacodeLixo60L['qnt_SacodeLixo60L'] . "<br>";
        ?>
		</td></tr>
		
		<tr>
        <td>Saco de Lixo 100L</td>
        <td> 
		<?php        
        $query_SacodeLixo100L = "SELECT SUM(SacodeLixo100L) AS qnt_SacodeLixo100L FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_SacodeLixo100L = $conn->prepare($query_SacodeLixo100L);
        $result_SacodeLixo100L->execute();
        $row_SacodeLixo100L = $result_SacodeLixo100L->fetch(PDO::FETCH_ASSOC);
        echo $row_SacodeLixo100L['qnt_SacodeLixo100L'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Pano de Chão</td>
        <td> 
		<?php        
        $query_PanodeChao = "SELECT SUM(PanodeChao) AS qnt_PanodeChao FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_PanodeChao = $conn->prepare($query_PanodeChao);
        $result_PanodeChao->execute();
        $row_PanodeChao = $result_PanodeChao->fetch(PDO::FETCH_ASSOC);
        echo $row_PanodeChao['qnt_PanodeChao'] . "<br>";
        ?>
		</td></tr>
		
		<tr>
        <td>Flanela</td>
        <td> 
		<?php        
        $query_Flanela = "SELECT SUM(Flanela) AS qnt_Flanela FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_Flanela = $conn->prepare($query_Flanela);
        $result_Flanela->execute();
        $row_Flanela = $result_Flanela->fetch(PDO::FETCH_ASSOC);
        echo $row_Flanela['qnt_Flanela'] . "<br>";
        ?>
		</td></tr>
		
		<tr>
        <td>Vassoura de Piaçava</td>
        <td> 
		<?php        
        $query_VassouraPiacava = "SELECT SUM(VassouraPiacava) AS qnt_VassouraPiacava FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_VassouraPiacava = $conn->prepare($query_VassouraPiacava);
        $result_VassouraPiacava->execute();
        $row_VassouraPiacava = $result_VassouraPiacava->fetch(PDO::FETCH_ASSOC);
        echo $row_VassouraPiacava['qnt_VassouraPiacava'] . "<br>";
        ?>
		</td></tr>
		
		<tr>
        <td>Vassoura de Cerdas Macia</td>
        <td> 
		<?php        
        $query_VassouraCerdasMacia = "SELECT SUM(VassouraCerdasMacia) AS qnt_VassouraCerdasMacia FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_VassouraCerdasMacia = $conn->prepare($query_VassouraCerdasMacia);
        $result_VassouraCerdasMacia->execute();
        $row_VassouraCerdasMacia = $result_VassouraCerdasMacia->fetch(PDO::FETCH_ASSOC);
        echo $row_VassouraCerdasMacia['qnt_VassouraCerdasMacia'] . "<br>";
        ?>
		</td></tr>
		
		
		
		<tr>
        <td>Vassoura MOP</td>
        <td> 
		<?php        
        $query_VasouraMOP = "SELECT SUM(VasouraMOP) AS qnt_VasouraMOP FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_VasouraMOP = $conn->prepare($query_VasouraMOP);
        $result_VasouraMOP->execute();
        $row_VasouraMOP = $result_VasouraMOP->fetch(PDO::FETCH_ASSOC);
        echo $row_VasouraMOP['qnt_VasouraMOP'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Rodo</td>
        <td> 
		<?php        
        $query_Rodo = "SELECT SUM(Rodo) AS qnt_Rodo FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_Rodo = $conn->prepare($query_Rodo);
        $result_Rodo->execute();
        $row_Rodo = $result_Rodo->fetch(PDO::FETCH_ASSOC);
        echo $row_Rodo['qnt_Rodo'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Pá Coletora</td>
        <td> 
		<?php        
        $query_PaColetora = "SELECT SUM(PaColetora) AS qnt_PaColetora FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_PaColetora = $conn->prepare($query_PaColetora);
        $result_PaColetora->execute();
        $row_PaColetora = $result_PaColetora->fetch(PDO::FETCH_ASSOC);
        echo $row_PaColetora['qnt_PaColetora'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Esponja</td>
        <td> 
		<?php        
        $query_Esponja = "SELECT SUM(Esponja) AS qnt_Esponja FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_Esponja = $conn->prepare($query_Esponja);
        $result_Esponja->execute();
        $row_Esponja = $result_Esponja->fetch(PDO::FETCH_ASSOC);
        echo $row_Esponja['qnt_Esponja'] . "<br>";
        ?>
		</td></tr>
		
		
		<tr>
        <td>Balde 10L</td>
        <td> 
		<?php        
        $query_Balde10L = "SELECT SUM(Balde10L) AS qnt_Balde10L FROM listadecompras WHERE mesano LIKE '$pesquisa'";
        $result_Balde10L = $conn->prepare($query_Balde10L );
        $result_Balde10L->execute();
        $row_Balde10L  = $result_Balde10L->fetch(PDO::FETCH_ASSOC);
        echo $row_Balde10L['qnt_Balde10L'] . "<br>";
        ?>
		</td></tr>
		
		
		</table>
		
		
		
		
	</body>
</html>
