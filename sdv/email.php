<?php
	include('./app/autoload.php');
	$i = Oracle::getInstance();
	$p = "./";
	$e = array(
		'receita.css',
		'menu.css',
		'animations.css',
		'email.css',
		'button.css'
	);
	$s = array(
		'js/jquery/jquery.js',
		'js/bootstrap/bootstrap.min.js',
		'js/libs/easing/easing.min.js',
		'js/libs/scroll.reveal/scroll.reveal.min.js',
		'js/libs/nice.scroll/nice.scroll.min.js',
		'js/libs/mouse.wheel/mouse.wheel.min.js',
		'js/oracle/oracle.js',
		'js/objects/public/email.js'
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
			<div class="container">
				<div class="row row-header">
					<div class="col-lg-offset-1 col-lg-4 col-md-5 col-sm-12 col-xs-12">
						<h1 data-sr>Banana Assada com Bombom</h1>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 hidden-xs">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="box-amout">
								<h2 data-sr='enter right'>Rendimento</h2>
								<h3 data-sr='enter left'>2 Porções</h3>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="box-time">
								<h2 data-sr='enter right'>Tempo de Preparo</h2>
								<h3 data-sr='enter left'>25 Minutos</h3>
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
		</header>
		<section id="infos-bottom">
			<div class="container">
				<div class="header-mobile">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="box-amout-mobile">
									<h2 data-sr='enter right'>Rendimento</h2>
									<h3 data-sr='enter left'>2 Porções</h3>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="box-time-mobile">
									<h2 data-sr='enter right'>Tempo de Preparo</h2>
									<h3 data-sr='enter left'>25 Minutos</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-footer">
					<div class="header-mobile">
						<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 padding-mobile" data-sr='enter top'>
							<a href="#" data-sr='enter left'><button class="btn">COMPARTILHAR</button></a>
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
											<div class="me-inside" data-sr='enter right'>EU</div>
											<div class="love-inside" data-sr='enter left'>MEU AMOR</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-6 col-right">
									<ul class="margin-right" data-sr='enter right'>
										<li class="bullets-1">2 bananas nanicas não muito maduras cortadas em rodelas</li>
										<li class="bullets-1">1 colher (sopa) de açúcar</li>
										<li class="bullets-1">1 colher (chá) de gengibre em pó</li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-6 col-left">
									<ul class="margin-left" data-sr='enter left'>
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
								<div class="row">
									<div class="col-lg-6 col-md-6 col-xs-6 col-right">
										<div class="half-box">
											<div class="half-line-inside"></div>
											<div class="half-labels-inside-numbers">
												<div class="half-start-inside" data-sr='enter right'>1</div>
											</div>
										</div>
										<ul class="margin-right" data-sr='enter right'>
											<li>2 bananas nanicas não muito maduras cortadas em rodelas</li>
											<li>1 colher (sopa) de açúcar</li>
											<li>1 colher (chá) de gengibre em pó</li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-xs-6 col-left col-margin">
										<div class="half-box">
											<div class="half-line-inside line-right"></div>
											<div class="half-labels-inside-numbers">
												<div class="half-end-inside" data-sr='enter left'>2</div>
											</div>
										</div>
										<ul class="margin-left" data-sr='enter left'>
											<li>Distribua o Sonho de Valsa, as amêndoas e as uvas-passas.</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-xs-6 col-right">
										<div class="half-box">
											<div class="half-line-inside"></div>
											<div class="half-labels-inside-numbers">
												<div class="half-start-inside" data-sr='enter right'>3</div>
											</div>
										</div>
										<ul class="margin-right" data-sr='enter right'>
											<li>2 bananas nanicas não muito maduras cortadas em rodelas</li>
											<li>1 colher (sopa) de açúcar</li>
											<li>1 colher (chá) de gengibre em pó</li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-xs-6 col-right"></div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-xs-6 col-right">
										<div class="half-box">
											<div class="half-line-inside"></div>
											<div class="half-labels-inside-numbers">
												<div class="half-start-inside" data-sr='enter right'>4</div>
											</div>
										</div>
										<ul class="margin-right" data-sr='enter right'>
											<li>2 bananas nanicas não muito maduras cortadas em rodelas</li>
											<li>1 colher (sopa) de açúcar</li>
											<li>1 colher (chá) de gengibre em pó</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-xs-6 col-right">
										<div class="half-box">
											<div class="half-line-inside"></div>
											<div class="half-labels-inside-numbers">
												<div class="half-start-inside" data-sr='enter right'>5</div>
											</div>
										</div>
										<ul class="margin-right" data-sr='enter right'>
											<li>Leve ao forno preaquecido em temperatura média por 15 minutos.</li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-xs-6 col-left col-margin">
										<div class="half-box">
											<div class="half-line-inside line-right"></div>
											<div class="half-labels-inside-numbers">
												<div class="half-end-inside" data-sr='enter left'>6</div>
											</div>
										</div>
										<ul class="margin-left" data-sr='enter left'>
											<li>Em um refratário pequeno, espalhe as bananas, polvilhe o açúcar.</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-xs-6 col-left"></div>
									<div class="col-lg-6 col-md-6 col-xs-6 col-left">
										<div class="half-box">
											<div class="half-line-inside line-right"></div>
											<div class="half-labels-inside-numbers">
												<div class="half-end-inside" data-sr='enter left'>7</div>
											</div>
										</div>
										<ul class="margin-left" data-sr='enter left'>
											<li>Em um refratário pequeno, espalhe as bananas, polvilhe o açúcar.</li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-xs-6 col-left"></div>
									<div class="col-lg-6 col-md-6 col-xs-6 col-left">
										<div class="half-box">
											<div class="half-line-inside line-right"></div>
											<div class="half-labels-inside-numbers">
												<div class="half-end-inside" data-sr='enter left'>8</div>
											</div>
										</div>
										<ul class="margin-left" data-sr='enter left'>
											<li>Em um refratário pequeno, espalhe as bananas, polvilhe o açúcar.</li>
										</ul>
									</div>
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
										<div class="start-inside" data-sr='enter right'>9</div>
										<div class="end-inside" data-sr='enter left'>9</div>
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
							<div class="col-lg-6 col-md-6 col-xs-6 col-right">
								<div class="half-box">
									<div class="half-line-inside"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-start-inside half-start-inside-mobile">EU</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 mobile-col-left">
								<ul class="margin-right" data-sr='enter right'>
									<li>2 bananas nanicas não muito maduras cortadas em rodelas</li>
									<li>1 colher (sopa) de açúcar</li>
									<li>1 colher (chá) de gengibre em pó</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-xs-6 col-left col-margin"></div>
							<div class="col-lg-6 col-md-6 col-xs-6 col-left col-margin">
								<div class="half-box">
									<div class="half-line-inside line-right"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-end-inside half-end-inside-mobile">MEU AMOR</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 mobile-col-right">
								<ul class="margin-left mobile-right" data-sr='enter left'>
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
							<div class="col-lg-6 col-md-6 col-xs-6 col-right">
								<div class="half-box">
									<div class="half-line-inside"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-start-inside">1</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 mobile-col-left">
								<ul class="margin-right" data-sr='enter right'>
									<li>Em um refratário pequeno, espalhe as bananas, polvilhe o açúcar e o gengibre.</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-xs-6 col-left col-margin"></div>
							<div class="col-lg-6 col-md-6 col-xs-6 col-left col-margin">
								<div class="half-box">
									<div class="half-line-inside line-right"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-end-inside">2</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 mobile-col-right">
								<ul class="margin-left mobile-right" data-sr='enter left'>
									<li>Distribua o Sonho de Valsa, as amêndoas e as uvas-passas.</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-xs-6 col-right">
								<div class="half-box">
									<div class="half-line-inside"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-start-inside">3</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 mobile-col-left">
								<ul class="margin-right" data-sr='enter right'>
									<li>Leve ao forno preaquecido em temperatura média por 15 minutos.</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-xs-6 col-left col-margin"></div>
							<div class="col-lg-6 col-md-6 col-xs-6 col-left col-margin">
								<div class="half-box">
									<div class="half-line-inside line-right"></div>
									<div class="half-labels-inside-numbers">
										<div class="half-end-inside">4</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 mobile-col-right">
								<ul class="margin-left mobile-right" data-sr='enter left'>
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
		<section id="email" class="bg-pink">
			<div class="content-popup">
				<div class="container">
					<div class="box-relative">
						<div id="popup-close-email" class="btn-close"></div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<h2>Enviar Email</h2>
							<form role="form">
								<div class="row">
									<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
							            <div class="form-group">
							            	<input type="text" id="name" maxlength="150" placeHolder="SEU NOME" />
							            </div>
							        </div>
							    </div>
							    <div class="row">
									<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
							            <div class="form-group">
							            	<input type="text" id="email" maxlength="150" placeHolder="EMAIL DO SEU AMOR" />
							            </div>
							        </div>
							    </div>
								<div class="row">
									<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12 col-send">
							            <button class="btn-send btn-action-send button-hover-big" data-text="ENVIAR">ENVIAR</button>
							        </div>
							    </div>
					        </form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('scripts.php') ?>
	</body>
</html>