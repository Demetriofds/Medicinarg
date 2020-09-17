<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Estude Medicina na Argentina hoje, inscrições abertas 2020</title>

		<!-- Meta tag Keywords -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">

		<meta name="description" content="Estude Medicina na Argentina hoje, inscrições abertas 2020" />
		<meta name="copyright" content="© 2020 medicinarg" />
		<meta name="geo.region" content="BR-SP" />
		<meta name="geo.country" content="Brasil" />
		<!--Configurações do face -->
		<meta property="og:url" content="https://www.medicinarg.com.br" />
		<meta property="og:type" content="article">
		<meta property="og:title" content="Estude Medicina em Buenos Aires - Argentina" />
		<meta property="og:description" content="Estude Medicina na Argentina hoje, inscrições abertas 2020" />
		<meta property="og:image" content="https://www.medicinarg/imagens/logo-01.png" />
		<meta property="og:site_name" content="Universidade de Medicina na Argentina " />
		<link rel="canonical" href="https://www.medicinarg.com.br" />
		<link rel="apple-touch-icon" href="images/medicinarg.ico">
		<link rel="icon" href="images/medicinarg.ico" />

		<!--// Meta tag Keywords -->

		<!-- css files -->
		<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all"> <!-- Style-CSS -->
		<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
		<!-- //css files -->

		<!--web font-->
		<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
		<!--//web font-->

	</head>

	<body>

		<!-- header -->
		<header>
			<!-- teste menu flutuante  -->
			<?php include_once ('include/menu-lateral.php'); ?>
			<div class="container">
				<!-- top header -->
				<section class="row top_header pt-3">
					<div class="col-lg-6"></div>

						<div class="col-lg-6 buttons">

							<!--telefone do topo-->
							<p><i class="fas mr-1 fa-phone"></i> 11 96636-9795</p>
							<!-- botoes de login-senha e registro -->
							<?php include_once ('include/botoes-top.php'); ?>
							<!-- botoes -->

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
								<?php include_once ('include/pesquisa-banner-top.php'); ?>

							</div>
							<!-- search --->
						</ul>
					</div>
					<!-- //main nav -->
				</nav>
				<!-- //nav -->
			</div>
		</header>


		<!-- banner -->
		<?php include_once ('include/banner.php'); ?>
		<!-- //banner -->

		<!-- bem vindo-->
		<?php include_once ('include/bem-vindo.php'); ?>
		<!-- bem vindo -->

		<!-- botoes-bem vindo -->
		<?php include_once ('include/botoes-bem-vindo.php'); ?>
		<!-- //botoes bem vindo -->

		<!-- professores -->
		<!-- team -->
		<?php include_once ('include/alunos-academicos.php'); ?>
		<!-- //team -->
		<!-- //professores -->

		<!-- footer -->
		<?php include_once ('include/rodape.php'); ?>
		<!-- footer -->

		<!-- Login modal -->
		<?php include_once ('include/modal-login.php'); ?>
			<!-- //Login modal -->



		<!-- Register modal -->
		<?php include_once ('include/modal-registro.php'); ?>
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
