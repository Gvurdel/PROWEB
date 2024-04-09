<?php require_once "functions.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <script src="https://unpkg.com/feather-icons"></script>  
    <title>Login - Just Go Smart Access</title>
</head>
<body>
    <a class='whatsapp' href="https://web.whatsapp.com/send?phone=5551980141766" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>

    <div class="container">
        <div class="box">
            <div class="box1">
                <div class="esquerda">
                    <img src="./images/logo_just_go.jpg" alt="logo_just_go">
                </div>
                <div class="direita">
                    <div class="botao">Just Go Smart Access</div>
                    

                    <form class="login-container" action="" method="post">
                        <h2>Login</h2>
                        <div class="input-group">            
                            <input maxlength="40" minlength="5" type="email" name="email" placeholder="Informe seu E-mail" required>
                        </div>

                        <div class="input-group">
                            <input type="password" name="senha" placeholder="Senha" require>
                        </div>

                        <input id="botao" type="submit" name="acessar" value="ACESSAR" require>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
    <?php 
if (isset($_POST['acessar'])) {
    login($connect);
}
?>
    
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Endereço</h3>
                <p>Rua Fecomércio, 101</p>
                <p>Anchieta, POA</p>
            </div>
            <div class="footer-section">
                <h3>Telefone</h3>
                <p>+5551981418383</p>
                <p>+5551980141766</p>
            </div>
            <div class="footer-section">
                <h3>E-mail</h3>
                <p>daniel@justgosmartaccess.com.br</p>
                <p>comercial@justgosmartaccess.com.br</p>
            </div>
        </div>
        
    </footer>

    <script>
        feather.replace()
    </script>
    
</body>
</html>