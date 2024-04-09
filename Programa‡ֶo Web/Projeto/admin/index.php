<?php session_start();
$security = isset($_SESSION['ativa']) ? TRUE : header("location: login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/principal.css">
    <link rel="icon" href="./images/redondo_pequeno.svg" alt="justgo" type="image/svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://unpkg.com/feather-icons"></script>    
<title>Just GO Smart Aceess</title>
</head>
<body>

<?php if ($security) { ?>
    
    <a class='whatsapp' href="https://web.whatsapp.com/send?phone=5551980141766" target="_blank">
    <i class="fa fa-whatsapp"></i>
</a>

<header>
    <nav>
        <p>Just GO Smart Access</p>
        <ul class="textheader">
            <li><a href="index.php">Home</a></li>
			<li><a href="#Produtos">Produtos</a></li>
			<li><a href="users.php">Gerenciar</a></li>
            <li><a href="saibamais.php">Bem vindo, <?php echo $_SESSION['nome']; ?>!</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
    <div class="boxinbox"> 
        
        <button class="botao1"><a href="saibamais.php">Saiba Mais</a></button>
    </div>

</header>

<div id="Servicos">
    <h2 class="titulocards">Descubra tudo que Just Go faz por você!</h2>
</div>
<selection class="pacotes">
        <div class="card"><a href="gohome.php">
            <img class="imagecard" src="./images/justgo9.PNG" alt="gohome" type="image/svg">
            <div class="card1">
                <h1>Go Home</h1>
                <ul>
                    <li><i data-feather="radio"></i>iGo1</li>
                    <li><i data-feather="rss"></i>iGo2</li>
                    <li><i data-feather="target"></i>--</li>
                </ul>
            </div>
        </a></div>
        <div class="card"><a href="godoor.php">
            <img class="imagecard" src="./images/justgo3.PNG" alt="gohome" type="image/svg">
            <div class="card1">
                <h1>Go Door</h1>
                <ul>
                    <li><i data-feather="radio"></i>iGo1</li>
                    <li><i data-feather="rss"></i>iGo2</li>
                    <li><i data-feather="target"></i>--</li>
                </ul>
            </div>
        </a></div>
        <div class="card"><a href="gohotel.php">
            <img class="imagecard" src="./images/justgo8.PNG" alt="gohome" type="image/svg">
            <div class="card1">
                <h1>Go Hotel</h1>
                <ul>
                    <li><i data-feather="radio"></i>iGo1</li>
                    <li><i data-feather="rss"></i>iGo2</li>
                    <li><i data-feather="target"></i>iGo3</li>
                </ul>
            </div>
        </a></div>
        <div class="card"><a href="goairbnb.php">
            <img class="imagecard" src="./images/justgo10.PNG" alt="gohome" type="image/svg">
            <div class="card1">
                <h1>Go AirBnb</h1>
                <ul>
                    <li><i data-feather="radio"></i>iGo1</li>
                    <li><i data-feather="rss"></i>iGo2</li>
                    <li><i data-feather="target"></i>--</li>
                </ul>
            </div>
        </a></div>
    </selection>
    
    <selection class="pacotes">
        <div class="card"><a href="gogarage.php">
            <img class="imagecard" src="./images/justgo4.PNG" alt="gohome" type="image/svg">
            <div class="card1">
                <h1>Go Garage</h1>
                <ul>
                    <li><i data-feather="radio"></i>iGo1</li>
                    <li><i data-feather="rss"></i>iGo2</li>
                    <li><i data-feather="target"></i>--</li>
                </ul>
            </div>
        </a></div>
        <div class="card"><a href="gotimeclock.php">
            <img class="imagecard" src="./images/justgo2.PNG" alt="gohome" type="image/svg">
            <div class="card1">
            <h1>Go Time Clock</h1>
            <ul>
                <li><i data-feather="radio"></i>iGo1</li>
                <li><i data-feather="rss"></i>iGo2</li>
                <li><i data-feather="target"></i>--</li>
            </ul>
            </div>
        </a></div>
        <div class="card"><a href="gogym.php">
            <img class="imagecard" src="./images/justgo12.PNG" alt="gohome" type="image/svg">
            <div class="card1">
            <h1>Go Gym</h1>
            <ul>
                <li><i data-feather="radio"></i>iGo1</li>
                <li><i data-feather="rss"></i>iGo2</li>
                <li><i data-feather="target"></i>iGo3</li>
            </ul>
            </div>
        </a></div>
        <div class="card"><a href="gohospital.php">
            <img class="imagecard" src="./images/justgo11.PNG" alt="gohome" type="image/svg">
            <div class="card1">
            <h1>Go Hospital</h1>
            <ul>
                <li><i data-feather="radio"></i>iGo1</li>
                <li><i data-feather="rss"></i>iGo2</li>
                <li><i data-feather="target"></i>iGo3</li>
            </ul>
            </div>
        </a></div>
    </selection>
    
    <selection class="pacotes">
        <div class="card"><a href="goticket.php">
            <img class="imagecard" src="./images/justgo5.PNG" alt="gohome" type="image/svg">
            <div class="card1">
            <h1>Go Ticket</h1>
            <ul>
                <ul>
                    <li><i data-feather="radio"></i>iGo1</li>
                    <li><i data-feather="rss"></i>iGo2</li>
                    <li><i data-feather="target"></i>iGo3</li>
            </ul>
            </div>
        </a></div>
    
        <div class="card"><a href="goshop.php">
            <img class="imagecard" src="./images/justgo6.PNG" alt="gohome" type="image/svg">
            <div class="card1">
            <h1>Go Shop</h1>
            <ul>
                <li><i data-feather="radio"></i>iGo1</li>
                <li><i data-feather="rss"></i>iGo2</li>
                <li><i data-feather="target"></i>--</li>
            </ul>
            </div>
        </a></div>
    
        <div class="card"><a href="gopark.php">
            <img class="imagecard" src="./images/justgo7.PNG" alt="gohome" type="image/svg">
            <div class="card1">
            <h1>Go Park</h1>
            <ul>
                <li><i data-feather="radio"></i>iGo1</li>
                <li><i data-feather="rss"></i>iGo2</li>
                <li><i data-feather="target"></i>iGo3</li>
            </ul>
            </div>
        </a></div>
    </selection>
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
    

<?php  } ?>

</body>
</html>