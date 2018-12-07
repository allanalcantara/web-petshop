<?php 
require '../config/conexao.php';

$nome = $_POST['nome'];
$login = $_POST['usuario'];
$senha = MD5($_POST['senha']);
$email = $_POST['email'];

$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($conexao,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];
 
  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastrar.php';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastrar.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (Nome,Login,Senha,Email,Nivel) VALUES ('$nome','$login','$senha','$email',1)";
        $insert = mysqli_query($conexao,$query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastrar.php'</script>";
        }
      }
    }
?>