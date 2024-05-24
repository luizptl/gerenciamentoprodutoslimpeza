<?php

include('conexao.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>
<li><a href="../../indexadm.php">Início</a></li>
    <h1>Historico de Estoque</h1>
	  
		<ul>Para um determinado Condomínio digitar: Nome do Condomínio </ul>
	
	
    <form action="">
        <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa" type="text">
        <button type="submit">Pesquisar</button>
    </form>
    <br>
    <table width="600px" border="1">
        <tr>
            <th>Condomínio</th>
            <th>Periodo</th>
			<th>AlcoolLiquido</th>
			<th>AguaSanitaria</th>
			<th>Detergente500ML </th>
			<th>SabaoEmPo</th>
			<th>Desinfetante5L </th>
			<th>Desinfetante10L </th>
			<th>Desinfetante15L</th>
			<th>Removedor</th>
			<th>LimpaVidros</th>
			<th>LimpaInox</th>
			<th>LimpadorMultiuso</th>
			<th>PedraSanitaria</th>
			<th>PapelHigienico</th>
			<th>LustraMoveis</th>
			<th>LuvasdeBorrachaP</th>
			<th>LuvasdeBorrachaM</th>
			<th>LuvasdeBorrachaG</th>
			<th>SacodeLixo20L</th>
			<th>SacodeLixo40L</th>
			<th>SacodeLixo60L</th>
			<th>SacodeLixo100L</th>
			<th>PanodeChao</th>
			<th>Flanela</th>
			<th>VassouraPiacava</th>
			<th>VassouraCerdasMacia</th>
			<th>VasouraMOP</th>
			<th>Rodo</th>
			<th>PaColetora</th>
			<th>Esponja</th>
			<th>Balde10L</th>
			<th>Aromatizante</th>
			
			
        </tr>
        <?php
        if (!isset($_GET['busca'])) {
            ?>
        <tr>
            <td colspan="3">Digite algo para pesquisar...</td>
        </tr>
        <?php
        } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * 
                FROM estoque
                WHERE Condominio LIKE '%$pesquisa%' 
                or mesano LIKE '%$pesquisa%'";
            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
            
            if ($sql_query->num_rows == 0) {
                ?>
            <tr>
                <td colspan="3">Nenhum resultado encontrado...</td>
            </tr>
            <?php
            } else {
                while($dados = $sql_query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $dados['Condominio']; ?></td>
						<td><?php echo $dados['mesano']; ?></td>
                        <td><?php echo $dados['AlcoolLiquido']; ?></td>
                        <td><?php echo $dados['AguaSanitaria']; ?></td>
						<td><?php echo $dados['Detergente500ML']; ?></td>										
						<td><?php echo $dados['SabaoEmPo']; ?></td>
						<td><?php echo $dados['Desinfetante5L']; ?></td>
						<td><?php echo $dados['Desinfetante10L']; ?></td>
						<td><?php echo $dados['Desinfetante15L']; ?></td>
						<td><?php echo $dados['Removedor']; ?></td>
						<td><?php echo $dados['LimpaVidros']; ?></td>
						<td><?php echo $dados['LimpaInox']; ?></td>
						<td><?php echo $dados['LimpadorMultiuso']; ?></td>
						<td><?php echo $dados['PedraSanitaria']; ?></td>
						<td><?php echo $dados['PapelHigienico']; ?></td>
						<td><?php echo $dados['LustraMoveis']; ?></td>
						<td><?php echo $dados['LuvasdeBorrachaP']; ?></td>
						<td><?php echo $dados['LuvasdeBorrachaM']; ?></td>
						<td><?php echo $dados['LuvasdeBorrachaG']; ?></td>
						<td><?php echo $dados['SacodeLixo20L']; ?></td>
						<td><?php echo $dados['SacodeLixo40L']; ?></td>
						<td><?php echo $dados['SacodeLixo60L']; ?></td>
						<td><?php echo $dados['SacodeLixo100L']; ?></td>
						<td><?php echo $dados['PanodeChao']; ?></td>
						<td><?php echo $dados['Flanela']; ?></td>
						<td><?php echo $dados['VassouraPiacava']; ?></td>
						<td><?php echo $dados['VassouraCerdasMacia']; ?></td>
						<td><?php echo $dados['VasouraMOP']; ?></td>
						<td><?php echo $dados['Rodo']; ?></td>
						<td><?php echo $dados['PaColetora']; ?></td>
						<td><?php echo $dados['Esponja']; ?></td>
						<td><?php echo $dados['Balde10L']; ?></td>
						<td><?php echo $dados['Aromatizante']; ?></td>
						</tr>
                    <?php
                }
            }
            ?>
        <?php
        } ?>
    </table>
</body>
</html>