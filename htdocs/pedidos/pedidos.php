<?php 
require '../config/conexao.php';

$idproduto = $_GET['idproduto'];
$nome = $_GET['nome'];
$quantidade = $_GET['quantidade'];
$preco = $_GET['preco'];

$query_select = "SELECT Nome,email,telefone,mensagem FROM Mensagens WHERE nome = '$nome'";
$select = mysqli_query($conexao,$query_select);
$array = mysqli_fetch_array($select);
 
    if($nome == "" || $nome == null)
    {
        echo"<script language='javascript' type='text/javascript'>alert('O Campo Nome deve ser preenchido');window.location.href='#';</script>";
    }
    if($email == "" || $email == null)
    {
        echo"<script language='javascript' type='text/javascript'>alert('O Campo Email deve ser preenchido');window.location.href='#';</script>";
    }
    if($telefone == "" || $telefone == null)
    {
        echo"<script language='javascript' type='text/javascript'>alert('O Campo Telefone deve ser Preenchido');window.location.href='#';</script>";
    }
    if($mensagem == "" || $mensagem == null)
    {
        echo"<script language='javascript' type='text/javascript'>alert('O Campo Mensagem deve ser Preencido');window.location.href='#';</script>";
    }
    else
    {
        
            $query = "INSERT INTO Mensagens (Nome,Email,Telefone,Mensagem) VALUES ('$nome','$email','$telefone','$mensagem')";
            $insert = mysqli_query($conexao,$query);
            
            if($insert)
            {
                echo"<script language='javascript' type='text/javascript'>alert('MENSAGEM ENVIADA COM SUCESSO!');window.location.href='../index.php'</script>";
            }
            else
            {
                echo"<script language='javascript' type='text/javascript'>alert('Não foi possível enviar mensagem');window.location.href='../index.php'</script>";
            }
        
    }
?>