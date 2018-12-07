<?php 

//Dados do banco de dados
$servidor='127.0.0.1';
$usuario='root';
$senha='1234560';
$db='petshop';

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '1234560');
define('DB', 'petshop');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

$mysqli=new mysqli($servidor,$usuario,$senha,$db);
mysqli_set_charset($mysqli,"utf8");

return new PDO(sprintf("mysql:host=%s;dbname=%s", $servidor, $db), $usuario, $senha);

// Conectamos ao nosso servidor MySQL
if(!($conexao = mysqli_connect($servidor,$usuario,$senha))) 
{
   echo "Erro ao conectar ao MySQL.";
   exit;
}
// Selecionamos nossa base de dados MySQL
if(!($conexao = mysqli_select_db($conexao, $db)))
{
   echo "Erro ao selecionar ao MySQL.";
   exit;
}
?>