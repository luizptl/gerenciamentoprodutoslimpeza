<?php
require_once("adm/restrito.php"); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administração</title>
</head>

<body>
<h1>Área Administrativa</h1>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8">
<title> projeto pi </title>
<link href="css/css.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/abas.js"></script>
</head>
<body>

	<div id="Principal">
		<section id="cabecalho">
			<?php include_once("cabecalho.php"); ?>
		</section>
		
		<section id="corpo">
			<?php include_once("corpoadm.php"); ?>
		</section>
			
		<footer id="rodape">
			<?php include_once("rodape.php"); ?>
		</footer>
	
	
	</div> 
	
</body>
</html>