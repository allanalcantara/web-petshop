<?php 	
    require "../config/funcao/produto.php";
    $conexao = require_once "../config/conexao.php";
    
    $products = getMostrar3Remedios($conexao);  
?>
<br/><br/><br/><br/>
<div id="informacoes" align="center">Lista de Medicamentos.</div>
<ul id="flexiselDemo5">
    <?php foreach($products as $product) : ?>
    <li>
        <div class="card">
            <div class="card-body" align="center">
                <h4 class="card-title"><?php echo $product['abreviacao']?></h4>
                <img src="img/produtos/<?php echo $product['imagem']?>" width="150" height="250">
                <h6 class="card-subtitle mb-2 text-muted">R$<?php echo number_format($product['preco'], 2, ',', '.')?></h6>
                <a class="btn btn-primary" href="index.php?acao=add&id=<?php echo $product['idproduto']?>" class="card-link" onClick="alert('Seu Produto foi adicionado ao Carrinho de Compras');">Comprar</a>
            </div>
        </div>
    </li>
    
    <?php endforeach;?>
</ul>
<div class="clearout"></div>
<br/><br/><br/><br/>
<br>