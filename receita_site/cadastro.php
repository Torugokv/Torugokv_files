<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body class="bg">

    <ul>
        <a href="home.html" class="logo">Prato do Chefe</a>             <!--verificar home -->
        <div>
        <a class="conta" href="../receita_site/index.php">Login</a>
        <a class="conta" href="../receita_site/cadastro.php">Cadastre-se</a>
      </div>
    </ul>

    <main>
        <div class="container">     <!-- container -->

        <form action="" name="" method="POST">

            <div class="titulo">
                <label>Criar nova conta</label>
            </div>

            <div class="elemento">
                <input type="text" placeholder="Nome" name="nome" id="nome" required autofocus>
            </div>
            <div class="elemento">
                <input type="email" placeholder="Email" name="email" id="email" required>
            </div>

            <div class="elemento">
                <input type="password" placeholder="Senha" name="senha" id="senha" required>
            </div>

            <div class="elemento">
                <button class="btn_submit" type="submit" name="btn_submit">Criar conta</button>
            </div>
        </form>

        <div class="elemento">
            <a href='../receita_site/index.php'><button class="outro-conta">Já tenho uma conta</button></a>
        </div>

        </div>      <!-- container -->
    </main>

    <div class="canto-esquerdo">
        <span>background de <a href="https://www.freepik.com/free-vector/sketchy-food-background_772953.htm#query=food%20backgrounds&position=10&from_view=search&track=ais">Freepik</a></span>
    </div>
    
</body>
</html>