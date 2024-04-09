<?php session_start();
$security = isset($_SESSION['ativa']) ? TRUE : header("location: login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/saibamais.css">
    <link rel="icon" href="./images/redondo_pequeno.svg" alt="justgo" type="image/svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
<script src="https://unpkg.com/feather-icons"></script>    
<title>SaibaMais</title>
</head>
<body>
<?php if ($security) { ?>
    <a class='whatsapp' href="https://web.whatsapp.com/send?phone=5551981418383" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
<header>
    <nav>
        <p>Just Go Smart Access</p>
        <ul class="textheader">
            <li><a href="index.php">Home</a></li>
			<li><a href="#Produtos">Produtos</a></li>
			<li><a href="users.php">Gerenciar</a></li>
            <li><a href="saibamais.php">Bem vindo, <?php echo $_SESSION['nome']; ?>!</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
        </ul>
    </nav>
    <div class="boxinbox"> 

        
    </div>
</header>
<div>
    <h1 class="titulocards">Conheça mais sobre nós!</h1>
</div>

<div class="carrossel1">
    <div class="carrossel">
        <ul>
            <li>
                <img src="./images/justgo12.PNG" alt="Imagem 1">
            </li>
            <!-- -->
            <li>
                <img src="./images/justgo2.PNG" alt="Imagem 2">
            </li>
            <!-- -->
            <li>
                <img src="./images/justgo3.PNG" alt="Imagem 3">
            </li>
            <!-- -->
            <li>
                <img src="./images/justgo4.PNG" alt="Imagem 4">
            </li>
            <!-- -->
            <li>
                <img src="./images/justgo5.PNG" alt="Imagem 5">
            </li>
            <!-- -->
            <li>
                <img src="./images/justgo6.PNG" alt="Imagem 6">
            </li>
            <!-- -->
            <li>
                <img src="./images/justgo7.PNG" alt="Imagem 7">
            </li>
            <!-- -->
            <li>
                <img src="./images/justgo8.PNG" alt="Imagem 8">
            </li>
            <!-- -->
            <li>
                <img src="./images/justgo9.PNG" alt="Imagem 9">
            </li>
            <!-- -->
            <li>
                <img src="./images/justgo10.PNG" alt="Imagem 10">
            </li>
        </ul>
    </div>
</div>

<div class="conteudo1">


    <p>Nossa empresa oferece soluções em automação e controle de acesso inteligentes e seguras, que vão desde o controle de portas até o reconhecimento de pessoas em tempo real, permitindo o acesso a espaços e produtos de forma eficiente e automatizada. Com a nossa plataforma única, as pessoas podem gerenciar diversos produtos e serviços em um único ambiente, simplificando a gestão e reduzindo custos. Oferecemos produtos como Go Home (o controle de acesso a sua casa, a chave de casa), Go Door (o controle de acesso que é uma recepcionista virtual. Ideal para escritórios, consultórios e clínicas), Go Hotel (checkin/out e tudo que você puder consumir e aproveitar em um hotel, com segurança, conforto e conectado ao lobby e a qualquer serviço disponível pelo sistema), Go Air bnb (controle o acesso dos hóspedes e da limpeza, libere serviços ocasionais e participe seus convidados com dicas e sugestões locais que podem valer desconto em sua fatura e muito mais). Go Garagem (o controle de acesso que é o controle da sua garagem). 

Somos uma empresa de hardware e software, priorizamos a segurança e a confiabilidade das nossas soluções, desde a placa eletrônica até o aplicativo. Com nossas soluções, os clientes podem desfrutar de controle e autonomia eficientes a um custo de investimento atrativo, obtendo alto benefício com baixo custo.</p>
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
    <p class="copyright">Just Go Smart Access @ 2023</p>

</section>


<script>
    feather.replace()
</script>
<?php  } ?>
</body>
</html>