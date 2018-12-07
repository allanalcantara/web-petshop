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
        
        <script type="text/javascript">
        $(function (){
            $("#nav").load("nav.php");
            $("#menu").load("paginas/menu.php");
            
            $("#inicial_sobre").load("paginas/pg_sobre.php");
            
            $("#footer").load("paginas/footer.php");
            
            $("#teste").load("pg_teste.php");
        });
        
        
        </script>
        <style>
            body{background-color: #000;}
            site{background-color: #000;}
            separador{background-color: #000}
            p{color: #fff;font-size: 20px;}
            p b{color: #fff;font-size: 20px;}
            p strong{color: #fff;font-size: 30px;}
            strong{color: #fff;font-size: 10px;}
            *{color: #fff;font-family: 'Lato', sans-serif;}
             
        </style>
</head>
<body>
    <div id="nav"></div>
    <div id="site">
        <div id="menu"></div><br>
        <a href="#"><img src='img/ini_desconto.png' width="1000" height="200" /></a>
        <div id="inicial_sobre"></div>
        
        <div id="footer"></div>
    </div>
</body>
</html>