<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body class="bg">

    <ul>
        <a href="home.html" class="logo">Prato do Chefe</a>                 <!--verificar home -->
        <div>
        <a class="conta" href="../receita_site/index.php">Login</a>
        <a class="conta" href="../receita_site/cadastro.php">Cadastre-se</a>
      </div>
    </ul>

    <main>
        <div class="container">
            <form id="form_login" name="form_login" method="POST" action="validar_login.php" >

                <div class="titulo">
                    <label>Login</label>
                </div>

                <div class="elemento">
                    <input placeholder="Email" id="nome_login" name="nome_login" required autofocus>
                </div>
    
                <div class="elemento">
                    <input type="password" placeholder="Senha" id="senha_login" name="senha_login">
                </div>
    
                <div class="elemento">
                    <button class="btn_submit" type="submit" name="btn_submit">Entrar</button>
                </div>
    
            </form>

            <hr>
    
            <div class="elemento">
                <a href='../receita_site/cadastro.php'><button class="outro-conta">Não tenho conta</button></a>
            </div>
    
        </div>
    </main>

    <div class="canto-esquerdo">
        <span>background de <a href="https://www.freepik.com/free-vector/sketchy-food-background_772953.htm#query=food%20backgrounds&position=10&from_view=search&track=ais">Freepik</a></span>
    </div>
    
</body>
</html>