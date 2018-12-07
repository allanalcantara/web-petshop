<?php 	
	require_once "../config/funcao/produto.php";
	$pdoConnection = require_once "../config/conexao.php";
	$products = getProducts($pdoConnection);
?>
<br/><br/><br/><br/>
<div id="informacoes" align="center">Lista dos Produtos.</div>

<div class="container"><br>
		<div class="row"><br>
			<?php foreach($products as $product) : ?>
				<div class="col-4"><br>
					<div class="card"><br>
                                            <br>
                                            <div class="card-body" align="center">
							 <!--<h4 class="card-title"><?php echo $product['tipo']?></h4>-->
                                                         <h4 class="card-title"><?php echo $product['abreviacao']?></h4>
                                                         <img src="img/produtos/<?php echo $product['imagem']?>" width="150" height="250">
                                                         <h6 class="card-subtitle mb-2 text-muted">
							  	R$<?php echo number_format($product['preco'], 2, ',', '.')?>
							 </h6>

							 <a class="btn btn-primary" href="carrinho1.php?acao=add&id=<?php echo $product['idproduto']?>" class="card-link" onClick="alert('Seu Produto foi adicionado ao Carrinho de Compras');">Comprar</a>
						</div>
					</div>
				</div>

			<?php endforeach;?>
		</div>
	</div>
