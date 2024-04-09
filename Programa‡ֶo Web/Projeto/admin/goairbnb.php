<?php session_start();
$security = isset($_SESSION['ativa']) ? TRUE : header("location: login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/goairbnb.css">
    <link rel="icon" href="./images/redondo_pequeno.svg" alt="justgo" type="image/svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
<script src="https://unpkg.com/feather-icons"></script>    
<title>Go Air bnb</title>
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
    <h1 class="titulocards">Go AirBnb</h1>
</div>

<div class="conteudo">
    <div class="conteudo1">
        <p>Neste caso, estamos falando de um sistema de controle de presença baseado na plataforma Just Go Smart Access, especificamente projetado para ambientes hospitalares. Este é uma solução moderna que utiliza tecnologia avançada para aprimorar e automatizar o processo de controle de presença de médicos, enfermeiros, administradores e outros profissionais de saúde e funcionários do hospital.</p>

    <figure>
        <img class="img_just_go" src="./images/justgo_redondo.jpg" alt="gohotel"type="image/jpg">
    </figure>

    <P>Aqui estão algumas das características-chave e vantagens deste sistema:</p>
        <h3>Go AirBnb</h3>
        <ul>
            <li>Uso de Smartphone</li>
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
        <h2 class="titulocards">Serviços</h2>
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
        <p class="copyright">Just Go Smart Access @ 2023</p>
    </section>
    
    <script>
        feather.replace()
    </script>
    <?php  } ?>
</body>
</html>