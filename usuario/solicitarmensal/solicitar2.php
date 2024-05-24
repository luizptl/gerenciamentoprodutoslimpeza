<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Solicitar Produtos</h1>
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
		<label>Mes:</label>
        <select name="mes">
			<option value="">Selecione...</option>
				<option value="JAN">JANEIRO</option>
				<option value="FEV">FEVEREIRO</option>
				<option value="MAR">MARÇO</option>
				<option value="ABR">ABRIL</option>
				<option value="MAI">MAIO</option>
				<option value="JUN">JUNHO</option>
				<option value="JUL">JULHO</option>
				<option value="AGO">AGOSTO</option>
				<option value="SET">SETEMBRO</option>
				<option value="OUT">OUTUBRO</option>
				<option value="NOV">NOVEMBRO</option>
				<option value="DEZ">DEZEMBRO</option>
 </select><br>
 <div></div>
 
 <label>Ano:</label>
        <select name="ano">
		<option value="">Selecione...</option>
  <option value="2024">2024</option>
  <option value="2025">2025</option>
  <option value="2026">2026</option>
   </select><br>
 
 
 <ul><label>Produtos de Limpeza</label></ul>
  
        <label>1 - Álcool Líquido:</label> 
        <input type="number" min="0" max="10" name="AlcoolLiquido">
		
		<label>2 - Água Sanitária:</label>
        <input type="number" min="0" max="10" name="AguaSanitaria">
		
		<label>3 - Detergente 500ML:</label>
        <input type="number" min="0" max="10" name="Detergente500ML">
		
		<label>4 - Sabao em Pó:</label>
        <input type="number" min="0" max="10" name="SabaoEmPo">
		
		<label>5 - Desinfetante5L:</label>
        <input type="number" min="0" max="10" name="Desinfetante5L">
		
		<label>6 - Desinfetante10L:</label>
        <input type="number" min="0" max="10" name="Desinfetante10L">
		
	    <label>7 - Desinfetante15L:</label>
        <input type="number" min="0" max="10" name="Desinfetante15L">
		
		<label>8 - Removedor:</label>
        <input type="number" min="0" max="10" name="Removedor">
		
		<label>9 - Limpa Vidros:</label>
        <input type="number" min="0" max="10" name="LimpaVidros">
		
		<label>10 - Limpa Inox:</label>
        <input type="number" min="0" max="10" name="LimpaInox">
		
		<label>11 - Limpador Multiuso:</label>
        <input type="number" min="0" max="10" name="LimpadorMultiuso">
		
	    <label>12 - Pedra Sanitaria:</label>
        <input type="number" min="0" max="10" name="PedraSanitaria">
		
		<label>13 - PapelHigienico:</label>
        <input type="number" min="0" max="10" name="PapelHigienico">
		
		<label>14 - Lustra Moveis:</label>
        <input type="number" min="0" max="10" name="LustraMoveis">
		
		<label>15 - Luvas de Borracha P:</label>
        <input type="number" min="0" max="10" name="LuvasdeBorrachaP">
		
		<label>16 - Luvas de Borracha M:</label>
        <input type="number" min="0" max="10" name="LuvasdeBorrachaM">
		
		<label>17 - Luvas de Borracha G:</label>
        <input type="number" min="0" max="10" name="LuvasdeBorrachaG">
		
		<label>18 - Saco de Lixo 20L:</label>
        <input type="number" min="0" max="10" name="SacodeLixo20L">
		
		<label>19 - Saco de Lixo 40L:</label>
        <input type="number" min="0" max="10" name="SacodeLixo40L">
		
		<label>20 - Saco de Lixo 60L:</label>
        <input type="number" min="0" max="10" name="SacodeLixo60L">
		
		<label>21 - Saco de Lixo 100L:</label>
        <input type="number" min="0" max="10" name="SacodeLixo100L">
		
		<label>22 - Pano de Chão:</label>
        <input type="number" min="0" max="10" name="PanodeChao">
		
		<label>23 - Flanela:</label>
        <input type="number" min="0" max="10" name="Flanela">
		
		<label>24 - Vassoura de Piaçava:</label>
        <input type="number" min="0" max="10" name="VassouraPiacava">
		
		<label>25 - Vassoura Cerdas Macia:</label>
        <input type="number" min="0" max="10" name="VassouraCerdasMacia">
		
		<label>26 - Vasoura MOP:</label>
        <input type="number" min="0" max="10" name="VasouraMOP">
		
		<label>27 - Rodo:</label>
        <input type="number" min="0" max="10" name="Rodo">
		
		<label>28 -Pá Coletora:</label>
        <input type="number" min="0" max="10" name="PaColetora">
		
		<label>29 - Bucha:</label>
        <input type="number" min="0" max="10" name="Bucha">
		
		<label>30 - Balde 10L:</label>
        <input type="number" min="0" max="10" name="Balde10L">
		
		
		
		
		
		
		
		
        

        <input type="submit" value="Solicitar Produtos">
    </form>
    
	
	</body>
</html>