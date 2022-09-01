<?php
	include('./app/autoload.php');
	$i = Oracle::getInstance();
	$t = "Brahma Valley - O sertanejo como você nunca viu";
	$p = "./";
	$e = [
		'index.css',
		'menu.css',
		'owl.css',
		'animations.css',
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
		'js/objects/public/tabs.js',
		'js/objects/public/menu.js',
		'js/oracle/oracle.js'
	];
?>
<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<?php include('header.php') ?>
	<body>
		<?php include('top.php') ?>
		<?php include('menu.php') ?>
		<header>
			<div id="over-header">
				<div id="left-decoration" data-sr></div>
				<div id="right-decoration" data-sr></div>
				<img alt="Brahma Valley - O sertanejo como você nunca viu" src="./images/index/index_logo.png" id="img-logo" class="img-responsive floating" data-sr/>
				<h1 class="font-title" data-sr>28 e 29 de novembro <br/> Jockey Club sp</h1>
				<div class="full-width">
					<a href="https://totalacesso.com/Shopping/Cart/834?_ga=1.121024008.1204067330.1442111381" target="_blank"><span class="btn-compre animation-04 font-title" data-sr>Compre agora seu ingresso</span></a>
				</div>
			</div>
			<div id="carousel" class="owl-carousel owl-theme">
				<div class="item bg-owl" style="background-image: url('./images/index/index_projota.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_gustavo_lima.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_lucas_lucco.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_henrique_e_diego.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_fernando_e_sorocaba.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_michel_telo.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_phillip_phillips.jpg')"></div>
			</div>
			<div id="carousel-mobile" class="owl-carousel owl-carousel-mobile owl-theme">
				<div class="item bg-owl" style="background-image: url('./images/index/index_mini_projota.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_mini_gustavo_lima.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_mini_lucas_lucco.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_mini_henrique_e_diego.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_mini_fernando_e_sorocaba.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_mini_michel_telo.jpg')"></div>
				<div class="item bg-owl" style="background-image: url('./images/index/index_mini_phillip_phillips.jpg')"></div>
			</div>
		</header>
		<section id="sobre">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 center">
						<h2 class="font-title" data-sr>Tudo sobre o <br/><big>Brahma Valley</big></h2>
						<p data-sr>Brahma Valley é um festival de música sertaneja como você nunca viu.  Dois dias de shows e atrações em três palcos simultâneos no Jockey Club SP divididos entre os maiores artistas da música sertaneja e grandes nomes de outros ritmos como o pop, o eletrônico, o funk, o hip hop e o rock, que juntos criarão mashups sensacionais que vão mexer com seus pés, sua emoção e sua imaginação. É o sertanejo como você nunca viu. Dias 28 e 29 de Novembro.</p>
						<p data-sr><u><a href="./sobre">Clique aqui</a></u> e fique por dentro de todos os detalhes do Brahma Valley.</p>
					</div>
				</div>
				<div class="row row-exp">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="https://www.facebook.com/events/1459167747722586/" target="_blank"><img alt="Facebook - Participe do Evento" src="./images/index/index_facebook.png" class="spacer-top animation-03" data-sr/></a>
						<div class="box-title" data-sr>
							<h3 class="font-title">Experiências</h3>
							<a href="./sobre#experiencias"><div class="tag animation-04">ver mais</div></a>
						</div>
						<ul>
							<a href="./sobre/brahma-valley-bar"><li class="animation-03 index-bar font-title" data-sr>Brahma Valley Bar</li></a>
							<a href="./sobre/food-court"><li class="animation-03 index-food-court font-title" data-sr>Food Court</li></a>
							<a href="./sobre/cavalo-valley"><li class="animation-03 index-cavalo-valley font-title" data-sr>Cavalo Valley</li></a>
							<a href="./sobre/roda-gigante"><li class="animation-03 index-roda-gigante font-title" data-sr>Roda Gigante</li></a>
						</ul>
					</div>
					<div class="col-lg-8 col-md-8 hidden-sm hidden-xs center">
						<div id="board" class="board-home" data-sr>
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<h2 class="font-title">INGRESSOS BRAHMA VALLEY</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4">
									<h3 class="font-title desactived-lote through">Lote Promocional</h2>
								</div>
								<div class="col-lg-4 col-md-4">
									<h3 class="font-title actived-lote">Primeiro Lote</h2>
								</div>
								<div class="col-lg-4 col-md-4">
									<h3 class="font-title desactived-lote">Segundo Lote</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6">
								</div>
								<div class="col-lg-3 col-md-3">
									<h4 class="font-title">Meia Entrada</h2>
								</div>
								<div class="col-lg-3 col-md-3">
									<h4 class="font-title">Inteira</h4>
								</div>
							</div>
							<div class="row row-table-price">
								<div class="col-lg-6 col-md-6">
									<h5 class="left">Arena</h5>
								</div>
								<div class="col-lg-3 col-md-3">
									<h5>R$ 100,00</h5>
								</div>
								<div class="col-lg-3 col-md-3">
									<h5>R$ 200,00</h5>
								</div>
							</div>
							<div class="row row-table-price">
								<div class="col-lg-6 col-md-6">
									<h5 class="left">Arena Vip</h5>
								</div>
								<div class="col-lg-3 col-md-3">
									<h5>R$ 240,00</h5>
								</div>
								<div class="col-lg-3 col-md-3">
									<h5>R$ 330,00</h5>
								</div>
							</div>
							<div class="row row-table-price">
								<div class="col-lg-6 col-md-6">
									<h5 class="left">Camatore Premium</h5>
								</div>
								<div class="col-lg-3 col-md-3">
									<h5>R$ 390,00</h5>
								</div>
								<div class="col-lg-3 col-md-3">
									<h5>R$ 480,00</h5>
								</div>
							</div>
							<div class="row row-table-price">
								<div class="col-lg-6 col-md-6">
									<h5 class="left">Camatore Brahma</h5>
								</div>
								<div class="col-lg-3 col-md-3">
									<h5>R$ 780,00</h5>
								</div>
								<div class="col-lg-3 col-md-3">
									<h5>R$ 870,00</h5>
								</div>
							</div>
							<div class="row row-table-price">
								<div class="col-lg-4 col-md-4">
									<a href="https://totalacesso.com/Shopping/Cart/834?_ga=1.121024008.1204067330.1442111381" target="_blank"><div class="btn-comprar-table animation-04">Comprar</div></a>
								</div>
								<div class="col-lg-8 col-md-8">
									<p>Conheça as <u><a href="./ingressos#conheca">vantagens exclusivas</a></u> da Arena VIP, Camarote Villa Country e Camarote Brahma</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-xs-12 hidden-md hidden-lg center board-mobile">
							<div class="row" >
								<div class="col-sm-12 col-xs-12">
									<h2 class="font-title" data-sr>INGRESSOS BRAHMA VALLEY</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<h3 class="font-title desactived-lote through" data-sr>Lote Promocional</h2>
								</div>
								<div class="col-sm-12 col-xs-12">
									<h3 class="font-title actived-lote" data-sr>Primeiro Lote</h2>
								</div>
								<div class="col-sm-12 col-xs-12">
									<h3 class="font-title desactived-lote" data-sr>Segundo Lote</h2>
								</div>
							</div>
							<div class="row row-table-price spacer-top">
								<div class="col-sm-12 col-xs-12">
									<h5 data-sr>Arena</h5>
								</div>
								<div class="col-sm-12 col-xs-12">
									<h6 data-sr>Meia Entrada - R$ 100,00</h6>
								</div>
								<div class="col-sm-12 col-xs-12">
									<h6 data-sr>Inteira - R$ 200,00</h6>
								</div>
							</div>
							<div class="row row-table-price">
								<div class="col-sm-12 col-xs-12">
									<h5 data-sr>Arena Vip</h5>
								</div>
								<div class="col-sm-12 col-xs-12">
									<h6 data-sr>Meia Entrada - R$ 240,00</h6>
								</div>
								<div class="col-sm-12 col-xs-12">
									<h6 data-sr>Inteira - R$ 330,00</h6>
								</div>
							</div>
							<div class="row row-table-price">
								<div class="col-sm-12 col-xs-12">
									<h5 data-sr>Camatore Premium</h5>
								</div>
								<div class="col-sm-12 col-xs-12">
									<h6 data-sr>Meia Entrada - R$ 390,00</h6>
								</div>
								<div class="col-sm-12 col-xs-12">
									<h6 data-sr>Inteira - R$ 480,00</h6>
								</div>
							</div>
							<div class="row row-table-price">
								<div class="col-sm-12 col-xs-12">
									<h5 data-sr>Camatore Brahma</h5>
								</div>
								<div class="col-sm-12 col-xs-12">
									<h6 data-sr>Meia Entrada - R$ 780,00</h6>
								</div>
								<div class="col-sm-12 col-xs-12">
									<h6 data-sr>Inteira - R$ 870,00</h6>
								</div>
							</div>
							<div class="row row-table-price">
								<div class="col-sm-12 col-xs-12">
									<a href="https://totalacesso.com/Shopping/Cart/834?_ga=1.121024008.1204067330.1442111381" target="_blank" data-sr><div class="btn-comprar-table animation-04">Comprar</div></a>
								</div>
								<div class="col-sm-12 col-xs-12">
									<p data-sr>Conheça as <u><a href="./ingressos#conheca">vantagens exclusivas</a></u> da Arena VIP, Camarote Villa Country e Camarote Brahma</p>
								</div>
							</div>
					</div>
				</div>
		</section>
		<section id="artistas">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 center">
						<div class="box-title" data-tabs="tabs">
							<h2 class="font-title">Artistas</h2>
							<a href="#option-nov-28" data-toggle="tab" class="tab-option"><div class="tab tab-start animation-04 actived">28 de novembro</div></a>
							<a href="#option-nov-29" data-toggle="tab" class="tab-option"><div class="tab tab-end tab-border animation-04">29 de novembro</div></a>
						</div>
					</div>
				</div>
				<div id="tabs" class="tab-content">
					<div id="option-nov-28" class="tab-pane active">
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/phillip-phillips"><img alt="Phillip Phillips" src="./images/index/artistas/index_phillip_phillips.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/henrique-e-diego"><img alt="Henrique e Diego" src="./images/index/artistas/index_henrique_e_diego.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/marcos-e-belutti"><img alt="Marcos e Belutti" src="./images/index/artistas/index_marcos_e_belutti.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/jads-e-jadson"><img alt="Jads e Jadson" src="./images/index/artistas/index_jads_e_jadson.jpg" class="animation-05" data-sr/></a>
							</div>
						</div>
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/victor-e-leo"><img alt="Victor e Leo" src="./images/index/artistas/index_victor_e_leo.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/mc-guime"><img alt="MC Guime" src="./images/index/artistas/index_mc_guime.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/thaeme-e-thiago"><img alt="Thaeme e Thiago" src="./images/index/artistas/index_thaeme_e_thiago.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/bruninho-e-davi"><img alt="Bruninho e Davi" src="./images/index/artistas/index_bruninho_e_davi.jpg" class="animation-05" data-sr/></a>
							</div>
						</div>
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/joao-neto-e-frederico"><img alt="João Neto e Frederico" src="./images/index/artistas/index_joao_neto_e_frederico.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/carlos-e-jader"><img alt="Carlos e Jader" src="./images/index/artistas/index_carlos_e_jader.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/bob-sinclar"><img alt="Bob Sinclar"src="./images/index/artistas/index_bob_sinclar.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/ben-miller-band"><img alt="Ben Miller" src="./images/index/artistas/index_ben_miller.jpg" class="animation-05" data-sr/></a>
							</div>
						</div>
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/make-u-sweat-28"><img alt="Make u Sweat" src="./images/index/artistas/index_make_u_sweat.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/anitta"><img alt="Anitta" src="./images/index/artistas/index_anitta.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/negra-li"><img alt="Negra Li" src="./images/index/artistas/index_negra_li.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/breno-e-caio-cezar"><img alt="Breno e Caio Cezar" src="./images/index/artistas/index_breno_e_caio_cezar.jpg" class="animation-05" data-sr/></a>
							</div>
						</div>
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/luscas-fresno"><img alt="Lucas Fresno" src="./images/index/artistas/index_fresno.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/thiago-abravanel"><img alt="Thiago Abravanel" src="./images/index/artistas/index_thiago_abravanel.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/renato-teixeira"><img alt="Renato Teixeira" src="./images/index/artistas/index_renato_teixeira.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/mato-grosso-e-mathias"><img alt="Mato Grosso e Mathias" src="./images/index/artistas/index_mato_grosso_e_mathias.jpg" class="animation-05" data-sr/></a>
							</div>
						</div>
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<img alt="Artista Surpresa" src="./images/index/artistas/index_surpresa.jpg" class="animation-05 pointer" data-sr/>
							</div>
						</div>
					</div>
					<div id="option-nov-29" class="tab-pane">
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/henrique-e-juliano"><img alt="Henrique e Juliano" src="./images/index/artistas/index_henrique_e_juliano.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/fernando-e-sorocaba"><img alt="Fernando e Sorocaba" src="./images/index/artistas/index_fernando_e_sorocaba.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/michel-telo"><img alt="Michel Teló" src="./images/index/artistas/index_michel_telo.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/colbie-caillat"><img alt="Colbie Caillat" src="./images/index/artistas/index_colbie_caillat.jpg" class="animation-05" data-sr/></a>
							</div>
						</div>
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/make-u-sweat-29"><img alt="Make u Sweat" src="./images/index/artistas/index_make_u_sweat.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/chris-weaver-band"><img alt="Chris Weaver Band" src="./images/index/artistas/index_chris_weaver.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/lucas-lucco"><img alt="Lucas Lucco" src="./images/index/artistas/index_lucas_lucco.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/gusttavo-lima"><img alt="Gusttavo Lima" src="./images/index/artistas/index_gustavo_lima.jpg" class="animation-05" data-sr/></a>
							</div>
						</div>
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/chitaozinho-e-xororo"><img alt="Chitãozinho e Xororó" src="./images/index/artistas/index_chitaozinho_e_xororo.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/joao-bosco-e-vinicius"><img alt="João Bosco e Vinicius" src="./images/index/artistas/index_joao_bosco_e_vinicius.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/jorge-ben-jor"><img alt="Jorge Ben Jor" src="./images/index/artistas/index_jorge_ben_jor.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/rominho"><img alt="Rominho" src="./images/index/artistas/index_rominho.jpg" class="animation-05" data-sr/></a>
							</div>
						</div>
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/dj-tartaruga"><img alt="Dj Tartaruga" src="./images/index/artistas/index_dj_tartaruga.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/projota"><img alt="Projota" src="./images/index/artistas/index_projota.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/mr-catra"><img alt="Mr Catra" src="./images/index/artistas/index_mr_catra.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/ludmilla"><img alt="Ludmilla" src="./images/index/artistas/index_ludmilla.jpg" class="animation-05" data-sr/></a>
							</div>
						</div>
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/gabriel-o-pensador"><img alt="Gabriel o Pensador" src="./images/index/artistas/index_gabriel_pensador.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/fiduma-e-jeca"><img alt="Fiduma e Jeca" src="./images/index/artistas/index_fiduma_e_jeca.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/gabi-luthai"><img alt="Gabi Luthai" src="./images/index/artistas/index_gabi_luthai.jpg" class="animation-05" data-sr/></a>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/bruna-viola"><img alt="Bruna Viola" src="./images/index/artistas/index_bruna_viola.jpg" class="animation-05" data-sr/></a>
							</div>
						</div>
						<div class="row row-artists">
							<div class="col-lg-3 col-md-6 col-sm-6 center">
								<a href="./artistas/jair-oliveira-e-luciana-mello"><img alt="Jair Oliveira e Luciana Mello" src="./images/index/artistas/index_jair_oliveira_e_luciana_mello.jpg" class="animation-05" data-sr/></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('footer.php') ?>
		</section>
		<?php include('popups.php') ?>
		<?php include('scripts.php') ?>
	</body>
</html>