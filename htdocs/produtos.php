<?php 	
    /*require "config/funcao/produto.php";
    $conexao = require_once "config/conexao.php";
    
    $products = getProducts($conexao);
    $productsMedc = getMostrar3Remedios($conexao);
    $productsRac = getMostrar3Racoes($conexao);*/
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Dog</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic" />
        <link type="text/css" rel="stylesheet" media="screen" href="css/estilos.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <style>
            #informacoes{background-color: #fff}
            inicial{width: 100%;height: 800px}
        </style>
        <script type="text/javascript">
        $(function (){
            $("#nav").load("nav.php");
            $("#menu").load("paginas/menu.php");
            
            $("#conteudo").load("paginas/pg_produtos.php");
            
            $("#footer").load("paginas/footer.php");
            
            $("#teste").load("pg_teste.php");
        });
        </script>
</head>
<body>
    <div id="nav"></div>
    <div id="site">
        <!-- Abertura da tela do Menu -->
        <!-- OK --><div id="menu"></div><br>
        
        <!-- Abertura dos dados de Conteudo -->
        <!-- OK --><div id="conteudo">
        <!-- OK --><div id="inicial"></div><br>
            <!-- Separador de Linha/Colunas no php -->
            <!-- OK --><div id="separador"></div>            
        </div>
        <!-- aqui fechamos a div conteudo -->
 
        
    </div>
</body>
</html>