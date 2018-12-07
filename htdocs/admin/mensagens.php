<?php
 include "../config/conexao.php";
// conecta ao banco de dados

// seleciona a base de dados em que vamos trabalhar
mysqli_select_db($conexao, $db);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT Nome,Email,Telefone,Mensagem FROM mensagens");
// executa a query
$dados = mysqli_query($conexao, $query) or die(mysqli_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>
 
<html>
    <head>
    <title>Exemplo</title>
</head>
<body>
<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
            <p>Nome: <?=$linha['Nome']?></p>
			<p>Telefone: <?=$linha['Telefone']?></p>
			<p>Email: <?=$linha['Email']?></p>
			<p>Mensagem: <?=$linha['Mensagem']?></p>
<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysqli_fetch_assoc($dados));
    // fim do if 
    }
?>
<a href="login.php">Voltar</a>

</body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>