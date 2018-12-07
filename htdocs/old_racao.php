
<br>
<div class="conteudo"></div>
<br/><br/><br/><br/>
<div id="informacoes" class="informacoes" align="center">Lista de Rações.</div>
<ul id="flexiselDemo3">
    <?php foreach($products2 as $product) : ?>
    <li>
        <a class="btn btn-outline-secondary" href="carrinho.php?acao=add&idproduto=<?php echo $product['idproduto']?>" class="card-link" onClick="alert('Seu Produto foi adicionado ao Carrinho de Compras');">
        <h4 class="card-title"><?php echo $product['abreviacao']?></h4>
        <img src="<?php echo $product['imagem']?>" width="150" height="250"></a>
    </li>
    
    <?php endforeach;?>>
</ul>
<div class="clearout"></div>
<br/><br/><br/><br/>
<div class="conteudo"></div>
<br>