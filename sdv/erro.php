<?php
	include('./app/autoload.php');
	$i = Oracle::getInstance();
	$t = "Envie sua Receita - Receita a Dois";
	$p = "./";
	$e = array(
		'send.css',
		'menu.css',
		'popups.css',
		'animations.css',
		'libs/icheck_grey.css'
	);
	$s = array(
		'js/jquery/jquery.js',
		'js/bootstrap/bootstrap.min.js',
		'js/libs/easing/easing.min.js',
		'js/libs/scroll.reveal/scroll.reveal.min.js',
		'js/libs/nice.scroll/nice.scroll.min.js',
		'js/libs/mouse.wheel/mouse.wheel.min.js',
		'js/libs/icheck/icheck.min.js',
		'js/oracle/oracle.js',
		'js/objects/public/send.js',
		'js/objects/public/popup.js'
	);
?>
<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<?php include('header.php') ?>
	<body class="bg-dirty">
		<?php include('top.php') ?>
		<?php include('menu.php') ?>
		<section id="send">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1 data-sr='no reset'>Envie sua Receita</h1>
						<h2 data-sr='no reset'>Tem alguma receita com Sonho de Valsa que você adora fazer junto com seu amor? <br/> Compartilhe com a gente. Sua receita pode ser escolhida para fazer parte do nosso site.</h2>
					</div>
				</div>
				<form role="form">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<input type="text" id="name" maxlength="150" class="error" placeHolder="SEU NOME" />
				            </div>
				        </div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<input type="text" id="amor" maxlength="150" class="error" placeHolder="NOME DO SEU AMOR" />
				            </div>
				        </div>
				    </div>
				    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<input type="text" id="email" maxlength="150" class="error" placeHolder="EMAIL" />
				            </div>
				        </div>
				    </div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<input type="text" id="receita" maxlength="150" class="error" placeHolder="NOME DA RECEITA" />
				            </div>
				        </div>
				    </div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<textarea id="ingredientes" placeHolder="INGREDIENTES" class="error" rows="4"></textarea>
				            </div>
				        </div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<textarea id="modo" placeHolder="MODO DE PREPARO" class="error" rows="4"></textarea>
				            </div>
				        </div>
				    </div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-termos">
							<div class="checkbox icheck" data-sr='no reset'>
								<input type="checkbox" id="termos">
								<label for="termos"><span style="position: absolute; top: 4px; left: 30px;" class="termos-error">CONCORDO COM OS <a href="#" id="btn-terms" class="btn-action-termos">TERMOS DE USO.</a></span></label>
							</div>
				        </div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-send" data-sr='no reset'>
				            <button class="btn-send btn-action-send">ENVIAR</button>
				        </div>
				    </div>
		        </form>
		</section>
		<section id="terms" class="bg-dirty">
			<div id="popup-close-terms" class="btn-close"></div>
			<div class="content-popup">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2>Termos de Uso</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('scripts.php') ?>
	</body>
</html>