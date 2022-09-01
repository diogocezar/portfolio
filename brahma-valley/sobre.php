<?php
	include('./app/autoload.php');
	$i = Oracle::getInstance();
	$t = "Brahma Valley - Sobre o festival";
	if(!empty($_GET['exp']))
		$p = "../";
	else
		$p = "./";
	$e = [
		'sobre.css',
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
		'js/objects/public/menu.js',
		'js/objects/public/experiences.js',
		'js/oracle/oracle.js'
	];
?>
<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<?php include('header.php') ?>
	<body>
		<?php include('top.php') ?>
		<?php include('menu.php') ?>
			<section id="sobre">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 center">
							<h2 class="font-title" data-sr>Sobre o BrahmaValley</h2>
							<h3 class="font-title" data-sr>Festival Sertanejo</h3>
						</div>
					</div>
					<div class="row row-sobre">
						<div class="col-lg-7 col-lg-offset-1 col-md-12 col-sm-12 center">
							<div class="embed-responsive embed-responsive-16by9 video-artist" data-sr>
								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gLIn9ta_Yzk" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<p data-sr>Brahma Valley é um festival de música sertaneja diferente de tudo que você já viu. Serão dois dias de shows e atrações em três palcos simultâneos divididos entre os maiores artistas da música sertaneja e grandes nomes de outros ritmos como o pop, o funk, o hip hop, o eletrônico e o rock, que juntos criarão mashups sensacionais. É o sertanejo como você nunca viu. Dias 28 e 29 de Novembro no Jockey Club SP.</p>
							<a href="https://www.facebook.com/events/1459167747722586/" target="_blank"><img alt="Facebook - Participe do Evento" src="<?php echo $p ?>images/index/index_facebook.png" class="spacer-top animation-03" data-sr/></a>
						</div>
					</div>
				</div>
			</section>
			<section id="mapa">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 center">
							<h2 class="font-title" data-sr>BrahmaValley - Mapa Ilustrado</h2>
							<p data-sr>Mais de 100 mil m2 de muita festa com três palcos simultâneos, diversos pontos de alimentação e grandes estruturas repletas de performances artísticas.</p>
						</div>
					</div>
					<div class="row row-mapa">
						<div class="col-lg-12 center">
							<img alt="Mapa Ilustrado do Evento" src="<?php echo $p ?>images/sobre/sobre_mapa_ilustrado.jpg" class="img-responsive" data-sr/>
						</div>
					</div>
				</div>
			</section>
			<section id="experiencias">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 center">
							<h2 class="font-title" data-sr>Experiências</h2>
						</div>
					</div>
					<div class="row row-exp">
						<div class="col-lg-6 col-md-6 col-sm-12 center">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 center" data-sr>
									<a 
										class="experience pointer"
										data-slug="brahma-valley-bar"
										data-title="BRAHMA VALLEY BAR"
										data-description="O Brahma Valley Bar irá proporcionar uma experiência única, onde serão servidas novidades de sabores da família Brahma e diversos tipos de cervejas artesanais. Também terá shows exclusivos de talentos sertanejos e performances artísticas."
										data-img="images/sobre/sobre_detalhe_valley_bar.jpg"
									>
										<img alt="Brahma Valley Bar" src="<?php echo $p ?>images/sobre/sobre_exp_bar.png" class="img-center img-exp animation-05"/>
									</a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center" data-sr>
									<h3 class="font-title">
										<a 
											class="experience pointer link-exp"
											data-slug="brahma-valley-bar"
											data-title="BRAHMA VALLEY BAR"
											data-description="O Brahma Valley Bar irá proporcionar uma experiência única, onde serão servidas novidades de sabores da família Brahma e diversos tipos de cervejas artesanais. Também terá shows exclusivos de talentos sertanejos e performances artísticas."
											data-img="images/sobre/sobre_detalhe_valley_bar.jpg"
										>
											Brahma Valley Bar
										</a>
									</h3>
									<p>O Brahma Valley Bar irá proporcionar uma experiência única, onde serão servidas novidades de sabores da família Brahma e diversos tipos de cervejas artesanais. Também terá shows exclusivos de talentos sertanejos e performances artísticas.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 center" data-sr>
									<a 
										class="experience pointer"
										data-slug="food-court"
										data-title="FOOD COURT"
										data-description="Para agradar o paladar de todo mundo, o festival contará com diferentes pontos de alimentação. Serão 30 food trucks e uma área de gastronomia gourmet com 15 chefs e a curadoria do chef Henrique Fogaça."
										data-img="images/sobre/sobre_detalhe_food_court.jpg"
									>
										<img alt="Food Court" src="<?php echo $p ?>images/sobre/sobre_exp_food_court.png" class="img-center img-exp animation-05"/>
									</a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center" data-sr>
									<h3 class="font-title">
										<a 
											class="experience pointer link-exp"
											data-slug="food-court"
											data-title="FOOD COURT"
											data-description="Para agradar o paladar de todo mundo, o festival contará com diferentes pontos de alimentação. Serão 30 food trucks e uma área de gastronomia gourmet com 15 chefs e a curadoria do chef Henrique Fogaça."
											data-img="images/sobre/sobre_detalhe_food_court.jpg"
										>
											Food Court
										</a>
									</h3>
									<p>Para agradar o paladar de todo mundo, o festival contará com diferentes pontos de alimentação. Serão 30 food trucks e uma área de gastronomia gourmet com 15 chefs e a curadoria do chef Henrique Fogaça.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 center" data-sr>
									<a 
										class="experience pointer"
										data-slug="cavalo-valley"
										data-title="CAVALO VALLEY"
										data-description="Um tobogã de mais de 20 m de altura no formato de um cavalo gigante equipado com caixas de som que vão animar ainda mais a festa."
										data-img="images/sobre/sobre_detalhe_caval_valley.jpg"
									>
										<img alt="Cavalo Valley" src="<?php echo $p ?>images/sobre/sobre_exp_cavalo_valley.png" class="img-center img-exp animation-05"/>
									</a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center" data-sr>
									<h3 class="font-title">
										<a 
											class="experience pointer link-exp"
											data-slug="cavalo-valley"
											data-title="CAVALO VALLEY"
											data-description="Um tobogã de mais de 20 m de altura no formato de um cavalo gigante equipado com caixas de som que vão animar ainda mais a festa."
											data-img="images/sobre/sobre_detalhe_caval_valley.jpg"
										>
											Cavalo Valley
										</a>
									</h3>
									<p>Um tobogã de mais de 20 m de altura no formato de um cavalo gigante equipado com caixas de som que vão animar ainda mais a festa.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 center" data-sr>
									<a 
										class="experience pointer"
										data-slug="roda-gigante"
										data-title="RODA GIGANTE"
										data-description="A tradicional roda gigante também não vai faltar no festival Brahma Valley."
										data-img="images/sobre/sobre_detalhe_roda_gigante.jpg"
									>
										<img alt="Roda Gigante" src="<?php echo $p ?>images/sobre/sobre_exp_roda_gigante.png" class="img-center img-exp animation-05"/>
									</a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center" data-sr>
									<h3 class="font-title">
										<a 
											class="experience pointer link-exp"
											data-slug="roda-gigante"
											data-title="RODA GIGANTE"
											data-description="A tradicional roda gigante também não vai faltar no festival Brahma Valley."
											data-img="images/sobre/sobre_detalhe_roda_gigante.jpg"
										>
											Roda Gigante
										</a>
									</h3>
									<p>A tradicional roda gigante também não vai faltar no festival Brahma Valley.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 center">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 center" data-sr>
									<a 
										class="experience pointer"
										data-slug="palco-reflexos"
										data-title="PALCO REFLEXOS"
										data-description="Um palco surpreendente, inteiro feito de materiais espelhados, que ilustram a mistura do Sertanejo atual com outras vertentes mais tradicionais do ritmo como o sertanejo de viola e o country americano."
										data-img="images/sobre/sobre_detalhe_palco_reflexos.jpg"
									>
										<img alt="Palco Reflexos" src="<?php echo $p ?>images/sobre/sobre_exp_palco_reflexos.png" class="img-center img-exp animation-05"/>
									</a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center" data-sr>
									<h3 class="font-title">
										<a 
											class="experience pointer link-exp"
											data-slug="palco-reflexos"
											data-title="PALCO REFLEXOS"
											data-description="Um palco surpreendente, inteiro feito de materiais espelhados, que ilustram a mistura do Sertanejo atual com outras vertentes mais tradicionais do ritmo como o sertanejo de viola e o country americano."
											data-img="images/sobre/sobre_detalhe_palco_reflexos.jpg"
										>
											Palco Reflexos
										</a>
									</h3>
									<p>Um palco surpreendente, inteiro feito de materiais espelhados, que ilustram a mistura do Sertanejo atual com outras vertentes mais tradicionais do ritmo como o sertanejo de viola e o country americano.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 center" data-sr>
									<a 
										class="experience pointer"
										data-slug="palco-pop"
										data-title="PALCO POP"
										data-description="O palco onde o sertanejo dividirá o show com os artistas mais pop do universo da música. A estrutura do palco trará referências ao violão, ícone da musica pop e sertaneja misturadas."
										data-img="images/sobre/sobre_detalhe_palco_pop.jpg"
									>
										<img alt="Palco Pop" src="<?php echo $p ?>images/sobre/sobre_exp_palco_pop.png" class="img-center img-exp animation-05"/>
									</a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center" data-sr>
									<h3 class="font-title">
										<a 
											class="experience pointer link-exp"
											data-slug="palco-pop"
											data-title="PALCO POP"
											data-description="O palco onde o sertanejo dividirá o show com os artistas mais pop do universo da música. A estrutura do palco trará referências ao violão, ícone da musica pop e sertaneja misturadas."
											data-img="images/sobre/sobre_detalhe_palco_pop.jpg"
										>
											Palco Pop
										</a>
									</h3>
									<p>O palco onde o sertanejo dividirá o show com os artistas mais pop do universo da música. A estrutura do palco trará referências ao violão, ícone da musica pop e sertaneja misturadas.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 center" data-sr>
									<a 
										class="experience pointer"
										data-slug="palco-sound"
										data-title="PALCO SOUND"
										data-description="O Palco Sound irá misturar o sertanejo com as batidas fortes do funk e do eletrônico. Feito com materiais reciclados em forma de um grande equalizador, o palco trará efeitos de luzes sincronizados com a batida da música."
										data-img="images/sobre/sobre_detalhe_palco_sound.jpg"
									>
										<img alt="Palco Sound" src="<?php echo $p ?>images/sobre/sobre_exp_palco_sound.png" class="img-center img-exp animation-05"/>
									</a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center" data-sr>
									<h3 class="font-title">
										<a 
											class="experience pointer link-exp"
											data-slug="palco-sound"
											data-title="PALCO SOUND"
											data-description="O Palco Sound irá misturar o sertanejo com as batidas fortes do funk e do eletrônico. Feito com materiais reciclados em forma de um grande equalizador, o palco trará efeitos de luzes sincronizados com a batida da música."
											data-img="images/sobre/sobre_detalhe_palco_sound.jpg"
										>
											Palco Sound
										</a>
									</h3>
									<p>O Palco Sound irá misturar o sertanejo com as batidas fortes do funk e do eletrônico. Feito com materiais reciclados em forma de um grande equalizador, o palco trará efeitos de luzes sincronizados com a batida da música.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 center" data-sr>
									<a 
										class="experience pointer"
										data-slug="touro-valley"
										data-title="TOURO VALLEY"
										data-description="Um mirante no formato de touro, de onde será possível ver todo o festival. A estrutura homenageia o ícone do universo sertanejo e terá apresentações de performances e danças."
										data-img="images/sobre/sobre_detalhe_touro_valley.jpg"
									>
										<img alt="Touro Valley" src="<?php echo $p ?>images/sobre/sobre_exp_touro_valley.png" class="img-center img-exp animation-05"/>
									</a>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center" data-sr>
									<h3 class="font-title">
										<a 
											class="experience pointer link-exp"
											data-slug="touro-valley"
											data-title="TOURO VALLEY"
											data-description="Um mirante no formato de touro, de onde será possível ver todo o festival. A estrutura homenageia o ícone do universo sertanejo e terá apresentações de performances e danças."
											data-img="images/sobre/sobre_detalhe_touro_valley.jpg"
										>
											Touro Valley
										</a>
									</h3>
									<p>Um mirante no formato de touro, de onde será possível ver todo o festival. A estrutura homenageia o ícone do universo sertanejo e terá apresentações de performances e danças.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-exp">
					<?php include('footer.php') ?>
				</div>
			</section>
			<section id="detalhes">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 center spacer-bottom">
							<div class="line" data-sr>
								<img class="img-line animation-06 back-top pointer" src="<?php echo $p ?>images/shared/shared_up.png"/>
								<div class="lbl-line font-text">Experiências</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 center fill-img" data-sr>
							<img class="animation-05 img-responsive" src="<?php echo $p ?>images/sobre/sobre_detalhe_roda_gigante.jpg"/>
						</div>
						<div class="col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-12 center">
							<h2 class="font-title fill-title" data-sr>Roda Gigante</h3>
							<p class="fill-description" data-sr>De longe, será possível ver a Grande Roda Gigante que  irá dar ritmo ao festival e iluminará os céus do Valley durante a noite.</p>
						</div>
					</div>
				</div>
				<div class="footer-detail">
					<?php include('footer.php') ?>
				</div>
			</section>
		<?php include('popups.php') ?>
		<?php include('scripts.php') ?>
	</body>
<?php $i->showExp(); ?>
</html>