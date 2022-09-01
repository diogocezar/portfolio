<?php
	include('./app/autoload.php');
	if(!empty($_GET['artista']))
		$p = "../";
	else
		$p = "./";
	$i = Oracle::getInstance();
	$t = "Brahma Valley - Artistas";
	$e = [
		'artistas.css',
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
		'js/objects/public/share.js',
		'js/objects/public/artists.js',
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
			<section id="artistas">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 center">
							<img alt="ARTISTAS" src="<?php echo $p ?>images/artistas/artistas_title.png" class="img-responsive floating img-center img-title" data-sr/>
						</div>
					</div>
					<div class="row row-artistas-out">
						<div class="col-lg-6 col-md-6 col-sm-12 center">
							<h2 class="font-title">28 de Novembro</h2>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="phillip-phillips"
										data-day="Dia 28"
										data-title="Phillip Phillips"
										data-description="Cantor e compositor norte-americano que ficou conhecido por ter vencido a décima primeira edição do prestigiado reality show American Idol. Sua música “Home”, lançado após sua vitória, tornou-se a música mais vendida de todas as edições do programa."
										data-img="images/artistas/avatar/artistas_avatar_phillip_phillips.jpg"
										data-clip="oozQ4yV__Vw"
									>
										<img alt="Phillip Phillips" src="<?php echo $p ?>images/artistas/mini/artistas_phillip_phillips.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="henrique-e-diego"
										data-day="Dia 28"
										data-title="Henrique e Diego"
										data-description="Dupla de Mato Grosso formada em 2005, possuí músicas notáveis como “Top do Verão”, “Zuar e Beber” “Suíte 14” para citar algumas. A dupla já recebeu no palco as participações especiais de Humberto e Ronaldo, Matheus e Kauan e Gusttavo Lima. E seu último DVD contou com a participação especial do MC Guimê."
										data-img="images/artistas/avatar/artistas_avatar_henrique_e_diego.jpg"
										data-clip="gmvFLIuVAbA"
										data-invite="Z_p7jouhppI"
									>
										<img alt="Henrique e Diego" src="<?php echo $p ?>images/artistas/mini/artistas_henrique_e_diego.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="marcos-e-belutti"
										data-day="Dia 28"
										data-title="Marcos e Belutti"
										data-description="2014 foi a hora da virada para Marcos e Belutti. Hit do ano, “Domingo de Manhã” contabiliza mais de 51 milhões de visualizações no Youtube e rendeu bons frutos a dupla, como passagens pelo “Domingão do Faustão” e “Show da Virada” e até indicação a melhor música 2014 nos “Melhores do ano do Faustão”."
										data-img="images/artistas/avatar/artistas_avatar_marcos_e_belluti.jpg"
										data-clip="vuiAcTC8o88"
										data-invite="cAjZJK1zHh0"
									>
										<img alt="Marcos E Belutti" src="<?php echo $p ?>images/artistas/mini/artistas_marcos_e_belutti.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="jads-e-jadson"
										data-day="Dia 28"
										data-title="Jads e Jadson"
										data-description="Jads e Jadson são irmãos e herdaram do pai, além das iniciais dos nomes, o dom pela música. Lançaram o primeiro disco em 2003. Já em 2009, veio o primeiro DVD ao vivo, com o sucesso “Eucaliptos”. Atualmente no auge do sucesso, acabaram de lançar o DVD “É Divino” gravado no dia dos namorados e que conta com “Ressentimentos”, uma das músicas mais tocadas no país."
										data-img="images/artistas/avatar/artistas_avatar_jads_e_jadson.jpg"
										data-clip="6jdiNh8sZow"
										data-invite="nKUe3hzPetU"
									>
										<img alt="Jads e Jadson" src="<?php echo $p ?>images/artistas/mini/artistas_jads_e_jadson.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="victor-e-leo"
										data-day="Dia 28"
										data-title="Victor e Leo"
										data-description="Além de músicos, Victor e Léo são produtores, compositores e arranjadores. “Borboletas”, “Fada” e “Amigo Apaixonado” são só alguns dos sucessos dessa dupla que ganhou o Grammy Latino de Melhor Álbum Sertanejo em 2013 e já fez shows pelo Brasil inteiro, Argentina, Bolívia, Equador, Venezuela e Uruguai."
										data-img="images/artistas/avatar/artistas_avatar_victor_e_leo.jpg"
										data-clip="DULQudMe7vA"
									>
										<img alt="Victor e Leo" src="<?php echo $p ?>images/artistas/mini/artistas_victor_e_leo.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="mc-guime"
										data-day="Dia 28"
										data-title="MC Guimê"
										data-description="Considerado um dos nomes do funk ostentação no país, Guilherme Dantas, o MC Guime é cantor e compositor. Ficou nacionalmente conhecido pela sua primeira canção “Tá Patrão”, em seguida lançou uma serie de singles como “Plaquê de 100” “Na pista eu arraso” e “País do Futebol” que contou com a participação do rapper Emicida."
										data-img="images/artistas/avatar/artistas_avatar_mc_guime.jpg"
										data-clip="VGPXnFpbf-8"
									>
										<img alt="MC Guimê" src="<?php echo $p ?>images/artistas/mini/artistas_mc_guime.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="thaeme-e-thiago"
										data-day="Dia 28"
										data-title="Thaeme e Thiago"
										data-description="Com mais de 4 anos de carreira, 2 DVDs, 4 CDs e um EP, Thaeme e Thiago marcam a nova geração da música sertaneja.  Com uma média de 18 shows ao mês, o espetáculo conta com um cenário grandioso, painéis que se movimentam e uma iluminação cheia de efeitos especiais."
										data-img="images/artistas/avatar/artistas_avatar_thaeme_e_tiago.jpg"
										data-clip="RCLRdTX-oBk"
									>
										<img alt="Thaeme e Thiago" src="<?php echo $p ?>images/artistas/mini/artistas_thaeme_e_thiago.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="bruninho-e-davi"
										data-day="Dia 28"
										data-title="Bruninho e Davi"
										data-description="Bruninho e Davi são de Campo Grande, Mato Grosso. Amigos desde pequenos, só começaram a dupla em 2009 mas o sucesso veio rápido. No ano seguinte, lançaram o clipe “Vamo Mexê” com participação de Michel Teló e que já tem mais de 7 milhões de views no YouTube. É deles também os sucessos “Se Namora Fosse Bom”, “Cê é Loco” e “Imagina com as Amigas”."
										data-img="images/artistas/avatar/artistas_avatar_bruninho_e_davi.jpg"
										data-clip="mmvudaddFVs"
										data-invite="rzV6Wtv-Yf8"
									>
										<img alt="Bruninho e Davi" src="<?php echo $p ?>images/artistas/mini/artistas_bruninho_e_davi.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="joao-neto-e-frederico"
										data-day="Dia 28"
										data-title="João Neto e Frederico"
										data-description="João Neto e Frederico são uma dupla de cantores goianos representantes da música sertaneja universitária. Gravaram o seu primeiro CD “Se não for por amor” em 2004 e desde então não param de crescer e realizar shows por todo o Brasil."
										data-img="images/artistas/avatar/artistas_avatar_joao_neto_e_frederico.jpg"
										data-clip="gLIn9ta_Yzk"
									>
										<img alt="João Neto e Frederico" src="<?php echo $p ?>images/artistas/mini/artistas_joao_neto_e_frederico.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="carlos-e-jader"
										data-day="Dia 28"
										data-title="Carlos e Jader"
										data-description="Dupla de Rio Branco formada pelos irmãos Carlos e Jader. Foram descobertos em um festival de música sertaneja em Porto Velho e se firmaram no mercado logo após o lançamento do primeiro disco “Quem sabe seu amor sou eu”."
										data-img="images/artistas/avatar/artistas_avatar_carlos_e_jader.jpg"
										data-clip="GKxw7PnZRmw"
									>
										<img alt="Carlos Jader" src="<?php echo $p ?>images/artistas/mini/artistas_carlos_jader.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="bob-sinclar"
										data-day="Dia 28"
										data-title="Bob Sinclar"
										data-description="Além de DJ, Bob é um produtor francês e dono do selo Yellow Productions. Suas músicas tornaram-se sucesso internacionais, sendo particularmente muito populares na Europa. Alguns de seus hits incluem: “Love Generation” e “World, Hold on”. Em 2006, Bob Sinclar recebeu o prêmio TMF na categoria de melhor dançar internacional."
										data-img="images/artistas/avatar/artistas_avatar_bob_sinclair.jpg"
										data-clip="rURCngUpCfw"
										data-invite="uzbJF6S9X0A"
									>
										<img alt="Bob Sinclar" src="<?php echo $p ?>images/artistas/mini/artistas_bob_sinclar.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="ben-miller-band"
										data-day="Dia 28"
										data-title="Ben Miller Band"
										data-description="Formada em 2005, o Ben Miller Band é uma banda americana composta pelo vocalista e guitarrista Ben Miller, o baixista Scott Leeper, e o percussionista Doug Dicharry. A banda é famosa por misturar elementos do Folk, do Blues e do Country em suas músicas."
										data-img="images/artistas/avatar/artistas_avatar_ben_miller.jpg"
										data-clip="4hU3F_QIda0"
										data-invite="0mEBsb4dHUE"
									>
										<img alt="Ben Miller" src="<?php echo $p ?>images/artistas/mini/artistas_ben_miller.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="make-u-sweat-28"
										data-day="Dia 28"
										data-title="Make U Sweat"
										data-description="Banda formada pelo Dudu, Guga e Pedro que há anos tocam juntos nos principais clubs de São Paulo.  A marca registrada do trio é a energia na pista, fazendo com que estejam presentes nos grandes festivais de música."
										data-img="images/artistas/avatar/artistas_avatar_make_u_sweat.jpg"
										data-clip="DK1gyEMshr4"
									>
										<img alt="Make u Sweat" src="<?php echo $p ?>images/artistas/mini/artistas_make_u_sweat.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="anitta"
										data-day="Dia 28"
										data-title="Anitta (Participação especial)"
										data-description="Larissa Machado, mais conhecida pelo nome artístico Anitta, é cantora, compositora, atriz e dançarina. Anitta já foi nomeada em premiações nacionais e internacionais. Em 2013, obteve três indicações no Prêmio Multishow, nas categorias "Artista Revelação", "Melhor Clipe" e "Música Chiclete", na ocasião a cantora venceu nas duas últimas categorias. No final de 2013 foi eleita como a artista brasileira do ano pelo iTunes."
										data-img="images/artistas/avatar/artistas_avatar_anitta.jpg"
										data-clip="aMWa2DLEcIw"
									>
										<img alt="Anitta" src="<?php echo $p ?>images/artistas/mini/artistas_anitta.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="negra-li"
										data-day="Dia 28"
										data-title="Negra Li (Participação Especial)"
										data-description="Negra Li é uma das principais cantoras brasileiras da atualidade. Já gravou com grandes artistas como Caetano Veloso, Nando Reis, Skank, Mano Brown, Sabotage, entre outros. Já ganho um VMB e lançou 3 discos. O último, “Tudo de Novo” em 2012."
										data-img="images/artistas/avatar/artistas_avatar_negra_li.jpg"
										data-clip="LJy8VIBcSHM"
										data-invite="K5djgIxJv-c"
									>
										<img alt="Negra Li" src="<?php echo $p ?>images/artistas/mini/artistas_negra_li.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="breno-e-caio-cezar"
										data-day="Dia 28"
										data-title="Breno e Caio Cezar (Participação Especial)"
										data-description="Gêmeos, Breno e Caio Cesar nasceram em São Paulo e desde pequenos eram fãs de Zezé di Camargo e Luciano e foi justamente o filme “Dois Filhos de Francisco”, que veio a inspiração para formar a dupla. Então, com o apoio da família, lançaram “Doidera Virou Minha Cabeça” e o público os abraçou, a música rodou o interior de São Paulo e Sul de Minas."
										data-img="images/artistas/avatar/artistas_avatar_breno_e_caio_cesar.jpg"
										data-clip="sAYIAkJRVk4"
									>
										<img alt="Bruno e Caio Cezar" src="<?php echo $p ?>images/artistas/mini/artistas_breno_e_caio_cezar.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="luscas-fresno"
										data-day="Dia 28"
										data-title="Lucas da Fresno (Participação Especial)"
										data-description="Conhecido também por Paraíba ou Beeshop como é intitulado em carreira solo, Lucas é um cantor, guitarrista, pianista e compositor. Em 1999, ajudou a fundar a banda Fresno, onde é vocalista até os dias atuais. Em 2010, lançou o seu primeiro álbum solo, The Rise and Fall of Beeshop."
										data-img="images/artistas/avatar/artistas_avatar_lucas_fresno.jpg"
										data-clip="WkE5yNP-6xQ"
										data-invite="UUqPhjcBw2M"
									>
										<img alt="Luscas Fresno" src="<?php echo $p ?>images/artistas/mini/artistas_fresno.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="thiago-abravanel"
										data-day="Dia 28"
										data-title="Thiago Abravanel"
										data-description="Cantor e ator de renome, Tiago começou sua carreira em 2004. Participou de diversas novelas, mas foi no musical Tim Maia – Vale Tudo que alcançou notoriedade e aclamação da crítica. Em 2014, Tiago lançou seu primeiro single e videoclipe, com o trabalho “Eclético”."
										data-img="images/artistas/avatar/artistas_avatar_thiago_abravanel.jpg"
										data-clip="pZbQQPoRExk"
									>
										<img alt="Thiago Abravanel" src="<?php echo $p ?>images/artistas/mini/artistas_thiago_abravanel.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="renato-teixeira"
										data-day="Dia 28"
										data-title="Renato Teixeira (Participação Especial)"
										data-description="Um dos compositores mais talentosos da música brasileira, Renato Teixeira já teve músicas gravadas por Elis Regina (Romaria) e Maria Bethania. Fez parceria com outros grandes músicos como Almir Sater e Sérgio Reis e Geraldo Azevedo. Seu último disco é “Amizade Sincera”, de 2010."
										data-img="images/artistas/avatar/artistas_avatar_renato_teixeira.jpg"
										data-clip="aup_ZeTHtcI"
									>
										<img alt="Renato Teixeira" src="<?php echo $p ?>images/artistas/mini/artistas_renato_teixeira.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="mato-grosso-e-mathias"
										data-day="Dia 28"
										data-title="Mato Grosso e Mathias (Participação Especial)"
										data-description="Dupla sertaneja do Brasil originária dos anos 70, Matogrosso e Mathias tem a alcunha de “a mais romântica do Brasil”. É reconhecida por difundir a música sertaneja em uma época que o sertanejo ainda estava à margem da imprensa no Brasil, abrindo caminho para vários artistas do mesmo gênero de muito sucesso hoje.  Entre os hits de sua extensa carreira, destacam-se “Pele de Maçã”, “Tentei te Esquecer”, “Idas e Voltas”, “Memórias”, “24 horas de Amor” e “Pedaço de minha vida”, que deu à dupla o seu primeiro disco de ouro."
										data-img="images/artistas/avatar/artistas_avatar_mato_grosso_e_mathias.jpg"
										data-clip="k7YGrK3w_5k"
										data-invite="t3RCh74jEGA"
									>
										<img alt="Mato Grosso e Mathias" src="<?php echo $p ?>images/artistas/mini/artistas_mato_grosso_e_mathias.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a href="#">
										<img alt="Artista Surpresa" src="<?php echo $p ?>images/artistas/mini/artistas_artista_surpresa.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 center">
							<h2 class="font-title">29 de Novembro</h2>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="henrique-e-juliano"
										data-day="Dia 29"
										data-title="Henrique e Juliano"
										data-description="Henrique e Juliano são irmãos e cantam desde criança, após incentivo do pai. Em 2013, lançaram o primeiro DVD com sucessos como “Mistura louca”, “Recaídas” e “Não to valendo nada”. Ano passado, gravaram o segundo DVD, reunindo mais de 15 mil pessoas no estádio Nacional de Brasília."
										data-img="images/artistas/avatar/artistas_avatar_henrique_e_juliano.jpg"
										data-clip="2Q6eFRuYa2w"
									>
										<img alt="Henrique e Juliano" src="<?php echo $p ?>images/artistas/mini/artistas_henrique_e_juliano.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="fernando-e-sorocaba"
										data-day="Dia 29"
										data-title="Fernando e Sorocaba"
										data-description="Com mais de oito anos de carreira, Fernando e Sorocaba são referência para as novas gerações e são apontados pela mídia como um dos melhores shows da atualidade. A dupla mistura música, entretenimento e muita diversão em um show que já passou pelo Brasil inteiro, Estados Unidos, Europa e América Latina."
										data-img="images/artistas/avatar/artistas_avatar_fernando_e_sorocaba.jpg"
										data-clip="4fal0J_OHG8"
										data-invite="6jTIiO_nIO8"
									>
										<img alt="Fernando e Sorocaba" src="<?php echo $p ?>images/artistas/mini/artistas_fernando_e_sorocaba.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="michel-telo"
										data-day="Dia 29"
										data-title="Michel Teló"
										data-description="Michel Teló foi vocalista do grupo Tradição antes de estourar nas paradas de sucesso do Brasil e do mundo com a música “Ai Se Eu Te Pego”. O clipe da música tem mais de 500 milhões de visualizações no YouTube e chegou ao topo do ranking em 23 países da Europa e da América Latina. Em 2014, lançou Bem Sertanejo, um álbum de duetos com grandes nomes da música sertaneja, como Chitãozinho e Xororó, Paula Fernandes e os companheiros de Brahma Valley, Victor e Léo."
										data-img="images/artistas/avatar/artistas_avatar_michel_telo.jpg"
										data-clip="liT89w5Q66w"
									>
										<img alt="Michel Teló" src="<?php echo $p ?>images/artistas/mini/artistas_michel_telo.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="colbie-caillat"
										data-day="Dia 29"
										data-title="Colbie Caillat"
										data-description="Colbie Caillat é um cantora americana que ficou famosa pelos hits Bubbly e Realize. Ela já vendeu mais de 6 milhões de discos em todo o mundo e em 2009 foi nomeada uma das maiores vendedoras de disco da década pela renomada revista Billboard."
										data-img="images/artistas/avatar/artistas_avatar_colbie.jpg"
										data-clip="AWGqoCNbsvM"
									>
										<img alt="Colbie Caillat" src="<?php echo $p ?>images/artistas/mini/artistas_colbie_caillat.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="make-u-sweat-29"
										data-day="Dia 29"
										data-title="Make U Sweat"
										data-description="Banda formada pelo Dudu, Guga e Pedro que há anos tocam juntos nos principais clubs de São Paulo.  A marca registrada do trio é a energia na pista, fazendo com que estejam presentes nos grandes festivais de música."
										data-img="images/artistas/avatar/artistas_avatar_make_u_sweat.jpg"
									>
										<img alt="Make u Sweat" src="<?php echo $p ?>images/artistas/mini/artistas_make_u_sweat.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="chris-weaver-band"
										data-day="Dia 29"
										data-title="Chris Weaver Band"
										data-description="Banda formada por Chris Weaver (vocalista e guitarrista), Colin Poulton (Guitarrista), Andy Leab (Baixista) e Tyler Parkey (Baterista). Conhecida pelo estilo único composto por elementos do Country Music, do Blues e Soul Music."
										data-img="images/artistas/avatar/artistas_avatar_chris_weaver.jpg"
										data-clip="Kh1EzEeffUA"
									>
										<img alt="Chris Weaver" src="<?php echo $p ?>images/artistas/mini/artistas_chris_waver.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="lucas-lucco"
										data-day="Dia 29"
										data-title="Lucas Lucco"
										data-description="Nascido em Patrocínio, cidade do Triângulo Mineiro, Lucco foi criado em meio às modas de viola, celebrando os clássicos sertanejos. Antes mesmo de entrar na adolescência, já cantava, tocava e compunha. O sucesso veio com a música Mozão, composta por Lucas em parceria com o seu produtor, Wilibaldo Neto."
										data-img="images/artistas/avatar/artistas_avatar_lucas_lucco.jpg"
										data-clip="aUCrEEcVkVw"
									>
										<img alt="Lucas Lucco" src="<?php echo $p ?>images/artistas/mini/artistas_lucas_lucco.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="gusttavo-lima"
										data-day="Dia 29"
										data-title="Gusttavo Lima"
										data-description="Autor do sucesso “Balada”, Gusttavo Lima já fez shows nas maiores cidades do Brasil e também nos Estados Unidos. Em uma homenagem à música sertaneja, lançou em 2015 o DVD e Cd ao vivo Buteco do Gusttavo Lima com clássicos antigos e atuais. O show, gravado em Goiânia, contou com a participação de Zezé Di Camargo e Luciano, Bruno e Marrone, Leonardo, entre outros."
										data-img="images/artistas/avatar/artistas_avatar_gusttavo_lima.jpg"
										data-clip="QMva9e_IZMQ"
									>
										<img alt="Gusttavo Lima" src="<?php echo $p ?>images/artistas/mini/artistas_gustavo_lima.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="chitaozinho-e-xororo"
										data-day="Dia 29"
										data-title="Chitãozinho e Xororó"
										data-description="Chitãozinho e Xororó é uma das duplas de sertanejo mais reconhecida do Brasil. É deles sucessos como “Evidências”, “Fio de Cabelo” e “Brincar de Ser Feliz”. Em mais de 40 anos de carreira, já venderam mais de 35 milhões de discos."
										data-img="images/artistas/avatar/artistas_avatar_chitaozinho_e_xororo.jpg"
										data-clip="ePjtnSPFWK8"
									>
										<img alt="Chitãozinho e Xororó" src="<?php echo $p ?>images/artistas/mini/artistas_chitaozinho_e_xororo.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="joao-bosco-e-vinicius"
										data-day="Dia 29"
										data-title="João Bosco e Vinicius"
										data-description="“Chora, Me Liga”, “Amiga Linda” e “Sorte é Ter Você” são todos sucessos de João Bosco e Vinicius, que se conheceram com 10 anos de idade. O primeiro disco foi lançado em 2002, vendendo 40 mil cópias só em Mato Grosso. Já fizeram shows em Madrid, Londres, Lisboa e Porto e no Carnaval da Bahia. Seu mais recente lançamento é o disco “Estrada de Chão”, de 2015."
										data-img="images/artistas/avatar/artistas_avatar_joao_bosco_e_vinicius.jpg"
										data-clip="afKp9gKzFQo"
										data-invite="gOqWwqjSUlg"
									>
										<img alt="João Bosco e Vinicius" src="<?php echo $p ?>images/artistas/mini/artistas_joao_bosco_e_vinicius.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="jorge-ben-jor"
										data-day="Dia 29"
										data-title="Jorge Ben Jor"
										data-description="Jorgen Ben Jor quase foi jogador de futebol, chegando a fazer parte do time infanto juvenil do Flamengo antes de virar um dos artistas mais respeitado no mundo da música. Dono de um estilo único, Jorge Ben já foi regravado e homenageado diversas vezes, graças as suas músicas de sucesso como “Mas Que Nada”, “Que Maravilha”, “Fio Maravilha”, “Taj Mahal” e “País Tropical”."
										data-img="images/artistas/avatar/artistas_avatar_jorge_ben_jor.jpg"
										data-clip="rd3LEsKIjNI"
									>
										<img alt="Jorge Ben Jor" src="<?php echo $p ?>images/artistas/mini/artistas_jorge_ben_jor.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="rominho"
										data-day="Dia 28"
										data-title="Rominho"
										data-description="Rominho é o mais novo fenômeno sertanejo a surgir de Campo Grande, MS. Na infância, cantou com Michel Teló na dupla Rominho e Michel mas hoje em dia vem traçando seu próprio caminho, com músicas de sucesso como “Vou Te Trair” e “Muié Muié”."
										data-img="images/artistas/avatar/artistas_avatar_rominho.jpg"
										data-clip="thbQ_LDg5-Q"
										data-invite="Lq08Nd6FHIw"
									>
										<img alt="Rominho" src="<?php echo $p ?>images/artistas/mini/artistas_rominho.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="dj-tartaruga"
										data-day="Dia 29"
										data-title="DJ Tartaruga"
										data-description="Com 25 anos de carreira, já viajou por diversos países mostrando o seu trabalho. Ele se destaca pelo estilo diferenciado, mixando de diversas formas (Funk, House, Hip Hop e Sertanejo) em um mesmo set. Desde 2013, é o DJ oficial do programa Esquenta da rede Globo."
										data-img="images/artistas/avatar/artistas_avatar_dj_tartaruga.jpg"
										data-clip="dqnAVQT-KG8"
									>
										<img alt="Dj Tartaruga" src="<?php echo $p ?>images/artistas/mini/artistas_dj_tartaruga.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="projota"
										data-day="Dia 29"
										data-title="Projota (Participação Especial)"
										data-description="Natural de São Paulo, Projota começou a chamar atenção nas batalhas de MCs, vencendo quatro vezes a batalha da Santa Cruz e três vezes a Rinha dos MCs. Depois de alguns EPs e Mixtapes, lançou em 2014 “Foco, Força e Fé”, seu primeiro álbum, com participações de Marcelo D2 e Negra Li."
										data-img="images/artistas/avatar/artistas_avatar_projota.jpg"
										data-clip="7m0kmGKX8o8"
									>
										<img alt="Projota" src="<?php echo $p ?>images/artistas/mini/artistas_projota.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="mr-catra"
										data-day="Dia 29"
										data-title="Mr Catra (Participação Especial)"
										data-description="Mr Catra é um dos maiores cantores de funk carioca do Brasil. É dele músicas como “Adultério”, “Soltinha” e “Uh Papai Chegou”. Dono de uma das vozes mais marcantes da música brasileira, vai colocar todo o Brahma Valley pra dançar até o chão."
										data-img="images/artistas/avatar/artistas_avatar_catra.jpg"
										data-clip="4R_95-ELWJ4"
									>
										<img alt="Mr Catra" src="<?php echo $p ?>images/artistas/mini/artistas_mr_catra.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="ludmilla"
										data-day="Dia 29"
										data-title="Ludmilla (Participação Especial)"
										data-description="Com apenas 20 anos, Ludmilla é a nova sensação do funk. “Fala Mal de Mim” foi sucesso nas paradas e baladas brasileiras e “Hoje”, seu maior sucesso, foi trilha sonora da novela Império, da Globo. O ano de 2014 foi marcante em sua carreira, graças ao lançamento de “Hoje”, o primeiro disco de sua carreira."
										data-img="images/artistas/avatar/artistas_avatar_ludmilla.jpg"
										data-clip="Rvq7R9dwJ3U"
									>
										<img alt="Ludmilla" src="<?php echo $p ?>images/artistas/mini/artistas_ludmilla.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
							<div class="row row-artistas">
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="gabriel-o-pensador"
										data-day="Dia 29"
										data-title="Gabriel, O Pensador (Participação Especial)"
										data-description="Além de rapper, Gabriel também é compositor, escritor e empresário. O músico que já ganhou diversos prêmios nacionais como de melhor cantor e melhor clipe em 1998, conquistou também o prêmio Jabuti com o livro “Um garoto chamado Roberto”."
										data-img="images/artistas/avatar/artistas_avatar_gabriel_o_pensador.jpg"
										data-clip="S9FTlI1KuJA"
									>
										<img al"Gabriel o Pensador" src="<?php echo $p ?>images/artistas/mini/artistas_gabriel_pensador.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="fiduma-e-jeca"
										data-day="Dia 29"
										data-title="Fiduma e Jeca (Participação Especial)"
										data-description="Criada em 2010 pelos universitários apelidados de “Fiduma” e “Jeca” pelos seus veteranos, lançaram seu primeiro CD em 2013 e a música “Anjo Chapadex” alcançou grande popularidade na internet, em faculdades e no som dos carros de todo Brasil."
										data-img="images/artistas/avatar/artistas_avatar_fiduma_e_jeca.jpg"
										data-clip="vKGnVFgtPOw"
										data-invite="dGUxMCKuVs4"
									>
										<img alt="Fiduma e Jeca" src="<?php echo $p ?>images/artistas/mini/artistas_fiduma_e_jeca.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="gabi-luthai"
										data-day="Dia 29"
										data-title="Gabi Luthai (Participação especial)"
										data-description="Cantora e compositora de Araxá, Minas Gerais. Com apenas 22 anos, Gabi já se destaca como uma das promessas da música brasileira."
										data-img="images/artistas/avatar/artistas_avatar_gabi_luthai.jpg"
										data-clip="4f-GNCXl_8w"
									>
										<img alt="Gabi Luthai" src="<?php echo $p ?>images/artistas/mini/artistas_gabi_luthai.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="bruna-viola"
										data-day="Dia 29"
										data-title="Bruna Viola (Participação especial)"
										data-description="Bruna é cantora, compositora e violeira de Cuiabá. Seu maior ídolo e referência é Tião Carreiro da dupla Tião Carreiro e Pardinho. Atualmente reside em Ribeirão Preto e viaja por todo o Brasil fazendo shows e apresentações em programas de televisão."
										data-img="images/artistas/avatar/artistas_avatar_bruna_viola.jpg"
										data-clip="C4QSh1VXomQ"
										data-invite="RAX0g5hHA3g"
									>
										<img alt="Bruna Viola" src="<?php echo $p ?>images/artistas/mini/artistas_bruna_viola.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 center">
									<a 
										class="artist"
										data-slug="jair-oliveira-e-luciana-mello"
										data-day="Dia 29"
										data-title="Jair Oliveira e Luciana Mello (Participação especial)"
										data-description="Seguindo os passos do pai, Jair Rodrigues, os irmãos Jair Oliveira e Luciana Mello começaram a cantar ainda crianças, na Turma do Balão Mágico. Juntos desde 2010, já lançaram um DVD e prometem enriquecer muito o espetáculo."
										data-img="images/artistas/avatar/artistas_avatar_jair_oliveira.jpg"
										data-clip="W0PnQBPC4ac"
									>
										<img alt="Jair Oliveira e Luciana Mello" src="<?php echo $p ?>images/artistas/mini/artistas_jair_oliveira.jpg" class="img-center animation-05" data-sr/>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="detalhes">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 center spacer-bottom">
							<div class="line" data-sr>
								<img alt="Voltar para Artistas" class="img-line animation-06 back-top pointer" src="<?php echo $p ?>images/shared/shared_up.png"/>
								<div class="lbl-line font-text">Artistas</div>
							</div>
						</div>
						<div class="col-lg-4 center">
							<div class="fill-img"></div>
						</div>
						<div class="col-lg-7 col-lg-offset-1 col-md-12 col-sm-12 center">
							<h3 class="font-title fill-day" data-sr></h3>
							<h4 class="font-title fill-title" data-sr></h4>
							<p class="fill-description" data-sr></p>
							<div class="fill-special" data-sr>
								<div class="embed-responsive embed-responsive-16by9 fill-special-content" data-sr></div>
							</div>
							<div class="full-width fill-tab" data-tabs="tabs">
								<a href="#option-clip" data-toggle="tab" class="tab-option-artists"><div class="tab tab-start animation-04 actived">Clipe Oficial</div></a>
								<a href="#option-invite" data-toggle="tab" class="tab-option-artists"><div class="tab tab-end tab-border animation-04">Convite</div></a>
							</div>
							<div id="tabs" class="tab-content">
								<div id="option-clip" class="tab-pane active fill-clip">
									<div class="embed-responsive embed-responsive-16by9 video-artist fill-clip-video" data-sr></div>
								</div>
								<div id="option-invite" class="tab-pane fill-invite">
									<div class="embed-responsive embed-responsive-16by9 video-artist fill-invite-video" data-sr></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="videos">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 center spacer-bottom">
							<h2 class="font-title" data-sr>Confira os vídeos do Brahma Valley</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 center spacer-bottom">
							<div class="col-lg-6 col-md-12">
								<div class="full-width" data-sr data-tabs="tabs">
									<a href="#option-line-up" data-toggle="tab" class="tab-option-videos"><div class="tab tab-start animation-04 actived">Line-up</div></a>
									<a href="#option-making-of" data-toggle="tab" class="tab-option-videos"><div class="tab tab-end tab-border animation-04">Making of da Música Tema</div></a>
								</div>
							</div>
							<div class="col-lg-3 hidden-md hidden-sm hidden-xs">
								<div class="full-width margin-vertical" data-sr>
									<div class="lbl-download font-text">Baixe a música tema</div>
									<a download="brahma_valley_musica_tema" href="<?php echo $p ?>files/brahma_valley_musica_tema.mp3" target="+blank">
										<img alt="Baixe a música tema" class="img-line animation-06" src="<?php echo $p ?>images/shared/shared_down.png"/>
									</a>
								</div>
							</div>
							<div class="col-lg-3 hidden-md hidden-sm hidden-xs">
								<div class="full-width margin-vertical" data-sr>
									<a href="#"><img alt="Compartilhe no facebook" class="animation-06 share-face" src="<?php echo $p ?>images/shared/shared_facebook_color.png"/></a>
									<a href="#"><img alt="Compartilhe no twitter" class="animation-06 share-twitter" src="<?php echo $p ?>images/shared/shared_twitter_color.png"/></a>
									<div class="lbl-compartilhar font-text">Compartilhar</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div id="tabs" class="tab-content">
							<div id="option-line-up" class="tab-pane active">
								<div class="col-lg-12 center spacer-bottom">
									<div class="embed-responsive embed-responsive-16by9 video-artist" data-sr>
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KQyvmNeVDi8" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<div id="option-making-of" class="tab-pane">
								<div class="col-lg-12 center spacer-bottom">
									<div class="embed-responsive embed-responsive-16by9 video-artist" data-sr>
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bYyqYi_C46g" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
						<div class="hidden-lg col-md-12 col-sm-12 col-xs-12 center">
							<div class="full-width" data-sr>
								<div class="lbl-download font-text">Baixe a música tema</div>
								<a href="<?php echo $p ?>files/brahma_valley_musica_tema.mp3" target="+blank">
									<img alt="Baixe a música tema" class="img-line animation-06" src="<?php echo $p ?>images/shared/shared_down.png"/>
								</a>
							</div>
						</div>
						<div class="hidden-lg col-md-12 col-sm-12 col-xs-12 center">
							<div class="full-width" data-sr>
								<img alt="Compartilhe no facebook" class="animation-06 share-face pointer" src="<?php echo $p ?>images/shared/shared_facebook_color.png"/>
								<img alt="Compartilhe no twitter" class="animation-06 share-twitter pointer" src="<?php echo $p ?>images/shared/shared_twitter_color.png"/>
								<div class="lbl-compartilhar font-text">Compartilhar</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="brahma-valley">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 center spacer-bottom">
							<h2 class="font-title" data-sr>#BrahmaValley</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center spacer-bottom">
							<blockquote class="twitter-tweet" data-cards="hidden" lang="en"><p lang="pt" dir="ltr">Cantor Phillip <a href="https://twitter.com/Phillips">@Phillips</a> retorna ao Brasil em novembro. Apresentação será realizada no festival <a href="https://twitter.com/hashtag/BrahmaValley?src=hash">#BrahmaValley</a>, em SP. <a href="http://t.co/30Ld1FW5Oc">http://t.co/30Ld1FW5Oc</a></p>&mdash; mariKi (@TKSphill) <a href="https://twitter.com/TKSphill/status/635235630381989888">August 22, 2015</a></blockquote>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center spacer-bottom">
							<blockquote class="twitter-tweet" data-cards="hidden" lang="en"><p lang="pt" dir="ltr">Vem ai o festival <a href="https://twitter.com/hashtag/BrahmaValley?src=hash">#BrahmaValley</a>! <a href="http://t.co/xARbsYeqEo">http://t.co/xARbsYeqEo</a> Vem ver: <a href="https://t.co/ZB00daHq0u">https://t.co/ZB00daHq0u</a> Ingressos: <a href="http://t.co/pImjwn2kMo">http://t.co/pImjwn2kMo</a></p>&mdash; Sabrina Sato Rahal (@SabrinaSatoReal) <a href="https://twitter.com/SabrinaSatoReal/status/637284963528871937">August 28, 2015</a></blockquote>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center spacer-bottom">
							<blockquote class="twitter-tweet" data-cards="hidden" lang="en"><p lang="pt" dir="ltr">Encontro marcado, galera! Quem ta comigo? <a href="https://twitter.com/hashtag/BrahmaValley?src=hash">#BrahmaValley</a> <a href="http://t.co/MLnkkPEi2U">http://t.co/MLnkkPEi2U</a> <a href="https://t.co/oic2iYwBXA">https://t.co/oic2iYwBXA</a></p>&mdash; Ronaldo Nazário (@Ronaldo) <a href="https://twitter.com/Ronaldo/status/637351179555614720">August 28, 2015</a></blockquote>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center spacer-bottom">
							<blockquote class="twitter-tweet" data-cards="hidden" lang="en"><p lang="pt" dir="ltr">Então foge do <a href="https://twitter.com/MarcoseBelutti">@marcosebelutti</a> ou As Mina Pira do <a href="https://twitter.com/duplaFeS">@duplafes</a>? Qual sua favorita? <a href="https://twitter.com/hashtag/BrahmaValley?src=hash">#BrahmaValley</a> <a href="http://t.co/X3HRi1epgy">http://t.co/X3HRi1epgy</a> <a href="http://t.co/6FnAf1xP6o">pic.twitter.com/6FnAf1xP6o</a></p>&mdash; Brahma (@BrahmaCerveja) <a href="https://twitter.com/BrahmaCerveja/status/637385987518300161">August 28, 2015</a></blockquote>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center spacer-bottom">
							<blockquote class="twitter-tweet" data-cards="hidden" lang="en"><p lang="pt" dir="ltr">Se preparem para o <a href="https://twitter.com/hashtag/BrahmaValley?src=hash">#BrahmaValley</a> em Novembro! ✌ 😉 Ingressos: <a href="http://t.co/IeFasnCyr2">http://t.co/IeFasnCyr2</a> <a href="http://t.co/KoSwTHqi0w">http://t.co/KoSwTHqi0w</a> <a href="https://t.co/Ow7W6EM4C0">https://t.co/Ow7W6EM4C0</a></p>&mdash; Marcos &amp; Belutti (@MarcoseBelutti) <a href="https://twitter.com/MarcoseBelutti/status/638457404359868416">August 31, 2015</a></blockquote>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center spacer-bottom">
							<blockquote class="twitter-tweet" data-cards="hidden" lang="en"><p lang="pt" dir="ltr"><a href="https://twitter.com/hashtag/BrahmaValley?src=hash">#BrahmaValley</a> com toda essa galera? Bora!!&#10;Ingressos:<a href="http://t.co/v00irN898n">http://t.co/v00irN898n</a> &#10; <a href="http://t.co/yhThZgPLsF">http://t.co/yhThZgPLsF</a> ;) <a href="https://t.co/32mMt0eRVy">https://t.co/32mMt0eRVy</a> <a href="https://twitter.com/hashtag/EquipeLL?src=hash">#EquipeLL</a></p>&mdash; Lucas Lucco (@lucaslucco) <a href="https://twitter.com/lucaslucco/status/638462537751658496">August 31, 2015</a></blockquote>
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
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</body>
<?php $i->showArtist(); ?>
</html>