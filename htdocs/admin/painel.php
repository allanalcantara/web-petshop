<?php
session_start();
include('verifica_login.php');
include('../config/conexao.php');
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT nome,login,senha,email FROM usuarios");
// executa a query
$dados = mysqli_query($conexao,$query) or die(mysqli_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

?>

 
<h2>Olá, <?php echo $linha['nome']?></h2>
<h2>Você que é Adm Veja as Mensagens dos clientes: <a href="mensagens.php">Aqui</a></h2>
<h2>Deseja ir para Tela inicia? Clique <a href="../index.php">Aqui</a></h2>
<h2>Oude deseja <a href="logout.php">Sair</a>!</h2>