<?php 
	session_start();
	require_once "config/funcao/produto.php";
	require_once "config/funcao/cart.php";
	$pdoConnection = require_once "config/conexao.php";
	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			addCart($_GET['id'], 1);			
		}
		if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			deleteCart($_GET['id']);
		}
		if($_GET['acao'] == 'up'){ 
			if(isset($_POST['prod']) && is_array($_POST['prod'])){ 
				foreach($_POST['prod'] as $id => $qtd){
						updateCart($id, $qtd);
				}
			}
		} 
		header('location: index.php');
	}
	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);
        
        
        
        
?>
<div id="nav">
  <div id="sup_direito">
      <a href="#"  onclick="document.getElementById('modal-login').style.display='block'">
          <img src="img/navbar/user.png"  width="25" height="25">
          | LOGIN / CADASTRE-SE |
      </a>
      
      <a href="#"  onclick="document.getElementById('modal-pedidos').style.display='block'">
          <img src="img/navbar/checkout.png" width="25" height="25">
          | MEUS PEDIDOS |
      </a>
      
      <a href="#"  onclick="document.getElementById('modal-atendimento').style.display='block'">
          <img src="img/navbar/customer-service.png"  width="25" height="25">
          | ATENDIMENTO |
      </a>

  </div>
</div>
<!-- MODAL -->
<div id="modal-login" class="modal" style="color: #000;">
  
  <form class="modal-content animate" action="/action_page.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-login').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="1.png" alt="Avatar" class="avatar" >
      <h6 style="text-align:center;color: #000;">Já tem uma conta? Informe os seus dados
abaixo para acessá-la.</h6>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="uname">
      <input type="password" placeholder="Enter Password" name="psw">        
      <button type="submit">Login</button>
      <a href="#" style="text-decoration:none; float:right; margin-right:14px; margin-top:16px;">Esqueci a Senha!</a>
    </div>
    
  </form>
  
</div>
<script>
// If user clicks anywhere outside of the modal, Modal will close
var modal = document.getElementById('modal-login');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- MODAL -->
<div id="modal-pedidos" class="modal" style="color: #000;">
  
  <form class="modal-content animate" action="/action_page.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-pedidos').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h1 style="text-align:center;color: #000;">Lista de Produtos</h1>
      <?php if($resultsCarts) : ?>
			<form action="carrinho1.php?acao=up" method="post" >
			<table class="table table-strip" style="color: #000;">
				<thead>
					<tr>
						<th style="color: #000;">Produto</th>
						<th style="color: #000;">Quantidade</th>
						<th style="color: #000;">Preço</th>
						<th style="color: #000;">Subtotal</th>
						<th style="color: #000;">Ação</th>

					</tr>				
				</thead>
				<tbody>
				  <?php foreach($resultsCarts as $result) : ?>
					<tr>
						
						<td style="color: #000;"><?php echo $result['nome']?></td>
						<td style="color: #000;"><?php echo $result['quantidade']?></td>
						<td style="color: #000;">R$<?php echo number_format($result['preco'], 2, ',', '.')?></td>
						<td style="color: #000;">R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></td>
						<td style="color: #000;"><a href="nav.php?acao=del&id=<?php echo $result['idproduto']?>" class="btn btn-danger">Remover</a></td>
						
					</tr>
				<?php endforeach;?>
				 <tr>
				 	<td colspan="3" class="text-right"><b>Total: </b></td>
				 	<td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
				 	<td></td>
				 </tr>
				</tbody>
				
			</table>

			<button class="btn btn-info" type="submit">Finalizar Pedido</button>

			</form>
	<?php endif?>
    </div>
      
      <div class="imgcontainer">
		<div class="card mt-5">
			 <div class="card-body">
	    		<h4 class="card-title">Carrinho</h4>
	    		<a href="index.php">Lista de Produtos</a>
	    	</div>
		</div>

		
		
	</div>
    
  </form>
  
</div>
<script>
// If user clicks anywhere outside of the modal, Modal will close
var modal = document.getElementById('modal-pedidos');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- MODAL -->
<div id="modal-atendimento" class="modal" style="color: #000;">
  
  <form class="modal-content animate" action="/action_page.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-atendimento').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h3 style="text-align:center;color: #000;">Entrar em Contato:</h3>
    </div>

    <div class="container">
        <form action="<? $PHP_SELF; ?>" method="POST"> 
	<h5 style="color: #000;"> 
		Nome:<br /> 
		<input type="text" size="30" name="nome" style="color: #000"> 
        </h5>   
	<h5 style="color: #000;"> 
		E-mail:<br /> 
		<input type="text" size="30" name="email" style="color: #000">		
	</h5>   
	<h5 style="color: #000;"> 
		Telefone:<br /> 
		<input type="text" size="35" name="telefone" style="color: #000"> 
	</h5>   
	<h5 style="color: #000;"> 
		Mensagem:<br /> 
                <input type="text" size="35" name="mensagem" style="color: #000"> 
	</h5>   
	<h5 style="color: #000;">
            <button type="submit" name="BTEnvia" value="Enviar">Enviar</button>
	  <button type="reset" name="BTApaga" value="Apagar">Apagar</button>
        </h5>
    </div>
    
  </form>
  
</div>
<script>
// If user clicks anywhere outside of the modal, Modal will close
var modal = document.getElementById('modal-atendimento');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>