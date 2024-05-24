<?php
	session_start();
	require_once 'head.php';
	include_once '../App/Controller/ProdutoController.php';
	
			
?>

<!DOCTYPE HTML>
<html>
	
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="../index.php">Início</a></li>
								<li class="active"><a href="exemplos.php">Produtos de Limpeza</a></li>
							<div> Referência para fazer compras ou solicitar produtos</div>
 <div>Serão considerados somente quantidades de volume e tamanho. As marcas de produtos serão escolhidas conforme disponibilidade na compra.</div>	<br>	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-2">
						<div class="row row-pb-lg">
							<?php
								$produtos = ProdutoController::allProdutos();
							
								foreach ($produtos as $produto) {
									echo
								'<div class="col-md-4 text-center">
									<div class="product-entry">
										<div class="product-img" style="background-image: url(images/'.$produto[4].'.jpg'.');"
											<p class="tag"><span class="new"></span></p>
											
										</div>
										<div class="desc">
											<h3>'.$produto[1].'</h3>
									
											
										</div>
										
									</div>
								</div>';	
								}
							?>	
							
						</div>
					</div>
				</div>

				<?php
					include_once("footer.php");
				?>
			</div>

		</div>
	
	
	</body>
</html>

