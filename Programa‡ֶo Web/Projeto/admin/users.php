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
    <img class="image" src="./images/justgo_redondo.jpg" alt="gohome" type="image/svg">
    <nav class="box">
        <ul>

            <li><a href="index.php">Home</a></li>
            
            <li><a href="users.php">Bem vindo, <?php echo $_SESSION['nome']; ?>!</a></li>
            <li><a href="logout.php">Sair</a></li>
            
        </ul>
    </nav>
</header>
<?php 
$tabela = "usuarios";
$order = "nome";
$usuarios = buscall($connect, $tabela, 1, $order);
inserirusers($connect);

if (isset($_GET['id'])) {
?>
            <div class="msg-erro">Tem certeza que deseja deletar o usuário <?php 
    echo $_GET['nome']; ?>?
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
    
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        <input type="submit" name="deletar" value="Deletar">
    </form>

<?php } ?>
<?php
    if (isset($_POST['deletar'])) {
        if ( $_SESSION['id'] != $_POST['id']) {        
            deletar($connect, "usuarios", $_POST['id']);
        }else{ ?>
          <div class="msg-erro">Você não tem permissão para executar esta solicitação!
          </div>
          <style>
              .msg-erro{ 
                  text-align: center;
                  font-weight: bold;
                  font-size: 30px;
              }
          </style>
          <?php
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

</form><br>

<div class="conteiner">
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


<?php  } ?>
</body>
</html>