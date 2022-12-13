<html>

<head>
    <meta charset="UTF-8" />
    <title>Sistema de acesso</title>
    <link rel="stylesheet" type="text/css" href="assets/css/acesso.css" />
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/acesso.js"></script>





    <title><?php echo $setting['site_name']; ?> - Distribuidora de Alimentos</title>

    <meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
    
    <!--<link href="assets/css/bootstrap.css" rel="stylesheet">-->
    
    <link href="assets/css/style.css" rel="stylesheet">
    
    <link href="assets/css/responsive.css" rel="stylesheet">
    
    <link href="assets/css/color.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>

<body style="background-color: gray;">
    <div style="background-color: #293e9c; height: 30px;"></div>

        <?php  include "header.php"; ?>

        <div id="mensagem"></div>

        <div id="formulario">
            <form id="formularioLogin" action="action/validar.php" method="POST">
                <span class="title">Acesse sua conta</span>

                <div id="linha">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>

                <div id="linha" class="senha">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" />
                </div>

                <div id="button">
                    <button type="submit" id="">Entrar</button>
                    <a href="javascript:void(0)" id="esqueciSenha">Esqueci minha senha</a>
                </div>
            </form>

            <form id="formularioCadastro" action="action/cadastrando.php" method="POST">
                <span class="title">Crie sua conta</span>

                <div id="linha">
                    <label for="nomeCadastro">Nome</label>
                    <input type="text" name="nomeCadastro" id="nomeCadastro" />
                </div>

                <div id="linha">
                    <label for="emailCadastro">Email</label>
                    <input type="text" name="emailCadastro" id="emailCadastro" />
                </div>

                <div id="linha">
                    <label for="telefoneCadastro">Telefone</label>
                    <input type="text" name="telefoneCadastro" id="telefoneCadastro" />
                </div>

                <div id="linha">
                    <label for="senhaCadastro">Senha</label>
                    <input type="password" name="senhaCadastro" id="senhaCadastro" />
                </div>

                <div id="button">
                    <button type="submit" id="">Cadastrar</button>
                </div>
            </form>

            <div id="textoCadastro">
                <span class="title">Não possui uma conta?</span>
                <span class="subtitle">Crie uma conta agora para acessar todas as ferramentas. É de graça!</span>
                <button id="btnCadastro" class="change">Cadastrar</button>
            </div>

            <div id="textoLogin">
                <span class="title">Já possui uma conta?</span>
                <span class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam modi, et iusto explicabo amet libero saepe quos impedit quisquam ut, ex tempora.</span>
                <button id="btnLogin" class="change">Entrar</button>
            </div>
        </div>

        
</body>

</html>