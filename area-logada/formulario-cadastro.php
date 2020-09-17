<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Estude Medicina na Argentina hoje, inscrições abertas 2020</title>
		
		<!-- Meta tag Keywords -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		
		<meta name="description" content="Estude Medicina na Argentina hoje, inscrições abertas 2020</title>" />
		<meta name="copyright" content="© 2020 medicinarg" />
		<meta name="geo.region" content="BR-SP" />
		<meta name="geo.country" content="Brasil" />
		<!--Configurações do face -->
		<meta property="og:url" content="https://www.medicinarg.com.br" />
		<meta property="og:type" content="article">
		<meta property="og:title" content="Estude Medicina em Buenos Aires - Argentina" />
		<meta property="og:description"  content="Estude Medicina na Argentina hoje, inscrições abertas 2020</title>" />
		<meta property="og:image" content="https://www.medicinarg/imagens/logo-01.png" />
		<meta property="og:site_name" content="Universidade de Medicina na Argentina " />
		<link rel="canonical" href="https://www.medicinarg.com.br" />
		<link rel="icon" href="images/medicinarg.ico" />
		<link rel="apple-touch-icon" href="images/medicinarg.ico">	
		<!--// Meta tag Keywords -->
	    
		<!-- css files -->
		<link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
		<link rel="stylesheet" href="../css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
		<!-- //css files -->
		
		<link rel="stylesheet" href="../css/jquery.countdown.css" />

		<!--web font-->
		<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
		<!--//web font-->

	</head>

<body>


<!-- header -->
	<header>
	<!-- teste menu flutuante  -->
	<?php include_once ('../include/menu-lateral.php'); ?>	
		
		<div class="container">
			<!-- top header -->
			<section class="row top_header pt-3">
				<div class="col-lg-6"></div>
					<div class="col-lg-6 buttons">
						<p><i class="fas mr-1 fa-phone"></i> 11 96636-9795</p>
						<button type="button" class="btn btn-info btn-lg-block w3ls-btn px-4 text-capitalize mr-2" data-toggle="modal"
							aria-pressed="false" data-target="#exampleModal">
							Login
						</button>
						<button type="button" class="btn btn-info1 btn-lg-block w3ls-btn1 px-4 text-capitalize" data-toggle="modal"
							aria-pressed="false" data-target="#exampleModal1">
							Registro
						</button> 
					</div>
			</section>
			<!-- top header -->

			<!-- nav -->
			<nav class="navbar navbar-expand-lg navbar-light py-sm-4 py-2"> 
				<!-- logo -->
				<h1>
					<a class="navbar-brand" href="index.php"> <!-- <i class="fab fa-affiliatetheme"></i> -->
						medicinarg
					</a>
				</h1>
				<!-- //logo -->
				 <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button> 
				<!-- Menu das paginas -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto text-center">
						<li class="nav-item active  mr-lg-3">
							<a class="nav-link" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item mr-lg-3">
							<a class="nav-link" href="quem-somos.php">Quem Somos</a>
						</li>
						<li class="nav-item mr-lg-3">
							<a class="nav-link" href="faculdades.php">Faculdades</a>
						</li>
						
						<li class="nav-item mr-3">
							<a class="nav-link" href="contato.php">contato</a>
						</li>
						<!-- search --->
						<div class="search-bar-agileits">
							<div class="cd-main-header">
								<ul class="cd-header-buttons">
									<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
								</ul>
								<!-- cd-header-buttons -->
							</div>
							<!-- botao de pesquisa -->
								<?php include_once ('../include/pesquisa-banner-top.php'); ?>
						</div>
						<!-- search --->
					</ul>
				</div>
				<!-- //main nav -->
			</nav>
			<!-- //nav -->
		</div>
	</header>

<!-- //header -->

 <!-- inner banner -->
    <div class="inner_banner layer" id="home">
        <div class="container">
            <div class="agileinfo-inner">
                <h2 class="text-center text-white">
                    Contato
                </h2>
            </div>
        </div>
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item"> 
                <a href="#">Área Logada</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"> Cadastro</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

<!-- contact -->
<section class="contact py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> cadastro <span>Cadastro</span> </h3>
		
		<div class="form row py-5">
			<div class="col-lg-6 contact-form">
				<form name="MeuFormulario" method="post" action="envia-email.php">
					<fieldset>
						<legend>Formulário de contato</legend>
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="txtnome" placeholder="Digite seu Nome" style="text-transform:capitalize" required=""> 
								
								<span></span>
							</div> 
							<div class="styled-input">
								<input class="email" name="email" type="text" placeholder="Digite seu melhor e-mail" required="">
								<span></span>
							</div>
							<div class="styled-input">
								<input type="tel" name="fone"  placeholder="(DDD) + Celular" required="">	
								<span></span>
							</div>
							<div class="styled-input mt-5">
								<textarea name="mensagem"></textarea> 
								<label class="text" >Deixe aqui sua mensagem</label>
							</div>
							<span></span>
						</div>
							
							<input type="submit" value="enviar">
						
					</fieldset>
				</form>
			</div>
			<!--Propaganda -->
			<!-- <div class="col-lg-6 mt-lg-0 mt-5">
				<div class="bg-img">
					<div class="contact-layer">
						<h3 class="mb-3">Para qualquer informação entre em contato</h3>
						<p><i class="fas mr-2 fa-phone"></i> 11 96636-9795</p>
					</div>
				</div>
			</div> -->
		</div>
		<!-- mapa do escritorio-->
		<div class="map">
			 <p>mapa</a>
		</div>
	</div>
</section>	
<!-- //contact -->
		
	<!-- footer -->	
	<?php include_once ('../include/rodape.php'); ?>
	<!-- footer -->

	<!-- Login modal -->
	<?php include_once ('../include/modal-login.php'); ?>
	<!-- //Login modal -->

	<!-- Register modal -->
	<?php include_once ('../include/modal-registro.php'); ?>
	<!-- //Register modal -->


	<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
		<!-- //js -->	
		
		<!-- barra de pesquisa -->
		<script src="js/main.js"></script>
		<!-- //barra de pesquisa -->
		
		<!-- start-smoth-scrolling -->
		<script src="js/SmoothScroll.min.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
									
				$().UItoTop({ easingType: 'easeOutQuart' });
									
				});
		</script>
		<!-- //here ends scrolling icon -->

		<!-- start-smoth-scrolling -->

</body>
</html>