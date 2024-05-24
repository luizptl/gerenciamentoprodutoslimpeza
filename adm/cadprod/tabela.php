<?php
include "db.php";

// Exibi os produtos
$selectProdutos = "SELECT * FROM produto";
$queryProdutos = $connection->query($selectProdutos);

function exibirProdutos(){
    global $queryProdutos;
    if ($queryProdutos->num_rows > 0){
        echo "
            <table>
            <tr>
            <th>Nome e Breve Descrição</th>
            <th>Descrição Adicional</th>
            <th>Valor Estimado por unidade (R$)</th>
			<th>imagem</th>
            </tr>
            ";
        while($row = $queryProdutos->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . "<input type='varchar(45)' class='$row[idproduto]' value='$row[nome]'>" . "</td>";
            echo "<td>" . "<input type='varchar(100)' class='$row[idproduto]' value='$row[descricao]'>" . "</td>";
            echo "<td>" . "<input type='float ' class='$row[idproduto]' value='$row[valor]'>" . "</td>";
			echo "<td>" . "<input type='varchar(45)' class='$row[idproduto]' value='$row[imagem]'>" . "</td>";
            echo "<td>" . "<input type='submit' onclick='atualizarDados($row[idproduto])' value='Salvar alterações'>" . "</td>";
            echo "<td>" . "<input type='submit' onclick='apagarDados($row[idproduto])' value='Apagar'>" . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else{
        echo "<p>Sem produtos cadastrados</p>";
    }
}

$connection->close();
?>
