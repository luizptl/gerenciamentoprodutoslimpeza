<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lista de Compras</title>
</head>
<body>
<a href="../../index.php">Início</a>
    <h1>Solicitar Produtos Fora da Lista Mensal</h1>
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
<ul></ul>

<label>Dia:</label>
          <select name="dia">
       <option value="">Selecione...</option>
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
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			    </select><br>
				<div></div>
	
		<label>Mes/Ano:</label>
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
 
 
 
     	 
	  
	  <label>Item:</label>
      <input type="text" min="0" name="Item">
	  <div></div>
	  
	  <label>Justificativa:</label>
      <input type="text" min="0" name="Justificativa">
	  <div></div>
	  
	        
		
        <input type="submit" value="Solicitar Produtos">
    </form>
    </div>

				<?php
					include_once("../../rodape.php");
				?>
			</div>
	
	</body>
</html>