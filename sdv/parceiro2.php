<?php
	include('./app/autoload.php');
	$i = Oracle::getInstance();
	$p = "./";
	$e = array(
		'receita.css',
		'parceiro2.css',
		'menu.css',
		'animations.css',
		'button.css'
	);
	$s = array(
		'js/jquery/jquery.js',
		'js/bootstrap/bootstrap.min.js',
		'js/libs/easing/easing.min.js',
		'js/libs/scroll.reveal/scroll.reveal.min.js',
		'js/libs/nice.scroll/nice.scroll.min.js',
		'js/libs/mouse.wheel/mouse.wheel.min.js',
		'js/oracle/oracle.js'
	);
?>
<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<?php include('header.php') ?>
	<body class="bg-dirty">
		<div class="bg-half"></div>
		<?php include('top.php') ?>
		<?php include('menu.php') ?>
		<header id="page-header">
			<div class="header-desktop">
				<div class="container">
					<div class="row row-header">
						<div class="col-lg-offset-1 col-lg-4 col-md-5 col-sm-12 col-xs-12">
							<h1 data-sr>Banana Assada com Bombom</h1>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="box-amout">
									<h2 data-sr='enter left'>Rendimento</h2>
									<h3 data-sr='enter right'>2 Porções</h3>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="box-time">
									<h2 data-sr='enter left'>Tempo de Preparo</h2>
									<h3 data-sr='enter right'>25 Minutos</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 center">
							<img src="./images/receita/receita_sample_img.jpg" class="img-responsive img-center img-main" />
						</div>
					</div>
				</div>
			</div>
			<div class="header-mobile">
				<div class="container">
					<div class="row row-header">
						<div class="col-lg-offset-1 col-lg-4 col-md-5 col-sm-12 col-xs-12">
							<h1 data-sr>Banana Assada com Bombom</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 center">
							<img src="./images/receita/receita_sample_img.jpg" class="img-responsive img-center img-main" />
						</div>
					</div>
				</div>
			</div>
		</header>
		<section id="infos-bottom">
			<div class="container">
				<div class="header-mobile">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="box-amout-mobile">
									<h2 data-sr='enter left'>Rendimento</h2>
									<h3 data-sr='enter right'>2 Porções</h3>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="box-time-mobile">
									<h2 data-sr='enter left'>Tempo de Preparo</h2>
									<h3 data-sr='enter right'>25 Minutos</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-footer">
					<div class="header-mobile">
						<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 padding-mobile" data-sr='enter top'>
							<a href="#" data-sr='enter right'><button class="btn">COMPARTILHAR</button></a>
							<div class="line-share"></div>
						</div>
					</div>
					<div class="col-lg-offset-1 col-lg-3 col-md-4 col-sm-12 hidden-xs" data-sr='enter top'>
						<a href="#" data-sr='enter right'><button class="btn button-hover-big" data-text="IMPRIMIR">IMPRIMIR</button></a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding-mobile" data-sr='enter top'>
						<div class="box-options">
							<div class="line">
								<div class="heart"></div>
							</div>
							<div class="labels">
								<div class="me">EU</div>
								<div class="we">NÓS</div>
								<div class="love">MEU AMOR</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 hidden-xs" data-sr='enter top'>
						<a href="#" data-sr='enter left'><button class="btn btn-share button-hover-big" data-text="COMPARTILHAR">COMPARTILHAR</button></a>
					</div>
				</div>
			</div>
		</section>
		<section class="reciple reciple-desktop">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-xs-12">
								<h2>INGREDIENTES</h2>
							</div>
						</div>
						<div class="row row-ingredientes">
							<div class="box-dots">
								<div class="bg-dots"></div>
								<div class="col-xs-12">
									<div class="box-options-inside">
										<div class="line-inside">
											<div class="dot-inside"></div>
										</div>
										<div class="labels-inside">
											<div class="me-inside">EU</div>
											<div class="love-inside">MEU AMOR</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-xs-4 col-right">
								</div>
								<div class="col-lg-8 col-md-8 col-xs-8 col-left">
									<ul class="margin-left" data-sr='enter right'>
										<li class="bullets-2">3 bombons Sonho de Valsa - <div class="comprar">comprar<span class="icon-cart"></span></div></li>
										<li class="bullets-2">1 colher (sopa) de amêndoas em palitos</li>
										<li class="bullets-2">1 colher (sopa) de uvas-passas claras</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-modo">
								<h2>MODO DE PREPARO</h2>
							</div>
						</div>
						<div class="row row-modo">
							<div class="box-dots">
								<div class="bg-dots bg-dots-margin"></div>
								<div class="col-lg-4 col-md-4 col-xs-4 col-right">
									<div class="half-box">
										<div class="half-line-inside line-dotted"></div>
										<div class="half-labels-inside-numbers">
											<div class="half-start-inside">1</div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 col-md-8 col-xs-8 col-left col-margin">
									<div class="half-box">
										<div class="half-line-inside line-right"></div>
										<div class="half-labels-inside-numbers">
											<div class="half-end-inside">2</div>
										</div>
									</div>
									<ul class="margin-left" data-sr='enter right'>
										<li>Distribua o Sonho de Valsa, as amêndoas e as uvas-passas.</li>
									</ul>
								</div>
								<div class="col-lg-4 col-md-4 col-xs-4 col-right">
									<div class="half-box">
										<div class="half-line-inside line-dotted"></div>
										<div class="half-labels-inside-numbers">
											<div class="half-start-inside">3</div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 col-md-8 col-xs-8 col-left col-margin">
									<div class="half-box">
										<div class="half-line-inside line-right"></div>
										<div class="half-labels-inside-numbers">
											<div class="half-end-inside">4</div>
										</div>
									</div>
									<ul class="margin-left" data-sr='enter right'>
										<li>Em um refratário pequeno, espalhe as bananas, polvilhe o açúcar.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row row-footer">
							<div class="col-xs-12">
								<div class="box-options-inside">
									<div class="line-inside">
										<div class="dot-inside"></div>
									</div>
									<div class="labels-inside-numbers">
										<div class="start-inside">5</div>
										<div class="end-inside">5</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 center">
								<p class="p-default" data-sr='enter bottom'>Em um refratário pequeno, <br>espalhe as bananas, polvilhe o açúcar.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="reciple reciple-mobile">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-xs-12">
								<h2>INGREDIENTES</h2>
							</div>
						</div>
						<div class="row row-ingredientes">
							<div class="col-lg-2 col-md-2 col-xs-2 col-right">
								<div class="half-box">
									<div class="half-line-inside line-dotted"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-start-inside half-start-inside-mobile">EU</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-xs-2 col-left col-margin"></div>
							<div class="col-lg-10 col-md-10 col-xs-10 col-left col-margin">
								<div class="half-box">
									<div class="half-line-inside line-right"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-end-inside half-end-inside-mobile">MEU AMOR</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 mobile-col-right">
								<ul class="margin-left mobile-right" data-sr='enter right'>
									<li>3 bombons Sonho de Valsa - comprar</li>
									<li>1 colher (sopa) de amêndoas em palitos</li>
									<li>1 colher (sopa) de uvas-passas claras</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-modo">
								<h2>MODO DE PREPARO</h2>
							</div>
						</div>
						<div class="row row-modo">
							<div class="col-lg-2 col-md-2 col-xs-2 col-right">
								<div class="half-box">
									<div class="half-line-inside line-dotted"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-start-inside">1</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-xs-2 col-left col-margin"></div>
							<div class="col-lg-10 col-md-10 col-xs-10 col-left col-margin">
								<div class="half-box">
									<div class="half-line-inside line-right"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-end-inside">2</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 mobile-col-left">
								<ul class="margin-right" data-sr='enter right'>
									<li>Distribua o Sonho de Valsa, as amêndoas e as uvas-passas.</li>
								</ul>
							</div>
							<div class="col-lg-2 col-md-2 col-xs-2 col-right">
								<div class="half-box">
									<div class="half-line-inside line-dotted"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-start-inside">3</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-xs-2 col-left col-margin"></div>
							<div class="col-lg-10 col-md-10 col-xs-10 col-left col-margin">
								<div class="half-box">
									<div class="half-line-inside line-right"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-end-inside">4</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 mobile-col-left">
								<ul class="margin-right" data-sr='enter right'>
									<li>Em um refratário pequeno, espalhe as bananas, polvilhe o açúcar.</li>
								</ul>
							</div>
						</div>
						<div class="row row-footer">
							<div class="col-xs-12">
								<div class="box-options-inside">
									<div class="line-inside">
										<div class="dot-inside"></div>
									</div>
									<div class="labels-inside-numbers">
										<div class="start-inside">5</div>
										<div class="end-inside">5</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 center">
								<p class="p-default" data-sr='enter bottom'>Em um refratário pequeno, <br/>espalhe as bananas, polvilhe o açúcar.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('scripts.php') ?>
	</body>
</html>