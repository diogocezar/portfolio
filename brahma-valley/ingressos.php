<?php
	include('./app/autoload.php');
	$i = Oracle::getInstance();
	$t = "Brahma Valley - Ingressos";
	$p = "./";
	$e = [
		'ingressos.css',
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
		'js/objects/public/maps.js',
		'js/objects/public/tabs.js',
		'js/objects/public/accordion.js',
		'js/objects/public/menu.js',
		'js/oracle/oracle.js'
	];
?>
<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<?php include('header.php') ?>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<body>
		<?php include('top.php') ?>
		<?php include('menu.php') ?>
		<section id="ingressos">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="font-title" data-sr>Ingressos Brahma Valley</h2>
						<div class="col-lg-4 col-md-4 col-sm-12 center">
							<h3 class="font-title through" data-sr>Lote Promocional</h3>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 center">
							<h3 class="active font-title" data-sr>Primeiro Lote</h3>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 center">
							<h3 class="font-title" data-sr>Segundo Lote</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
						<div id="board-ingressos" class="board-home" data-sr>
							<div id="inside-board-ingressos">
								<div id="absolute-board-ingressos">
									<div class="row spacer-top">
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
										<div class="col-lg-12 col-md-12">
											<p>Conheça as <u><a class="btn-ingressos-vantagens pointer">vantagens exclusivas</a></u> da Arena VIP, Camarote Premium e Camarote Brahma</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-xs-12 hidden-md hidden-lg center board-mobile">
							<div class="row row-table-price">
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
									<h6 data-sr class="conheca">Conheça as <u><a href="./ingressos#conheca">vantagens exclusivas</a></u> da Arena VIP, Camarote Villa Country e Camarote Brahma</h6>
								</div>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 center">
						<a href="https://totalacesso.com/Shopping/Cart/834?_ga=1.121024008.1204067330.1442111381" target="_blank" data-sr><img alt="Compre Agora" src="./images/ingressos/ingressos_compre_agora.png" class="img-responsive img-center spacer-bottom animation-03" data-sr/></a>
					</div>
				</div>
			</div>
		</section>
		<section id="conheca">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="font-title" data-sr>Conheça Vantagens de Cada Espaço</h2>
					</div>
				</div>
				<div class="row hidden-md hidden-sm hidden-xs">
					<div class="col-lg-12">
						<div class="tab-line">
							<div class="tab-line-inside" data-tabs="tabs" data-sr>
								<a href="#option-camarote-brahma" data-toggle="tab" class="tab-option"><div class="tab tab-start animation-04 actived">Camatore Brahma</div></a>
								<a href="#option-camarote-vl" data-toggle="tab" class="tab-option"><div class="tab tab-middle tab-border animation-04">Camatore Villa Country</div></a>
								<a href="#option-arena-vip" data-toggle="tab" class="tab-option"><div class="tab tab-middle tab-border animation-04">Arena Vip</div></a>
								<a href="#option-arena" data-toggle="tab" class="tab-option"><div class="tab tab-end  tab-border animation-04">Arena</div></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row hidden-md hidden-sm hidden-xs">
					<div class="col-lg-12">
						<div id="board-conheca" data-sr>
							<div id="inside-board-conheca">
								<div id="absolute-board-conheca">
									<div id="tabs" class="tab-content">
										<div id="option-camarote-brahma" class="tab-pane active">
											<div class="row">
												<div class="col-lg-6 col-md-6">
													<ul class="ul-camarote-brahma">
														<li>Open Bar (Refrigerante, Água , Cerveja e chopp)</li>
														<li>Localização privilegiada com visão para dois palcos</li>
														<li>Finger food</li>
														<li>Acesso exclusivo</li>
														<li>Lounge para descanso</li>
														<li>Espaço Beauty</li>
														<li>Espaço Relax</li>
														<li>Banheiro exclusivo</li>
														<li>Acesso a Arena VIP</li>
														<li>Exclusividade na compra do estacionamento do Jockey Club</li>
													</ul>
												</div>
												<div class="col-lg-6 col-md-6">
													<h3 class="font-title">Kit Camarote Brahma Valley</h3>
													<ul>
														<li>Deve ser retirado antecipadamente</li>
														<li>Obrigatório o uso do Kit Oficial do Camarote Brahma</li>
													</ul>
													<p>Informações de local, data e horário de troca do kit serão divulgadas 15 dias antes do evento.</p>
												</div>
											</div>
										</div>
										<div id="option-camarote-vl" class="tab-pane">
											<div class="col-lg-12 col-md-12">
												<ul class="ul-camarote-vl">
													<li>Área exclusiva de acesso</li>
													<li>Área de descanso</li>
													<li>Pontos de alimentação, bares e banheiros exclusivos</li>
													<li>Acesso ao evento e todos os serviços da Arena</li>
													<li>Localização privilegiada com visão para dois palcos</li>
													<li>Lounge para descanso</li>
												</ul>
											</div>
										</div>
										<div id="option-arena-vip" class="tab-pane">
											<div class="col-lg-12 col-md-12">
												<ul class="ul-arena-vip">
													<li>Todos os serviços da Arena</li>
													<li>Área exclusiva de acesso</li>
													<li>Área reservada com vista para os palcos Reflexos e POP</li>
													<li>Pontos de alimentação, bares e banheiros exclusivos</li>
												</ul>
											</div>
										</div>
										<div id="option-arena" class="tab-pane">
											<div class="col-lg-12 col-md-12">
												<ul class="ul-arena">
													<li>Acesso ao evento + áreas comuns</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row hidden-lg">
					<div class="col-lg-12">
						<div class="accordion-line-mobile">
							<a href="#p01" data-toggle="collapse"><div class="accordion p01 animation-04">Camatore Brahma</div></a>
							<div id="p01" class="accordion-content panel-collapse collapse">
								<div class="ul-camarote-brahma">
									<ul>
										<li>Open Bar (Refrigerante, Água , Cerveja e chopp)</li>
										<li>Localização privilegiada com visão para dois palcos</li>
										<li>Finger food</li>
										<li>Acesso exclusivo</li>
										<li>Lounge para descanso</li>
										<li>Espaço Beauty</li>
										<li>Espaço Relax</li>
										<li>Banheiro exclusivo</li>
										<li>Acesso a Arena VIP</li>
										<li>Exclusividade na compra do estacionamento do Jockey Club</li>
									</ul>
									<h3 class="font-title">Kit Camarote Brahma Valley</h3>
									<ul>
										<li>Deve ser retirado antecipadamente</li>
										<li>Obrigatório o uso do Kit Oficial do Camarote Brahma</li>
									</ul>
									<p>Informações de local, data e horário de troca do kit serão divulgadas 15 dias antes do evento.</p>
								</div>
							</div>
							<a href="#p02" data-toggle="collapse"><div class="accordion p02 animation-04">Camatore Villa Country</div></a>
							<div id="p02" class="accordion-content panel-collapse collapse">
								<ul class="ul-camarote-vl">
									<li>Área exclusiva de acesso</li>
									<li>Área de descanso</li>
									<li>Pontos de alimentação, bares e banheiros exclusivos</li>
									<li>Acesso ao evento e todos os serviços da Arena</li>
									<li>Localização privilegiada com visão para dois palcos</li>
									<li>Lounge para descanso</li>
								</ul>
							</div>
							<a href="#p03" data-toggle="collapse"><div class="accordion p03 animation-04">Arena Vip</div></a>
							<div id="p03" class="accordion-content panel-collapse collapse">
								<ul class="ul-arena-vip">
									<li>Todos os serviços da Arena</li>
									<li>Área exclusiva de acesso</li>
									<li>Área reservada com vista para os palcos Reflexos e POP</li>
									<li>Pontos de alimentação, bares e banheiros exclusivos</li>
								</ul>
							</div>
							<a href="#p04" data-toggle="collapse"><div class="accordion p04 animation-04">Arena</div></a>
							<div id="p04" class="accordion-content panel-collapse collapse">
								<ul class="ul-arena">
									<li>Acesso ao evento + áreas comuns</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="pontos-de-venda">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="font-title" data-sr>Pontos de Venda Oficiais</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 center">
						<div class="map-inside">
							<div class="map-absolute">
								<div id="map_1" data-sr></div>
							</div>
						</div>
						<h3 class="font-title" data-sr>Bar Brahma Centro</h3>
						<p data-sr>Avenida São João, 677 <br/> Centro, São Paulo</p>
						<p data-sr>Horário de funcionamento: <br/> Terça a Domingo das 13h às 22h</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 center">
						<div class="map-inside">
							<div class="map-absolute">
								<div id="map_2" data-sr></div>
							</div>
						</div>
						<h3 class="font-title" data-sr>Villa Country</h3>
						<p data-sr>Avenida Francisco Matarazzo, 774 <br/> Água Branca, São Paulo</p>
						<p data-sr>Horário de funcionamento: <br/> Segunda a Sábado das 10h às 22h <br/> Domingo das 13h às 22h</p>
					</div>
				</div>
				<div class="full-width">
					<a href="https://totalacesso.com/Shopping/Cart/834?_ga=1.121024008.1204067330.1442111381" target="_blank"><span class="btn-compre animation-04 font-title" data-sr>Compre online</span></a>
				</div>
			</div>
			<?php include('footer.php') ?>
		</section>
		<?php include('popups.php') ?>
		<?php include('scripts.php') ?>
	</body>
</html>