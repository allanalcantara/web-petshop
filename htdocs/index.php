<?php 
	session_start();
	require_once "config/funcao/produto.php";
	require_once "config/funcao/cart.php";
        
        $pdoConnection = require_once "config/conexao.php";
	
        if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up')))
        {
            if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id']))
            {
                addCart($_GET['id'], 1);
            }
            
            if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id']))
            {
                deleteCart($_GET['id']);
            }
            if($_GET['acao'] == 'up')
            {
                if(isset($_POST['prod']) && is_array($_POST['prod']))
                {
                    foreach($_POST['prod'] as $id => $qtd)
                    {
                        updateCart($id, $qtd);
                    }
                }
            } 
		header('location: index.php');
	}
	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);

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
            $("#slide").load("paginas/slider.php");
            $("#inicial").load("paginas/pg_inicial.php");
            
            $("#lista_produtos").load("paginas/pg_listaprodutos.php");
            $("#listamedicamento").load("paginas/pg_listamedicamento.php");
            $("#listaracao").load("paginas/pg_listaracao.php");
            
			$("#footer").load("paginas/footer.php");
            
            $("#teste").load("pg_teste.php");
        });
        
        $(window).load(function(){
            $("#flexiselDemo1").flexisel();
            $("#flexiselDemo2").flexisel({
                visibleItems: 5,
                itemsToScroll: 1,
                animationSpeed: 200,
                infinite: true,
                navigationTargetSelector: null,
                
                autoPlay:
                {
                    enable: false,
                    interval: 5000,
                    pauseOnHover: true
                },
                responsiveBreakpoints:
                {
                    portrait:
                    {
                        changePoint:480,
                        visibleItems: 1,
                        itemsToScroll: 1
                    },
                    landscape:
                    {
                        changePoint:640,
                        visibleItems: 2,
                        itemsToScroll: 2
                    },
                    tablet:
                    {
                        changePoint:768,
                        visibleItems: 3,
                        itemsToScroll: 3
                    }
                },
                loaded: function(object)
                {
                    console.log('Slider loaded...');
                },
                before: function(object)
                {
                    console.log('Before transition...');
                },
                after: function(object)
                {
                    console.log('After transition...');
                },
                resize: function(object)
                {
                    console.log('After resize...');
                }
            });
            
            $("#flexiselDemo3").flexisel({
                visibleItems: 1,
                itemsToScroll: 1,
            
                autoPlay:
                {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }});
            $("#flexiselDemo4").flexisel({
                visibleItems: 3,
                itemsToScroll: 1,
            
                autoPlay:
                {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }});
            $("#flexiselDemo5").flexisel({
                visibleItems: 4,
                itemsToScroll: 1,
            
                autoPlay:
                {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }});
            $("#flexiselDemo6").flexisel({
                visibleItems: 5,
                itemsToScroll: 1,
            
                autoPlay:
                {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }});
            $("#flexiselDemo7").flexisel({
                visibleItems: 3,
                itemsToScroll: 1,
            
                autoPlay:
                {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }});
            $("#flexiselDemo8").flexisel({
                visibleItems: 4,
                itemsToScroll: 1,
            
                autoPlay:
                {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }});
        });
        </script>
</head>
<body>
    <div id="nav"></div>
    <br/>
    <div id="site">
        <!-- Abertura da tela do Menu -->
        <!-- OK --><div id="menu"></div><br>
        <!-- Abertura  da tela do Slide -->
        <!-- OK --><div id="slide"></div><br>
        <!-- Abertura  da tela DE INICIO -->
        <!-- OK --><div id="inicial"></div><br>
        <!-- Separador de Linha/Colunas no php -->
        <!-- OK --><div id="separador"></div>
        <!-- Tela de Desconto -->
        <!-- OK --><a href="#"><img src='img/ini_desconto.png' width="1000" height="200" /></a>
        <!-- Abertura dos dados de Conteudo -->
        <!-- OK --><div id="conteudo">
            <!-- Abertura  da lista de ração -->
            <!-- OK --><div id="listaracao"></div>
            <!-- Separador de Linha/Colunas no php -->
            <!-- OK --><div id="separador"><br></div>
            <!-- Abertura  da lista de medicamentos -->
            <!-- OK --><div id="listamedicamento"></div>
            <!-- Separador de Linha/Colunas no php -->
            <!-- OK --><div id="separador"></div>            
        </div>
        <!-- aqui fechamos a div conteudo -->
 
        <div id="footer"></div>
    </div>
</body>
</html>