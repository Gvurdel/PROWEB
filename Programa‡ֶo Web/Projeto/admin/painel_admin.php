<?php session_start();
$security = isset($_SESSION['ativa']) ? TRUE : header("location: login.php");
require_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="css/painel_admin.css">
</head>
<body>
<?php if ($security) { ?>

<header>
    <h1>Painel Administrativo</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="saibamais.php">Bem vindo, <?php echo $_SESSION['nome']; ?>!</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
</header>
<?php 
$tabela = "usuarios";
$order = "nome";
$usuarios = buscall($connect, $tabela, 1, $order);
inserirusers($connect);

if (isset($_GET['id'])) { ?>
    <h2>Tem certeza que deseja deletar o usuário <?php 
    echo $_GET['nome']; ?>?</h2>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        <input type="submit" name="deletar" value="Deletar">
    </form>

<?php } ?>
<?php
    if (isset($_POST['deletar'])) {
        if ( $_SESSION['id'] != $_POST['id']) {        
            deletar($connect, "usuarios", $_POST['id']);
        }else{
            echo "Você não tem permissão para executar esta solicitação!";
        }
    }
    
?>

<form action="" method="post" enctype="multipart/form-data"> 
    
    <legend>Inserir Usuários</legend><br>
    <input type="text" name="nome" placeholder="Nome">
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="senha" placeholder="Senha">
    <input type="password" name="repetesenha" placeholder="Confirme sua senha">
    <input type="file" name="imagem" accept="image/*" class="form-control">
    <input type="submit" name="cadastrar" value="CADASTRAR">

</form>

<div class="Conteiner">
    <table>
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Dados Cadastro</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($usuarios as $usuario) : ?>
                <tr>
                    <td>
                        <?php  if (!empty($usuario['imagem'])) {?>
                        <img width="100px" src="images/uploads/<?php echo $usuario['imagem']; ?>" >
                        <?php }    ?>
                    </td>
                    <td><?php echo $usuario['id']; ?></td>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td><?php echo $usuario['data_cadastro']; ?></td>
                    <td>
                        <a href="users.php?id=<?php echo $usuario['id']; 
                        ?>&nome=<?php echo $usuario['nome']; ?>">Excluir</a>
                        |
                        <a href="edit_user.php?id=<?php echo $usuario['id']; 
                        ?>&nome=<?php echo $usuario['nome']; ?>">Atualizar</a>

                    </td>
                </tr>


                <?php endforeach;?>
                
        
        </tbody>
    </table>
</div>
<section class="footer">
    <div class="redesocial">
        
        <a href=""><i data-feather="instagram"></i></a>
        <a href=""><i data-feather="facebook"></i></a>
        <a href=""><i data-feather="twitter"></i></a>
        <a href=""><i data-feather="youtube"></i></a>

    </div>
    <div class="textfooter">
        <a href="index.php">Home</a>
		<a href="#Produtos">Produtos</a>
		<a href="users.php">Gerenciar</a>
		<a href="saibamais.php">Bem vindo, <?php echo $_SESSION['nome']; ?>!</a>
        <a href="logout.php">Sair</a>
    </div>
    
    <p class="copyright">Just Go Smart Access 2023</p>
</section>

<script>
    feather.replace()
</script>
<?php  } ?>
</body>
</html>
