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
            
            $("#inicial_retira").load("paginas/pg_retirarnaloja.php");
            
            $("#footer").load("paginas/footer.php");
            
            $("#teste").load("pg_teste.php");
        });
        </script>
        <style>
            p{font-size: 25px;}
            p b{font-size: 25px;}
            strong{font-size: 12px;}
            *{font-family: 'Lato', sans-serif;}
             
        </style>
</head>
<body>
    <div id="nav"></div>
    <div id="site">
        <div id="menu"></div><br>
        <a href="#"><img src='img/ini_desconto.png' width="1000" height="200" /></a>
        <div id="inicial_retira"></div> 
        <div id="footer"></div>
    </div>
</body>
</html>