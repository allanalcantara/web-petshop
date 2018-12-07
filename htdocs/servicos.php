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
            $("#inicial_servicos").load("paginas/pg_servicos.php");
            
            
            
            $("#footer").load("paginas/footer.php");
            
            $("#teste").load("pg_teste.php");
        });
        
        
        </script>
        <style>
            
            
            p{color: #fff;font-size: 10px;alignment-adjust: middle}
            p strong{color: #fff;font-size: 50px;}
            
             
        </style>
</head>
<body>
    <div id="nav"></div>
    <div id="site">
        
        <div id="menu"></div><br>
        <a href="#"><img src='img/ini_desconto.png' width="1000" height="200" /></a>
        <div id="inicial_servicos"></div>
        <div id="separador"></div>            
        
 
        <div id="footer"></div>
    </div>
</body>
</html>