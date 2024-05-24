<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lista de Compras</title>
</head>
<body>
<li><a href="../../index.php">Início</a></li>
    <h1>Informar Quantidade no Estoque</h1>
    <form action="cadastro.php" method="post">
        <label>Condominio:</label>
		
		<select name="Condominio">
  <option value="">Selecione...</option>
            <option value="Venezia">Condomínio Venezia</option>
            <option value="Delta">Condomínio Delta</option>
            <option value="Marianas Garden">Condomínio Marianas Garden</option>
            <option value="Simone">Condomínio Simone</option>
            <option value="Mirella">Condomínio Mirella</option>
            <option value="Nove de Julho">Condomínio Nove de Julho</option>
            <option value="Solar das Palmeiras">Condomínio Solar das Palmeiras</option>
            <option value="Gran Palazzo Teompompo">Condomínio Gran Palazzo Teompompo</option>
            <option value="Solar dos Colibris e Andorinhas">Condomínio Solar dos Colibris e Andorinhas</option>
            <option value="Inconfidência">Condomínio Inconfidência</option>
            <option value="Itapema">Condomínio Itapema</option>
            <option value="Cabo Frio">Condomínio Cabo Frio</option>
            <option value="Felicita">Condomínio Felicita</option>
			<option value="Inconfidencia">Condomínio Inconfidencia</option>
			<option value="Maria Nice">Condomínio Maria Nice</option>
			<option value="Varandas da Vila">Condomínio Varandas da Vila</option>
 </select><br>
<div></div>
<ul></ul>
		<label>Mês/Ano:</label>
        <select name="mesano">
			<option value="">Selecione...</option>
				<option value="JAN24">JANEIRO24</option>
				<option value="FEV24">FEVEREIRO24</option>
				<option value="MAR24">MARÇO24</option>
				<option value="ABR24">ABRIL24</option>
				<option value="MAI24">MAIO24</option>
				<option value="JUN24">JUNHO24</option>
				<option value="JUL24">JULHO24</option>
				<option value="AGO24">AGOSTO24</option>
				<option value="SET24">SETEMBRO24</option>
				<option value="OUT24">OUTUBRO24</option>
				<option value="NOV24">NOVEMBRO24</option>
				<option value="DEZ24">DEZEMBRO24</option>
				<option value="JAN25">JANEIRO25</option>
				<option value="FEV25">FEVEREIRO25</option>
				<option value="MAR25">MARÇO25</option>
				<option value="ABR25">ABRIL25</option>
				<option value="MAI25">MAIO25</option>
				<option value="JUN25">JUNHO25</option>
				<option value="JUL25">JULHO25</option>
				<option value="AGO25">AGOSTO25</option>
				<option value="SET25">SETEMBRO25</option>
				<option value="OUT25">OUTUBRO25</option>
				<option value="NOV25">NOVEMBRO25</option>
				<option value="DEZ25">DEZEMBRO25</option>
 </select><br>
 <div></div>
 
  
 
 <ul><label>Produtos de Limpeza</label></ul>
  
        <label>1 - Álcool Líquido:</label> 
        	<select name="AlcoolLiquido">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
				
		
		<label>2 - Água Sanitária:</label>
        	<select name="AguaSanitaria">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>3 - Detergente 500ML:</label>
        	<select name="Detergente500ML">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>4 - Sabao em Pó:</label>
 		<select name="SabaoEmPo">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>5 - Desinfetante5L:</label>
        		<select name="Desinfetante5L">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>6 - Desinfetante10L:</label>
   		<select name="Desinfetante10L">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
	    <label>7 - Desinfetante15L:</label>
        		<select name="Desinfetante15L">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>8 - Removedor:</label>
        		<select name="Removedor">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>9 - Limpa Vidros:</label>
      		<select name="LimpaVidros">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>10 - Limpa Inox:</label>
        	<select name="LimpaInox">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>11 - Limpador Multiuso:</label>
        	<select name="LimpadorMultiuso">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
	    <label>12 - Pedra Sanitaria:</label>
		<select name="PedraSanitaria">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>13 - PapelHigienico:</label>
       		<select name="PapelHigienico">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>14 - Lustra Moveis:</label>
        	<select name="LustraMoveis">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>15 - Luvas de Borracha P:</label>
      		<select name="LuvasdeBorrachaP">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>16 - Luvas de Borracha M:</label>
        <select name="LuvasdeBorrachaM">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>17 - Luvas de Borracha G:</label>
        		<select name="LuvasdeBorrachaG">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>18 - Saco de Lixo 20L:</label>
        		<select name="SacodeLixo20L">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>19 - Saco de Lixo 40L:</label>
        		<select name="SacodeLixo40L">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>20 - Saco de Lixo 60L:</label>
        		<select name="SacodeLixo60L">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>21 - Saco de Lixo 100L:</label>
     		<select name="SacodeLixo100L">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>22 - Pano de Chão:</label>
       		<select name="PanodeChao">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>23 - Flanela:</label>
       		<select name="Flanela">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>24 - Vassoura de Piaçava:</label>
        	<select name="VassouraPiacava">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>25 - Vassoura Cerdas Macia:</label>
        		<select name="VassouraCerdasMacia">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>26 - Vasoura MOP:</label>
        		<select name="VasouraMOP">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>27 - Rodo:</label>
        
		<select name="Rodo">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>28 -Pá Coletora:</label>
        	<select name="PaColetora">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>29 - Esponja:</label>
        		<select name="Esponja">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>30 - Balde 10L:</label>
        	<select name="Balde10L">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		<label>31 - Aromatizante:</label>
        	<select name="Aromatizante">
			<option value="">Selecione...</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select><br>
		
		
					
        

        <input type="submit" value="Informar">
    </form>
    </div>

				<?php
					include_once("../../rodape.php");
				?>
			</div>
	
	</body>
</html>