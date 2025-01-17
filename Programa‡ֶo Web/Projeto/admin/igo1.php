<?php session_start();
$security = isset($_SESSION['ativa']) ? TRUE : header("location: login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/igo1.css">
    <link rel="icon" href="./images/icon2.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
<script src="https://unpkg.com/feather-icons"></script>    
<title>Go Home</title>
</head>
<body>
<?php if ($security) { ?>

    <a class='whatsapp' href="https://web.whatsapp.com/send?phone=5551981418383" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
<header>
    <nav>
        <p>Just GO Smart Access </p>
        <ul class="textheader">
            <li><a href="index.php">Home</a></li>
			<li><a href="#Produtos">Produtos</a></li>
			<li><a href="users.php">Gerenciar</a></li>
            <li><a href="saibamais.php">Bem vindo, <?php echo $_SESSION['nome']; ?>!</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
        </ul>
    </nav>

</header>

<div>
    <h1 class="titulocards">iGo 1</h1>
</div>

<div class="conteudo">
    <div class="conteudo1">
        <p>O iGo1 é um dispositivo físico de comunicação usado em ambientes ou pontos críticos que necessitam de controle de fluxo ou gestão de acessos.</p>
        
    <figure>
        <img class="img_just_go" src="./images/justgo_redondo.jpg" alt="gohotel"type="image/jpg">
    </figure>
    <P>Aqui estão algumas das características-chave e vantagens deste sistema:</p>
        <h3>iGo 1</h3>
        <ul>
            <li>Uso de Smartphone</a>
            <li>Placas PCI e Antenas com Tecnologia Just Go Smart Access</li>     
            <li>Confiável e Eficiente</li>
            <li>Software de Monitoramento</li>
            <li>Relatórios Detalhados</li>
            <li>Alertas em Tempo Real</li>
            <li>Controle de presença de funcionários</li>
            <li>Conveniência e Eficiência</li>
            <li>Facilidade de Uso</li>
        </ul>
    </div>

    <div id="Produtos">
        <h1 class="produtosIGO">Produtos iGo</h1>
    </div>
    <selection class="produtos">
            <div class="cardprodutos">
            <i data-feather="radio"></i>
            <h2>iGo1 - Antena</h2>
            <p> Esta antena é compacta e fácil de instalar, permitindo que você obtenha controle e gestão de acessos.</p>
            <button class="botao2"><a href="igo1.php">Saiba mais</a></button>
        </div>
    
        <div class="cardprodutos">
            <i data-feather="rss"></i>
            <h2>iGo2 - PCI Placa</h2>
            <p>O iGo2 é um dispositivo de comunicação usado em ambientes e pontos que necessitam de controle de fluxo ou de acesso.</p>
            <button class="botao2"><a href="igo2.php">Saiba mais</a></button>
        </div>
    
        <div class="cardprodutos">
            <i data-feather="target"></i>
            <h2>iGo3 - Cookie</h2>
            <p>Para os clientes que querem moniotorar vagas de estacionamento in e out door. Sem cabos ou sinais luminosos! </p>
            <button class="botao2"><a href="igo3.php">Saiba mais</a></button>
        </div>
    </selection>
    
    
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
    <?php }?>

</body>
</html>