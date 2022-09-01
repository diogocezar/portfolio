<?php
	include('./app/autoload.php');
	$i = Oracle::getInstance();
	$t = "Brahma Valley - Informações";
	$p = "./";
	$e = [
		'informacoes.css',
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
			<section id="informacoes">
				<div class="container container-info">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-md-sm-12 col-xs-12 center">
							<div class="infos-absolute">
								<h3 data-sr>Datas:</h3>
								<h4 class="font-title" data-sr>28 e 29 de Novembro</h4>
								<h3 data-sr>Onde:</h3>
								<h4 class="font-title" data-sr>Jockey Club de São Paulo</h4>
								<h3 data-sr>Abertura dos Portões:</h3>
								<h4 class="font-title" data-sr>12h00</h4>
								<h3 data-sr>Término:</h3>
								<h4 class="font-title" data-sr>23h30</h4>
							</div>
							<div class="full-width">
								<a href="https://totalacesso.com/Shopping/Cart/834?_ga=1.121024008.1204067330.1442111381" target="_blank"><span class="btn-compre animation-04 font-title" data-sr>Compre Agora <br/> Seu Ingresso</span></a>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-lg-offset-1 col-md-offset-1 col-md-sm-12 col-xs-12 center faq">
							<h2 class="font-title" data-sr>Informações</h2>
							<div class="full-width" data-sr data-tabs="tabs">
								<a href="#option-faq" data-toggle="tab" class="tab-option"><div class="tab tab-start animation-04 actived">Perguntas Frequentes</div></a>
								<a href="#option-form" data-toggle="tab" class="tab-option"><div class="tab tab-end tab-border animation-04">Envie uma Pergunta</div></a>
							</div>
							<div id="tabs" class="tab-content">
								<div id="option-faq" class="tab-pane active">
									<h4>O que é o Brahma Valley?</h4>
									<p class="spacer-bottom">Brahma Valley é um festival de música sertaneja como você nunca viu.  Dois dias de shows e atrações em três palcos simultâneos no Jockey Club divididos entre os maiores artistas da música sertaneja e grandes nomes de outros ritmos como o pop, o eletrônico, o funk, o hip hop e o rock, que juntos criarão mashups sensacionais que vão mexer com seus pés, sua emoção e sua imaginação. É o sertanejo como você nunca viu. Garanta já seu ingresso para o Brahma Valley e se encante com uma saborosa mistura musical e com um visual artístico onde os ícones do universo sertanejo ganham uma nova roupagem.</p>

									<p><a data-toggle="collapse" href="#p01"><h4>Quando acontece o Brahma Valley?</h4></a></p>
									<div id="p01" class="content-faq panel-collapse collapse">
										<p>O evento acontecerá dias 28 e 29 de Novembro de 2015.</p>
										<div class="spacer-faq"></div>
									</div>
									
									<p><a data-toggle="collapse" href="#p02"><h4>Qual a faixa etária do Brahma Valley?</h4></a></p>
									<div id="p02" class="content-faq panel-collapse collapse">
										<p>A idade mínima para ir ao Brahma Valley é de 18 anos de idade, mesmo para emancipados.</p>
										<div class="spacer-faq"></div>
									</div>
									
									<p><a data-toggle="collapse" href="#p03"><h4>Que horas os portões abrem, a festa começa e termina?</h4></a></p>
									<div id="p03" class="content-faq panel-collapse collapse">
										<p>Em ambos os dias, a abertura dos portões será às 12h, início dos shows a partir das 13h30 e encerramento as 23h30.</p>
										<p>Recomendamos que cheguem cedo para evitar trânsito, facilitar o acesso e aproveitar os serviços do Brahma Valley e experiências do festival.</p>
										<div class="spacer-faq"></div>
									</div>
									
									<p><a data-toggle="collapse" href="#p04"><h4>Quantos palcos terão no Brahma Valley?</h4></a></p>
									<div id="p04" class="content-faq panel-collapse collapse">
										<p>O festival contará com 3 palcos simultâneos. A lista dos artistas confirmados pode ser vista na área de programação do site.</p>
										<div class="spacer-faq"></div>
									</div>
									
									<p><a data-toggle="collapse" href="#p05"><h4>Além dos shows, quais são as outras opções de entretenimento que o festival oferece?</h4></a></p>
									<div id="p05" class="content-faq panel-collapse collapse">
										<p>O Brahma Valley contará com bares, praça de alimentação e food trucks, roda gigante, performances artísticas, além de uma estrutura completa para receber o público como banheiros, áreas de descanso, achados e perdidos, estacionamentos etc.</p>
										<div class="spacer-faq"></div>
									</div>

									<p><a data-toggle="collapse" href="#p06"><h4>Qual a capacidade do evento?</h4></a></p>
									<div id="p06" class="content-faq panel-collapse collapse">
										<p>O Brahma Valley está projetado para receber com conforto e segurança até 40.000 pessoas e estará aprovado por todos os órgãos competentes.</p>
										<div class="spacer-faq"></div>
									</div>

									<p><a data-toggle="collapse" href="#p07"><h4>Quais são os tipos de ingressos?</h4></a></p>
									<div id="p07" class="content-faq panel-collapse collapse">
										<ol type="a">
											<li>Arena - Acesso ao evento + áreas comuns.</li>
											<li>Arena VIP – Todos os serviços da Arena + área exclusiva de acesso, área reservada com vista para os palcos Reflexos e POP + pontos de alimentação, bares e banheiros exclusivos.</li>
											<li>Camarote Premium – Todos os serviços da Arena + área de descanso, banheiro, bar e pontos de alimentação exclusivos.</li>
											<li>Camarote Brahma - Todos os serviços da Arena + áreas exclusiva de acesso, finger food e bares com refrigerante, água e Chopp Brahma incluídos + praça de alimentação e banheiros exclusivos + espaço beleza, descanso e relax + acesso à Arena VIP. Opção de estacionamento dentro do Brahma Valley (pago à parte). Obrigatório o uso de kit oficial do camarote Brahma. Instruções da retirada da camiseta serão enviadas para o comprador.</li>
										</ol>
										<div class="spacer-faq"></div>
									</div>

									<p><a data-toggle="collapse" href="#p08"><h4>O evento terá chapelaria?</h4></a></p>
									<div id="p08" class="content-faq panel-collapse collapse">
										<p>Sim, com valor pago à parte.</p>
										<div class="spacer-faq"></div>
									</div>
									
									<p><a data-toggle="collapse" href="#p09"><h4>Há meia-entrada para o evento?</h4></a></p>
									<div id="p09" class="content-faq panel-collapse collapse">
										<p>Sim. O valor da meia-entrada é cobrado sobre o valor do ingresso. O valor do serviço/VIP/camarote, caso essa seja a opção do cliente, é cobrado de forma integral já que se trata de um serviço extra/opcional contratado, e, por este motivo, não está vinculado ao valor do ingresso para o evento.</p>
										<div class="spacer-faq"></div>
									</div>
									
									<p><a data-toggle="collapse" href="#p10"><h4>Quem pode se beneficiar da meia entrada?</h4></a></p>
									<div id="p10" class="content-faq panel-collapse collapse">
										<p>ESTUDANTES DO ENSINO FUNDAMENTAL, MÉDIO E SUPERIOR:  apresentar carteirinha com foto e que esteja dentro do prazo de validade (considerando o dia do evento), ou, caso a carteirinha não tenha foto, apresentá-la juntamente com outro documento com foto. Não são aceitos documentos como boletos bancários ou outros que não comprovem a situação de estudante.<p>
										<p>JOVENS DE 15 a 29 ANOS PERTENCENTES A FAMÍLIAS DE BAIXA RENDA: inscritos no Cadastro Único para Programas Sociais do Governo Federal – CadÚnico, e que tenham renda mensal de até 2 (dois) salários mínimos.</p>
										<p>DEFICIENTES E SEUS ACOMPANHANTES (estes, se necessário): mediante apresentação de documentação que comprove a condição de deficiente. É permitido apenas um acompanhante pagando meia-entrada por pessoa com deficiência.</p>
										<p>DIRETOR, COORDENADOR PEDAGÓGICO, SUPERVISOR E TITULAR DO QUADRO DE APOIO ESCOLAR ESTADUAL E MUNICIPAL - Lei Estadual SP 15.298/14: apresentar documento de identidade oficial com foto e carteira funcional da Secretaria de Educação, ou Holerite que comprove a condição.</p>
										<p>APOSENTADOS - Lei Municipal SP nº 12.325/1997: apresentar documento de identidade oficial com foto e cartão de benefício do INSS que comprove a condição.</p>
										<p>IDOSOS: documento de identidade com foto que comprove a idade acima de 60 anos.  Para Pontos de Venda e Bilheterias é necessária a comprovação do direito ao benefício da meia-entrada no ato da compra e no acesso ao evento. Para vendas pela internet e telefone é necessária a comprovação do direito ao benefício da meia- entrada no acesso ao evento.</p>
										<p>Caso o benefício não seja comprovado, o portador deverá complementar o valor do ingresso adquirido para o valor do ingresso integral, caso contrário o acesso ao evento não será permitido.</p>
										<div class="spacer-faq"></div>
									</div>

									<p><a data-toggle="collapse" href="#p11"><h4>Quais são os preços?</h4></a></p>
									<div id="p11" class="content-faq panel-collapse collapse">
										<p>Os ingressos serão vendidos em lotes que poderão ser alterados a qualquer momento a critério exclusivo da organização e têm quantidade limitada. O lote promocional de lançamento, com preço especial, custa:</p>
										<ol type="a">
											<li>
												<h3>Arena</h3>
												<h4>Sábado</h4>
												<p>Inteira: R$ 180,00 / Meia: R$ 90,00</p>
												<h4>Domingo</h4>
												<p>Inteira: R$ 180,00 / Meia: R$ 90,00</p>
												<h4>Combo 2 dias</h4>
												<p>Inteira R$ 270,00 / Meia: R$ 135,00</p>
											</li>
											<li>
												<h3>Arena VIP</h3>
												<h4>Sábado</h4>
												<p>Inteira: R$ 330,00 (Inteira: R$ 180,00 + Serviço: R$ 150,00) / Meia: R$ 240,00 (Meia: R$ 90,00 + Serviço: R$ 150,00)</p>
												<h4>Domingo</h4>
												<p>Inteira: R$ 330,00 (Inteira: R$ 180,00 + Serviço: R$ 150,00) / Meia: R$ 240,00 (Meia: R$ 90,00 + Serviço: R$ 150,00)</p>
												<h4>Combo 2 dias</h4>
												<p>Inteira: R$ 550,00 (Inteira: R$ 270,00 + Serviço: R$ 280,00) / Meia: R$ 415,00 (Meia: R$ 135,00 + Serviço: R$ 280,00)</p>
											</li>
											<li>
												<h3>Camarote Premium</h3>
												<h4>Sábado</h4>
												<p>Inteira: R$ 480,00 (Inteira: R$ 179,00 + Serviço: R$ 300,00) / Meia: R$ 390,00 (Meia: R$ 90,00 + Serviço: R$ 300,00)</p>
												<h4>Domingo</h4>
												<p>Inteira: R$ 480,00 (Inteira: R$ 180,00 + Serviço: R$ 300,00) / Meia: R$ 390,00 (Meia: R$ 90,00 + Serviço: R$ 300,00)</p>
												<h4>Combo 2 dias</h4>
												<p>Inteira: R$ 850,00 (Inteira: R$ 270,00 + Serviço: R$ 580,00) / Meia: R$ 715,00 (Meia: R$ 135,00 + Serviço: R$ 580,00)</p>
											</li>
											<li>
												<h3>Camarote Brahma*</h3>
												<h4>Sábado</h4>
												<p>Inteira: R$ 870,00 (Inteira: R$ 180,00 + Serviço: R$ 690,00) / Meia: R$ 780,00 (Meia: R$ 90,00 + Serviço: R$ 690,00)</p>
												<h4>Domingo</h4>
												<p>Inteira: R$ 870,00 (Inteira: R$ 180,00 + Serviço: R$ 690,00) / Meia: R$ 780,00 (Meia: R$ 90,00 + Serviço: R$ 690,00)</p>
												<h4>Combo 2 dias</h4>
												<p>Inteira: R$ 1.630,00 (Inteira: R$ 270,00 + Serviço: R$ 1.360,00) / Meia: R$ 1.495,00 (Meia: R$ 135,00 + Serviço: R$ 1.360,00)</p>
												<p>* Obrigatório o uso de kit do camarote Brahma. Instruções da retirada da camiseta serão enviadas para o comprador.</p>
											</li>
										</ol>
										<div class="spacer-faq"></div>
									</div>
									
									<p><a data-toggle="collapse" href="#p12"><h4>Comprei o ingresso Arena e agora quero comprar o pacote de serviços para o camarote. Pode? Como faço?</h4></a></p>
									<div id="p12" class="content-faq panel-collapse collapse">
										<p>Sim, é possível. Por favor, entre em contato com a Total Acesso através do (11) 2626-1061 ou (21) 3005-3025, das 8h às 18h, de segunda-feira a sexta feira, ou abra um chamado no site totalacesso.com (resposta em até 48h).</p>
										<div class="spacer-faq"></div>
									</div>

									<p><a data-toggle="collapse" href="#p13"><h4>Onde posso comprar?</h4></a></p>
									<div id="p13" class="content-faq panel-collapse collapse">
										<p>Os ingressos podem ser comprada através do:</p>
										<ol type="1">
											<li>website do evento (<a href="www.brahmavalley.com.br" target="_blank">www.brahmavalley.com.br</a>) e pelo website da Total Acesso (<a href="www.totalacesso.com" target="_blank">www.totalacesso.com</a>). A venda de ingressos pela Internet será encerrada um dia antes do evento.</li>
											<li>
												dos pontos de venda com auto atendimento (totens interativos), que funcionarão até a data do evento, nos seguintes endereços:
												<ul>
													<li>
														<h4>TOTEM Bar Brahma Centro</h4>
														<p>Avenida São João, 677 - Centro, São Paulo</p>
													</li>
													<li>
														<h4>TOTEM Bar Brahma Aeroclube</h4>
														<p>Avenida Olavo Fontoura, 650 - Santana, São Paulo</p>
													</li>
													<li>
														<h4>TOTEM Bar Léo</h4>
														<p>Rua Aurora, 100 - Santa Efigênia – Centro, São Paulo</p>
													</li>
													<li>
														<h4>TOTEM Bar o Torcedor</h4>
														<p>Praça Charles Miller, s/nº - Dentro do estádio do Pacaembu.</p>
													</li>
												</ul>
											</li>
											<li>
												<p>Bilheteria oficial, que venderá ingressos até a data do evento:</p>
												<p>Bar Brahma Centro – funcionamento da bilheteria de terça-feira a domingo das 13h às 22h</p>
												<p>Av. São João, 677 - Centro - SP - CEP: 01036-00 (no cruzamento com a Av. Ipiranga)</p>
											</li>
											<li>
												<p>Para atendimento a grupos (10 pessoas ou mais) através do Call Center que funcionará até um dia antes do evento, através do telefone (11) 3674-9411.</p>
												<p>O horário de funcionamento é de segunda-feira a sexta-feira, das 9h às 18h.</p>
											</li>
										</ol>
										<h3>Importante</h3>
										<ul>
											<li><p>A bilheteria oficial não cobra taxa de conveniência.</p></li>
											<li><p>Taxa de conveniência de 15% é cobrada na Internet e nos pontos de venda.</p></li>
											<li><p>Taxa de entrega em domicílio será aplicada (opção disponível apenas para compra através do website).</p></li>
										</ul>
										<div class="spacer-faq"></div>
									</div>
									
									<p><a data-toggle="collapse" href="#p14"><h4>Quais as formas de pagamento?</h4></a></p>
									<div id="p14" class="content-faq panel-collapse collapse">
										<p>Nos pontos de venda, o pagamento poderá ser feito no débito (Mastercard, Visa ou Elo) e no crédito em até 5x (Mastercard ou Visa).</p>
										<p>No site, o pagamento poderá ser feito no débito (Visa) ou crédito em até 5x (Mastercard e Visa).</p>
										<p>Na bilheteria oficial, o pagamento poderá ser feito no débito (Mastercard, Visa ou Elo), no crédito em até 5x (Mastercard ou Visa) ou em dinheiro.</p>
										<p>Cada pessoa poderá comprar um número máximo de 6 ingressos por dia de evento.</p>
										<div class="spacer-faq"></div>
									</div>
									
									<p><a data-toggle="collapse" href="#p15"><h4>Quando vou receber minhas entradas?</h4></a></p>
									<div id="p15" class="content-faq panel-collapse collapse">
										<p>O recebimento das entradas dependerá do meio escolhido para a compra:</p>
										<ol type="1">
											<li>
												<p>pelo website do evento (www.brahmavalley.com.br) e pelo website da Total Acesso (www.totalacesso.com), o cartão utilizado na compra (débito ou crédito) será a sua entrada. Você receberá um e-mail explicativo após a confirmação do pagamento. Por isso, se você comprou entradas para você e para seus amigos, todos deverão estar juntos para chegar ao evento, pois o cartão deverá ser passado na catraca para liberar cada entrada adquirida.</p>
												<p>Se a compra foi feita através do website com a opção de entrega em domicílio, além do email de confirmação, você também receberá os ingressos físicos no endereço indicado no ato da compra até 15 dias antes do evento.</p>
											</li>
											<li><p>através dos pontos de venda com auto atendimento (totens interativos), o cartão utilizado na compra (débito ou crédito) será a sua entrada. Você receberá um voucher no ato da compra. Por isso, se você comprou entradas para você e para seus amigos, todos deverão chegar juntos ao evento, pois o cartão deverá ser passado na catraca para liberar cada entrada adquirida.</p></li>
											<li><p>Na bilheteria oficial, você receberá os ingressos físicos no ato da compra.</p></li>
											<li><p>Para atendimento a grupos (10 pessoas ou mais) através do Call Center, os ingressos deverão ser retirados no endereço combinado no ato da compra.</p></li>
										</ol>
										<div class="spacer-faq"></div>
									</div>
								</div>
								<div id="option-form" class="tab-pane">
									<p class="spacer-top">Se você ainda tem alguma dúvida sobre o festival, utilize o formulário abaixo para entrar em contato com o nosso time.</p>
									<form class="spacer-top">
										<div class="row">
											<div class="form-group col-xs-12">
												<label for="name">Nome</label>
												<input type="text" class="form-control" id="name">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-xs-12">
												<label for="email">E-mail</label>
												<input type="text" class="form-control" id="email">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-xs-12">
												<label for="telefone">Telefone</label>
												<input type="text" class="form-control" id="telefone">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-xs-12">
												<label for="telefone">Dúvida</label>
												<textarea class="form-control" id="duvida" rows="4"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-xs-12">
												<label><input type="checkbox" value="aceito" style="margin-right:5px;">Aceito receber conteúdos informacionais, promocionais e transacionais da Ambev.</label>
											</div>
										</div>
										<div class="row left">
											<div class="form-group col-xs-12">
												<button class="btn btn-large btn-primary btn-enviar" type="button">Enviar</button>
												<div class="btn-infos">Sua dúvida será respondida dentro de no máximo 7 dias.</div>
											</div>
										</div>
									</form>
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