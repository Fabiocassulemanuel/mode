<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mode Social</title>
	<meta charset="utf-8">
	<!-- Cabeçalhos de segurança -->
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src 'self'; script-src 'self' https://trusted.cdn.com;">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="X-Frame-Options" content="DENY">
    <meta http-equiv="X-XSS-Protection" content="1; mode=block">
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chaves,do,meu,site">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
	<!--GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css?family=Open-Sans:300;400;700 rel="stylesheet">
	<!-- FIM GOOGLE FONTS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<meta name="description" content="Descrição do meu website">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
</head>
<body>
	
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'depoimentos':
				echo '<target target="depoimentos" />';
				break;
			
			case 'servicos':
				echo '<target target="servicos" />';
				break;
		}
	?>

	<header>
		<div class="center">
			<div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>Cursos">Cursos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>Cursos">Cursos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a  realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="overlay-menu" id="overlay-menu"></div>
		<div class="clear"></div>	
		</div><!--center-->
	</header>

<div class="container-principal">
<?php
	
	if(file_exists('pages/'.$url.'.php')){
		include('pages/'.$url.'.php');
	}else{
		//podems fazer o que quiser a pagina não existe
		if ($url != 'depoimentos' && $url !='servicos'){
			$pagina404 = true;
			include('pages/404.php');
		}else{
			include('pages/home.php');
		}
		
	}
?>
</div>

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados</p>
			<div class="interface">
			<div class="line">
				<div class="flex">
					<div class="social">
						<a href="https://www.instagram.com/fabiocassulemanuel6/"><button><i class="fa fa-instagram"></i></button></a>
						
						<a href="https://www.youtube.com/@fabiocassulemanuel"><button><i class="fa fa-youtube"></i></button></a>
						
						<a href="https://web.facebook.com/fabiocassulemanuel"><button><i class="fa fa-facebook"></i></button></a>
					 </div><!--social-->
				 </div><!--flex-->
			</div><!--line-->
		
			<div class="line borda">
				<p><i class="fa fa-inbox"></i> <a href="mailto:fabiocassulemanuelc@gmail.com">fabiocassulemanuelc@gmail.com</a></p>
			</div><!--line-->
		</div><!--interface-->
		</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<?php
		if ($url == 'home' || $url == 'contato'){
	?>
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php } ?>
</body>
</html>