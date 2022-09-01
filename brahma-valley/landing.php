<?php
	include('./app/autoload.php');
	$t = "Brahma Valley - O sertanejo como você nunca viu";
	$i = Oracle::getInstance();
	$p = "./";
	$e = [
		'landing.css',
		'popups.css'
	];
	$s = [
		'js/jquery/jquery.js',
		'js/bootstrap/bootstrap.min.js',
		'js/libs/easing/easing.min.js',
		'js/libs/modernizr/modernizr.min.js',
		'js/libs/scroll.reveal/scroll.reveal.min.js',
		'js/libs/nice.scroll/nice.scroll.min.js',
		'js/libs/owl.carousel/owl.carousel.min.js',
		'js/libs/mouse.wheel/mouse.wheel.min.js',
		'js/objects/public/popup.js',
		'js/objects/public/cookie.js',
		'js/oracle/oracle.js'
	];
?>
<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<?php include('header.php') ?>
	<body>
		<?php include('top.php') ?>
		<section id="landing" class="cover">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 center">
						<img alt="Brahma Valley - O sertanejo como você nunca viu" src="images/landing/intro_logo.png" class="img-center img-landing img-responsive floating"/>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 center col-age">
						<h2 class="font-title">Você tem mais de <br/>18 anos?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 center">
						<a href="./home" class="btn-yes">
							<img alt="Sim" src="images/landing/intro_sim.png" class="img-yes animation-01" />
						</a>
					</div>
					<div class="col-xs-6 center">
						<a href="http://www.ambev.com.br/consumo-responsavel" class="img-no animation-02" target="_blank">
							<img alt="Não" src="images/landing/intro_nao.png"/>
						</a>
					</div>
				</div>
				<footer class="col-lg-12 center col-footer">
					<p>Usamos cookies para melhorar os nossos serviços.</p>
					<p>Continuando a navegação, você aceita o uso dos cookies,</p>
					<p><a id="btn-terms" href="#"><span class="hover-link-1">termos de uso</span></a> e <a id="btn-politics" href="#"><span class="hover-link-1">política de privacidade.</span></a></p>
				</footer>
			</div>
		</section>
		<?php include('popups.php') ?>
		<?php include('scripts.php') ?>
	</body>
</html>