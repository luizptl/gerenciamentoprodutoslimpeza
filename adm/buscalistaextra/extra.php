<?php

include('conexao.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas Individuais</title>
</head>
<body>
<li><a href="../../indexadm.php">Início</a></li>
    <h1>Lista de Compras Extras</h1>
	
	Digite as 3 primeiras letras do mês ou 3 primeiras letras do mês com 2 últimos algarismos do ano
    <form action="">
        <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa" type="text">
        <button type="submit">Pesquisar</button>
    </form>
    <br>
    <table width="600px" border="1">
        <tr>
            <th>Condominio</th>
            <th>Dia</th>
            <th> MesAno</th>
			<th> Item</th>
			<th> Justificativa</th>
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
                FROM listadecompras2
                WHERE condominio LIKE '%$pesquisa%' 
                OR mesano LIKE '%$pesquisa%'
                OR item LIKE '%$pesquisa%'";
										
								
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
                        <td><?php echo $dados['Dia']; ?></td>
                        <td><?php echo $dados['MesAno']; ?></td>
						<td><?php echo $dados['Item']; ?></td>
                        <td><?php echo $dados['Justificativa']; ?></td>
						
						
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