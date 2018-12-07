<?php
session_start();
?>

<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login do site dogpet</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
 
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Painel de Usuário</h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box" align="center">
                        <form action="login.php" method="POST">
                            <div class="field">Usuario:
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="" autofocus="">
                                </div>
                            </div>
							<br />
                            <div class="field">Usuario:
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                            <br>
                            
                        </form>
                    </div>
                    <p style="color: #000;" align="center">Não tem usuario? Cadaste-se <a href="cadastrar.php" style="color: #0f81cc;">Aqui</a></p>
                    <p style="color: #000;" align="center">Retornar para tela inicial <a href="../index.php" style="color: #0f81cc;">CLIQUE AQUI</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>