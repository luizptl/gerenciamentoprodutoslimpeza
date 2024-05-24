<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sistema de cadastro de produtos</title>
</head>
<body>
<li><a href="../../indexadm.php">Início</a></li>
    <h1>Sistema de cadastro de produtos</h1>
    <form action="cadastro.php" method="post">
        <label>Nome do produto e breve descriçao:</label>
        <input type="text" name="nome">

        <label>Descricao adicional:</label>
        <input type="text" min="0" name="descricao">

        <label>Valor estimado por unidade:</label>
        <input type="number" min="0" name="valor">
		
		<label>Imagem:</label>
        <input type="text" min="0" name="imagem">

        <input type="submit" value="Cadastrar produto">
    </form>
    <p>Produtos cadastrados:</p>
    <?php
    include "tabela.php";
    exibirProdutos();
    ?>

    <script>
        function atualizarDados(idproduto){
            let classValor = document.getElementsByClassName(idproduto);
            let nome = classValor[0].value;
            let descricao = classValor[1].value;
            let valor = classValor[2].value;
			let imagem = classValor[3].value;

            const xhttp = new XMLHttpRequest();
            xhttp.open("POST", "update.php");
            xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send("idproduto=" + idproduto + "&nome=" + nome + "&descricao=" + descricao + "&valor=" + valor+ "&imagem=" + imagem);
        }
    
        function apagarDados(idproduto){
            const xh = new XMLHttpRequest();
            xh.open("POST", "delete.php");
            xh.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xh.send("idproduto=" + idproduto);
            xh.onload = function() {
                if (xh.status == 200) {
                    location.reload();
                }
                }
        }
    </script>
</body>
</html>