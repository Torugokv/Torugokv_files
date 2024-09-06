<?php

require_once('lib/conexao.php');
require_once('lib/upload.php');

$id = intval($_GET['id']);

function limpar_texto($str){ 
    return preg_replace("/[^0-9]/", "", $str); 
}

if(count($_POST) > 0) {

    $erro = false;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
    $senha = $_POST['senha'];
    $sql_code_extra = "";
    $admin = $_POST['admin'];

    if(!empty($senha)){
        if(strlen($senha) < 6 && strlen($senha) > 16) {
        $erro = "A senha deve ter entre 6 e 16 caracteres.";
        } else {
            $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);
            $sql_code_extra = "senha = '$senha_criptografada',"; 
        }
    }   

    if(empty($nome)) {
        $erro = "Preencha o nome";
    }
    if(empty($email)) {
        $erro = "Preencha o e-mail";
    }

    if(!empty($nascimento)) { 
        $pedacos = explode('/', $nascimento);
        if(count($pedacos) == 3) {
            $nascimento = implode ('-', array_reverse($pedacos));
        } else {
            $erro = "A data de nascimento deve seguir o padrão dia/mes/ano.";
        }
    }

    if(!empty($telefone)) {
        $telefone = limpar_texto($telefone);
        if(strlen($telefone) != 11)
            $erro = "O telefone deve ser preenchido no padrão (11) 98888-8888";
    }

    if(isset($_FILES['foto'])) {
        $arq = $_FILES['foto'];
        $path = enviarArquivo($arq['error'], $arq['size'], $arq['name'], $arq['tmp_name']);
        if($path == false)
            $erro = "Falha ao enviar arquivo. Tente Novamente";
        else
            $sql_code_extra .= " foto = '$path', ";
        
        if(!empty($_POST['foto_antiga']))
            unlink($_POST['foto_antiga']); 
        // $sql_cliente = "SELECT foto FROM clientes WHERE id = '$id'";
        // $query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
        // $cliente = $query_cliente->fetch_assoc();
    }

    if($erro) {
        echo "<p><b>ERRO: $erro</b></p>";
    } else {

        $sql_code = "UPDATE clientes
        SET nome = '$nome', 
        email = '$email', 
        telefone = '$telefone',
        $sql_code_extra 
        nascimento = '$nascimento'
        admin = '$admin'
        WHERE id = '$id'";
        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if($deu_certo) {
            echo "<p><b>Sua senha foi alterada com sucesso!!!</b></p>";
            // enviar_email($email, "Sua senha foi alterada!!", "
            //     <h1>Parabéns</h1>
            //     <p>Sua conta no meu site Tohrucontas.com foi criada com sucesso!</p>
            //     <p>
            //         <b>login:</b>$email<br>
            //         <b>senha:</b>$senha_descriptografada
            //     </p>
            //     <p>Para fazer login acesse <a href=\"https://Tohrucontas.com/login.php\">este link.</a></p>");

            unset($_POST);
        }
    }

}
//
$sql_cliente = "SELECT * FROM clientes WHERE id = '$id'";
$query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
$cliente = $query_cliente->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <a href="clientes.php">Voltar para a lista</a>
    <form method = "POST" enctype = "multipart/form-data" action="">
        <p>
            <label>Nome:</label>
            <input value="<?php echo $cliente['nome']; ?>" name="nome" type="text">
        </p>
        <p>
            <label>E-mail:</label>
            <input value="<?php echo $cliente['email']; ?>" name="email" type="text">
        </p>
        <p>
            <label>Senha:</label>
            <input value="<?php echo $cliente['senha']; ?>" name="senha" type="text">
        </p>
        <p>
            <label>Telefone:</label>
            <input value="<?php if(!empty($cliente['telefone'])) echo formatar_telefone($cliente['telefone']); ?>"  placeholder="(11) 98888-8888" name="telefone" type="text">
        </p>
        <p>
            <label>Data de Nascimento:</label>
            <input value="<?php if(!empty($cliente['nascimento'])) echo formatar_data($cliente['nascimento']); ?>"  name="nascimento" type="text">
        </p>
        
        <input name ="foto_antiga" value = "<?php echo $cliente['foto'] ?>" type ="hidden">

        <?php if($cliente['foto']) {?>

        <p>
            <label>Foto Atual: </label>
            <img height ="50" src ="<?php echo $cliente['foto'];?>" alt="">
        </p>
        <?php } ?>
        <p>
            <label>Nova Foto do Usuário: </label>
            <input name = "foto" type ="file"> 
        </p>
        <p>
            <label>Tipo:</label>
            <input name="admin" value = "1" type="radio">Admin
            <input name="admin" value = "0" checked type="radio">Cliente<br>            
        </p>
        <p>
            <button type="submit">Salvar Cliente</button>
        </p>
    </form>
</body>
</html>