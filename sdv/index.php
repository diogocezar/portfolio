<?php
	include('./app/autoload.php');
	$i = Oracle::getInstance();
	$p = "./";
	$e = array(
		'index.css',
		'menu.css',
		'popups.css',
		'animations.css',
		'square.css',
		'button.css',
		'libs/select2.css'
	);
	$s = array(
		'js/jquery/jquery.js',
		'js/bootstrap/bootstrap.min.js',
		'js/libs/easing/easing.min.js',
		'js/libs/scroll.reveal/scroll.reveal.min.js',
		'js/libs/nice.scroll/nice.scroll.min.js',
		'js/libs/mouse.wheel/mouse.wheel.min.js',
		'js/libs/tweenmax/tweenmax.min.js',
		'js/libs/select2/select2.min.js',
		'js/oracle/oracle.js',
		'js/objects/public/index.js',
		'js/objects/public/square.js',
	);
?>
<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<?php include('header.php') ?>
	<body>
		<?php include('top.php') ?>
		<?php include('menu.php') ?>
		<header id="page-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="box-relative-header">
							<div class="box-absolute-header">
								<h1 data-sr='enter top hustle 50px over 2.5s reset'>Receitas <br/>a Dois</h1>
							</div>
						</div>
						<h2 data-sr='enter bottom hustle 50px over 2.5s reset'>Dividir a cozinha com quem você ama pode tornar esse momento ainda mais especial. Por isso, Sonho de Valsa criou o primeiro guia de receitas feito especialmente para o <strong>preparo a dois.</strong></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<h3 class="btn-action-down" data-sr>Conheça as Receitas</h3>
						<div id="btn-down" class="animateBtnDown btn-action-down" data-sr></div>
					</div>
				</div>
			</div>
		</header>
		<section id="search" class="bg-dirty">
			<header id="search-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-xs-12">
							<div id="box-search" data-sr>
								<div id="icon-zoom"></div>
								<input type="text" class="input-search" placeHolder="PROCURAR RECEITA"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-offset-2 col-lg-4 col-md-offset-2 col-md-4 col-sm-6 col-xs-6">
							<div id="box-filter" data-sr>
							    <select class="select-filter filter-sm">
							        <option selected>FILTRAR RECEITAS</option>
							        <option>TIPO 1</option>
							        <option>TIPO 2</option>
							        <option>TIPO 3</option>
							    </select>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
							<a href="./enviar" data-sr><button class="btn-send button-hover" data-text="ENVIAR SUA RECEITA">ENVIAR SUA RECEITA</button></a>
						</div>
					</div>
				</div>
			</header>
			<section id="results" class="results-desktop">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center col-result col-margin-top">
							<div id="q1" class="label-item label-bottom-left shadow-2 iamhere type1">
								<span class="l1"></span>
								<span class="l2"></span>
								<span class="l3"></span>
								<span class="l4"></span>
								<div class="label-bottom-left-box">
									<div class="label-bottom">Banana Assada com Bombom</div>
								</div>
							</div>
							<div class="img-wrapper" data-sr='enter bottom, over 2s'>
    							<img src="images/receitas/img_01.jpg" class="img-responsive img-center img-grayscale animation-03" alt="Banana Assada com Bombom" />
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center col-result">
							<div id="q2" class="label-item label-top-right shadow-1 iamhere type2">
								<span class="l1"></span>
								<span class="l2"></span>
								<span class="l3"></span>
								<span class="l4"></span>
								<div class="label-top-right-box">
									Biscoito de Natal
								</div>
							</div>
							<div class="img-wrapper" data-sr='enter bottom, over 2s'>
								<img src="images/receitas/img_02.jpg" class="img-responsive img-center img-grayscale animation-03" alt="Biscoito de Natal" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center col-result">
							<div id="q3" class="label-item label-bottom-right shadow-1 iamhere type2">
								<span class="l1"></span>
								<span class="l2"></span>
								<span class="l3"></span>
								<span class="l4"></span>
								<div class="label-bottom-right-box">
									<div class="label-bottom-right-box">
										<div class="label-bottom">Bolinho de Chuva</div>
									</div>
								</div>
							</div>
							<div class="img-wrapper" data-sr='enter bottom, over 2s'>
    							<img src="images/receitas/img_03.jpg" class="img-responsive img-center img-grayscale animation-03" alt="Bolinho de Chuva" />
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center col-result col-margin-top">
							<div id="q4" class="label-item label-top-left shadow-2 iamhere type1">
								<span class="l1"></span>
								<span class="l2"></span>
								<span class="l3"></span>
								<span class="l4"></span>
								<div class="label-top-left-box">
									Biscoito Foleado
								</div>
							</div>
							<div class="img-wrapper" data-sr='enter bottom, over 2s'>
								<img src="images/receitas/img_04.jpg" class="img-responsive img-center img-grayscale animation-03" alt="Biscoito Foleado" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center col-result col-margin-top">
							<div id="q5" class="label-item label-top-left shadow-2 iamhere type1">
								<span class="l1"></span>
								<span class="l2"></span>
								<span class="l3"></span>
								<span class="l4"></span>
								<div class="label-top-left-box">
									Bolo Natalino Com Frutas
								</div>
							</div>
							<div class="img-wrapper" data-sr='enter bottom, over 2s'>
    							<img src="images/receitas/img_05.jpg" class="img-responsive img-center img-grayscale animation-03" alt="Banana Assada com Bombom" />
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center col-result">
							<div id="q6" class="label-item label-top-left shadow-1 iamhere type1">
								<span class="l1"></span>
								<span class="l2"></span>
								<span class="l3"></span>
								<span class="l4"></span>
								<div class="label-top-left-box">
									Bolo Farofa de Pera
								</div>
							</div>
							<div class="img-wrapper" data-sr='enter bottom, over 2s'>
								<img src="images/receitas/img_06.jpg" class="img-responsive img-center img-grayscale animation-03" alt="Biscoito de Natal" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center col-result col-margin-top">
							<div id="q7" class="label-item label-top-right shadow-2 iamhere type2">
								<span class="l1"></span>
								<span class="l2"></span>
								<span class="l3"></span>
								<span class="l4"></span>
								<div class="label-top-right-box">
									Bolo Natalino Com Frutas
								</div>
							</div>
							<div class="img-wrapper" data-sr='enter bottom, over 2s'>
    							<img src="images/receitas/img_07.jpg" class="img-responsive img-center img-grayscale animation-03" alt="Banana Assada com Bombom" />
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center col-result">
							<div id="q8" class="label-item label-top-right shadow-2 iamhere type2">
								<span class="l1"></span>
								<span class="l2"></span>
								<span class="l3"></span>
								<span class="l4"></span>
								<div class="label-top-right-box">
									Bolo Farofa de Pera
								</div>
							</div>
							<div class="img-wrapper" data-sr='enter bottom, over 2s'>
								<img src="images/receitas/img_08.jpg" class="img-responsive img-center img-grayscale animation-03" alt="Biscoito de Natal" />
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="results" class="results-mobile">
				<div class="container">
					<div class="row row-item-mobile">
						<div class="col-xs-12">
							<div class="label-mobile-left shadow-2" data-sr='enter bottom, over 1s'>
								Bolo Natalino Com Frutas
							</div>
							<div class="img-wrapper-mobile" data-sr='enter bottom, over 2s'>
    							<img src="images/receitas/img_01.jpg" class="img-right-mobile img-grayscale animation-03" alt="Banana Assada com Bombom" />
							</div>
						</div>
					</div>
					<div class="row row-item-mobile">
						<div class="col-xs-12">
							<div class="label-mobile-right shadow-1" data-sr='enter bottom, over 1s'>
								Bolo Natalino Com Frutas
							</div>
							<div class="img-wrapper-mobile" data-sr='enter bottom, over 2s'>
    							<img src="images/receitas/img_04.jpg" class="img-left-mobile img-grayscale animation-03" alt="Banana Assada com Bombom" />
							</div>
						</div>
					</div>
					<div class="row row-item-mobile">
						<div class="col-xs-12">
							<div class="label-mobile-left shadow-2" data-sr='enter bottom, over 1s'>
								Bolo Natalino Com Frutas
							</div>
							<div class="img-wrapper-mobile" data-sr='enter bottom, over 2s'>
    							<img src="images/receitas/img_01.jpg" class="img-right-mobile img-grayscale animation-03" alt="Banana Assada com Bombom" />
							</div>
						</div>
					</div>
					<div class="row row-item-mobile">
						<div class="col-xs-12">
							<div class="label-mobile-right shadow-1" data-sr='enter bottom, over 1s'>
								Bolo Natalino Com Frutas
							</div>
							<div class="img-wrapper-mobile" data-sr='enter bottom, over 2s'>
    							<img src="images/receitas/img_04.jpg" class="img-left-mobile img-grayscale animation-03" alt="Banana Assada com Bombom" />
							</div>
						</div>
					</div>
					<div class="row row-item-mobile">
						<div class="col-xs-12">
							<div class="label-mobile-left shadow-2" data-sr='enter bottom, over 1s'>
								Bolo Natalino Com Frutas
							</div>
							<div class="img-wrapper-mobile" data-sr='enter bottom, over 2s'>
    							<img src="images/receitas/img_01.jpg" class="img-right-mobile img-grayscale animation-03" alt="Banana Assada com Bombom" />
							</div>
						</div>
					</div>
					<div class="row row-item-mobile">
						<div class="col-xs-12">
							<div class="label-mobile-right shadow-1" data-sr='enter bottom, over 1s'>
								Bolo Natalino Com Frutas
							</div>
							<div class="img-wrapper-mobile" data-sr='enter bottom, over 2s'>
    							<img src="images/receitas/img_04.jpg" class="img-left-mobile img-grayscale animation-03" alt="Banana Assada com Bombom" />
							</div>
						</div>
					</div>
				</div>
			</section>
			<footer id="load-more">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
							<button class="btn-more" data-sr='no reset'>CARREGAR MAIS RECEITAS</button>
						</div>
					</div>
				</div>
			</footer>
		</section>
		<?php include('scripts.php') ?>
		<script src="select2.min.js"></script>
		<script>
			$(".select-filter").select2({
				minimumResultsForSearch: -1,
				width: '100%'
			});
		</script>
	</body>
</html>