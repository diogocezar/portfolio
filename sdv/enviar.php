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
		'libs/icheck_grey.css',
		'button.css'
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
						<h2 data-sr='no reset'>Tem alguma receita com Sonho de Valsa que você adora fazer junto com seu amor?<div class="break-lg"><br/></div> Compartilhe com a gente. Sua receita pode ser escolhida para fazer parte do nosso site.</h2>
					</div>
				</div>
				<form role="form">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<input type="text" id="name" maxlength="150" placeHolder="SEU NOME" />
				            </div>
				        </div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<input type="text" id="amor" maxlength="150" placeHolder="NOME DO SEU AMOR" />
				            </div>
				        </div>
				    </div>
				    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<input type="text" id="email" maxlength="150" placeHolder="EMAIL" />
				            </div>
				        </div>
				    </div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<input type="text" id="receita" maxlength="150" placeHolder="NOME DA RECEITA" />
				            </div>
				        </div>
				    </div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<textarea id="ingredientes" placeHolder="INGREDIENTES" rows="4"></textarea>
				            </div>
				        </div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				            <div class="form-group" data-sr='no reset'>
				            	<textarea id="modo" placeHolder="MODO DE PREPARO" rows="4"></textarea>
				            </div>
				        </div>
				    </div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-termos">
							<div class="checkbox icheck" data-sr='no reset'>
								<input type="checkbox" id="termos">
								<label for="termos">
									<div class="termos-in">
										CONCORDO COM OS <a href="#" id="btn-terms" class="btn-action-termos">TERMOS DE USO DO SITE</a>
									</div>
								</label>
							</div>
				        </div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-send" data-sr='no reset'>
				            <button class="btn-send btn-action-send button-hover-big" data-text="ENVIAR">ENVIAR</button>
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
							<h2>SONHO DE VALSA<br/>“RECEITAS A DOIS”<br/>TERMO DE ADESÃO</h2>
							<p>O Projeto “SONHO DE VALSA - RECEITAS A DOIS” será realizado pela MONDELEZ BRASIL LTDA., sociedade empresária limitada com sede na Cidade de Curitiba, Estado do Paraná, na Avenida Presidente Kennedy, nº 2511, inscrita no CNPJ/MF sob o nº 33.033.028/0001-84 (“Promotora”), com o objetivo de encontrar novas receitas com os produto da marca SONHO DE VALSA para serem preparadas a dois. Para participação, o interessado deverá publicar através do hotsite da ação uma receita que contenha, dentre outros ingredientes, o bombom de marca SONHO DE VALSA em sua composição. Não haverá limite de publicações. Um comitê designado pela Promotora testará as receitas enviadas, para garantir o padrão de qualidade das receitas divulgadas. Uma vez selecionada, a receita será exibida na linha do tempo do hotsite da ação, sendo o participante informado da escolha através de e-mail.</p>
							<h2>QUEM PODE PARTICIPAR</h2>
							<p>Somente poderão participar do Projeto pessoas que: (i) tenham idade igual ou superior a 18 (dezoito) anos; (ii) sejam residentes no território brasileiro (e caso sejam estrangeiros, deverão comprovar a regularidade/ legalidade de sua permanência no país). Para o envio da receita, haverá um página no site em que os seguintes campos deverão ser preenchidos:  “seu nome”, “nome do seu amor”(opcional), “e-mail”, “nome da receita”,  “ingredientes”, “modo de preparo”. Além disso, o usuário deve concordar com os termos de uso de site.</p>
							<p>A Wieden+Kennedy, juntamente com a empresa selecionada para avaliar as receitas enviadas, selecionará, a seu exclusivo critério, os participantes que irão ter suas receitas divulgadas.</p>
							<h2>PERÍODO DE VEICULAÇÃO</h2>
							<p>A ação será realizada entre o dia 7 de Dezembro de 2015, a partir das 00h, horário de Brasília, e o dia 21 de Dezembro de 2016, às 23h59, horário de Brasília. Durante esse período os interessados poderão publicar suas sugestões de acordo com as condições acima.</p>
							<h2>DA PARTICIPAÇÃO</h2>
							<p>Ao concordarem com a participação no projeto aqui descrito, os participantes, declaram neste ato, terem plena ciência que não deverão utilizar palavras ou imagens de baixo calão, preconceituosas, ofensivas, ou que incitem qualquer tipo de comportamento considerado inadequado, caso contrário serão automaticamente eliminados sem necessidade de aviso prévio.</p>
							<p>Ao participar do processo de seleção com a publicação de uma receita de acordo com o estabelecido acima, o participante declara automaticamente ter lido este Termo de Adesão e aceito suas condições, declarando e garantindo possuir capacidade jurídica para tanto, bem como que todas as informações prestadas em razão de sua candidatura são verdadeiras e de sua titularidade, e que os seus dados pessoais coletados poderão ser usados durante o período de vigência dessa ação. Declara ainda, na qualidade de único titular dos direitos autorais sobre o conteúdo enviado, que se responsabiliza pela originalidade do mesmo.</p>
							<p>Resta expressamente reconhecido ser a MONDELEZ BRASIL LTDA., detentora dos direitos patrimoniais de autor sobre este Projeto, sendo que os candidatos aqui expressamente autorizam aos organizadores em caráter gratuito, irrevogável e irretratável, o direito de expor, publicar, reproduzir, armazenar, editar, alterar, incluir em obra intelectual de qualquer natureza e/ou de qualquer outra forma utilizar o conteúdo com a sugestão enviada, podendo referidos conteúdos serem utilizados pelos organizadores ou por terceiros por eles autorizados, sem qualquer limitação de tempo, território, finalidade, modalidade de direito ou mídia, por meio de cartazes, filmes e/ou spots, jingles e/ou vinhetas, bem como em qualquer tipo de mídia e/ou peças promocionais, inclusive em televisão, rádio, jornal, cartazes, faixas, outdoors, mala-direta e na Internet, entre outros, sem qualquer restrição.</p>
							<p>Os candidatos declaram ciência de que não há obrigação por parte dos organizadores de realização deste Projeto, podendo, a seu exclusivo critério, cancelá-la ou deixar de exibi-la, sem que caiba qualquer direito ou compensação de qualquer espécie aos candidatos.</p>
							<p>Da mesma maneira, declaram ciência de que a receita enviada será previamente testada, devendo se adequar ao padrão de qualidade estabelecido pela Promotora, não havendo qualquer obrigação de publicação do conteúdo enviado.</p>
							<p>Os candidatos se comprometem a manter o mais absoluto sigilo com relação a qualquer informação recebida pelos organizadores deste Projeto, não podendo, sob qualquer hipótese, dar entrevistas e/ou declarações a quaisquer meios de comunicação, inclusive Internet, sobre tais assuntos. Os termos e condições estabelecidos neste Termo de Adesão deverão ser observados e respeitados por todos os participantes, os quais são responsáveis por toda e qualquer informação prestada no ato da participação neste projeto.</p>
							<p>Quando de sua participação no presente projeto, o participante manifesta sua total e incondicional aceitação a todo o disposto neste Termo de Adesão. Uma cópia deste Termo de Adesão poderá ser obtida no site oficial da ação (www.pensemenosamemais.com.br)</p>
							<p>Fica desde já eleito o foro Central da comarca de São Paulo, para solução de quaisquer questões referentes ao presente Termo de Adesão.</p>
							<p>As dúvidas não previstas neste Regulamento serão dirimidas por uma comissão composta por representantes dos organizadores. Sendo reservado a estes o direito de alterar este regulamento sem aviso prévio, a qualquer momento, se julgar necessário.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('scripts.php') ?>
	</body>
</html>