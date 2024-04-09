<?php session_start();
$security = isset($_SESSION['ativa']) ? TRUE : header("location: login.php");
require_once "functions.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel_admin.css">
    <title>Painel Admin - Usuários</title>
</head>
<body>

<?php if ($security) { ?>

<header>

<h1>Painel Administrativo</h1>
<img class="image" src="./images/justgo_redondo.jpg" alt="gohome" type="image/svg">
<nav class="box">
    <ul>

        <li><a href="index.php">Home</a></li>

        <li><a href="users.php">Gerenciar</a></li>
        <li><a href="logout.php">Sair</a></li>
        
    </ul>
</nav>
</header>

<?php 
    $tabela = "usuarios";
    $order = "nome";
    $usuarios = buscall($connect, $tabela, 1, $order);
?>
    <?php if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $usuario = buscaone($connect, "usuarios", $id);
        autalizarUser($connect);
    ?>
    <div class="msg-erro">Editando o usuário <?php echo $_GET['nome'] ?>
            </div>
            <style>
                .msg-erro{ 
                    margin-top: 20px;
                    text-align: center;
                    font-weight: bold;
                    font-size: 30px;
                }
            </style>
            <?php ?>
    <?php } ?>

<form action="" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Editar Usuário</legend>
        <input value="<?php echo $usuario['id']; ?>" type="hidden" name="id">
        <input value="<?php echo $usuario['nome']; ?>" type="text" name="nome" placeholder="Nome">
        <input value="<?php echo $usuario['email']; ?>" type="email" name="email" placeholder="E-mail">
        <input type="password" name="senha" placeholder="Senha">
        <input type="password" name="repetesenha" placeholder="Confirme sua senha">
        <input value="<?php echo $usuario['data_cadastro']; ?>" type="date" name="data_cadastro" >
        <input type="file" name="imagem" accept="image/*" class="form-control">
        <input type="submit" name="atualizar" value="Atualizar">
    </fieldset>
</form>


<?php  } ?>

</body>
</html>