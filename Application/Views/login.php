<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <title>La'Rose | Login</title>
        <meta charset="utf-8">
        <meta name="description" content="Salão de cabeleireiros">
        <meta name="keywords" content="Beleza,Salão">
        <meta name="author" content="Thiago Henrique Felix">
        <meta name="viewport"content="width:device-width, initial-scale=1.">

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="css/style_login.css?v=6">
        <link type="text/css" rel="stylesheet" href="css/style_index.css?v=5">

        <!-- Icons | site = Fonts Awesome -->
        <link rel="stylesheet" type="text/css" href="pacotes/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">



    </head>

    <body>

        <?php /* Cabeçalho */ include_once 'Views/header.php'; ?>


        <div class="conteiner-app">

            <div class="logo-login">

                <h1 class="font-site">La'Rose</h1>
                <p>Insira seus dados para entrar no sistema</p>
            </div>

            <form>
                <input class="caixa-texto" type="text" name="usuario" placeholder="Nome de Usuário" >
                <input class="caixa-texto" type="password" name="senha" placeholder="Senha" >
                <div class="aviso-sistema"><p></p></div>
                <button class="btn ">Logar</button>
                <p id="logar-com" class="font-site">Logar Com</p>
                <div class="conteiner-sociais">
                    <ul>
                        <li class="login-social" > <a href="#"> <i class="fab fa-lg fa-facebook" aria-hidden="true" ></i> Logar com o Facebook </a></li>
                        <li class="login-social" > <a href="#"> <i cla../cadastro/cadastro.phpss="fab fa-lg fa-twitter" aria-hidden="true" ></i> Logar com o Twitter </a></li>
                        <li class="login-social" > <a href="#"> <i class="fab fa-lg fa-google" aria-hidden="true" ></i> Logar com o Gmail </a></li>
                    </ul>

                </div>

                <div class="cadastrar-se">
                    <a href="<?php echo $url_sistema."index.php?p=cadastro" ?>" >Cadastrar-se</a>
                </div>

            </form>

        </div>


        <?php /* Rodapé */ include_once 'Views/footer.php'; ?>

        <!-- Scripts -->
        <!-- Jquery -->
        <script type="text/javascript" src="pacotes/jquery/jquery-3.2.1.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="js/javascript_menu.js"></script>

    </body>


</html>