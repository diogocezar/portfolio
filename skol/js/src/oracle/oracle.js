(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
Mobile = {
	isMobile   : null,
	mobileType : null,
	configure: function(){
		Mobile.init();
	},
	init: function(){
		if(jQuery.browser.mobile){
			Mobile.isMobile   = true;
			Mobile.mobileType = Mobile.getType();
		}
		else{
			Mobile.isMobile = false;
		}
		$(".set-mobile").empty().html(Mobile.isMobile ? "Você está em dispositivo mobile." + " " + Mobile.mobileType : "Você não está em dispositivo mobile.");
		Shared.Debug.log("Am i mobile? " + Mobile.isMobile);
	},
	getType: function(){
		var userAgent = navigator.userAgent || navigator.vendor || window.opera;
        if(userAgent.match( /iPad/i ) || userAgent.match( /iPhone/i ) || userAgent.match( /iPod/i ))
            return 'iOS';
        else if( userAgent.match(/Android/i ))
            return 'Android';
	}
}

PopUp = {
	config: {
		delay : 500
	},
	content_1 : '<p>A AMBEV S.A., pessoa jurídica com sede na cidade de São Paulo, inscrita no CNPJ sob o nº 91.088.328/0001-67 (“AMBEV”), entende como sensível e relevante os registros eletrônicos e dados pessoais deixados por você (doravante “Usuário”) na utilização dos diversos sites e serviços (“Páginas”) da AMBEV, servindo a presente Política de Privacidade (“Política”) para regular, de forma simples, transparente e objetiva, quais dados e informações serão obtidos, assim como quando os mesmos poderão ser utilizados.</p><p>A presente Política se aplica às Páginas relacionadas a quaisquer das marcas da AMBEV, entendendo como tal todas aquelas elencadas no site oficial da AMBEV, no endereço <a href="http://www.ambev.com.br/nossas-marcas.html">http://www.ambev.com.br/nossas-marcas.html</a>, englobando todos os seus produtos.</p><p>Esta Política está disponível para acesso a qualquer momento pelo Usuário, por meio do endereço <a href="http://www.skol.com.br/sobre/politica-de-privacidade">http://www.skol.com.br/sobre/politica-de-privacidade</a> e deve ser interpretada conjuntamente aos Termos de Uso das Páginas da AMBEV, disponíveis em http://www.skol.com.br/sobre/termos-de-uso e com as demais regras estipuladas em cada Página da AMBEV.</p><h1><strong>1 ACEITAÇÃO</strong></h1><p>A aceitação a esta Política se dará quando de seu clique no botão “Aceito”, quando do primeiro acesso do Usuário a qualquer das Páginas da AMBEV. Exceto em caso de expressa disposição legal em contrário, a AMBEV se reserva o direito de alterar a presente Política, a qualquer momento, sem necessidade de prévia comunicação ao Usuário. Deste modo, cabe ao Usuário reler esta Política, em caso de qualquer modificação, conforme data de atualização constante ao final deste documento.</p><p>A coleta de informações nas Páginas pode, ainda, estar sujeita a certas condições particulares (doravante, as "Condições Particulares") que, conforme o caso, substituem, complementam e/ou modificam esta Política. O Usuário, portanto, deverá ler as respectivas Condições Particulares anteriormente ao acesso ou à utilização das Páginas a elas relacionadas. Deste modo, o acesso às Páginas dependerá da incondicional aceitação do Usuário a tais Condições Particulares, na versão publicada pela AMBEV no momento em que ocorrer o acesso e/ou utilização.</p><h1><strong>2 INFORMAÇÕES COLETADAS</strong></h1><p>Com a utilização das Páginas pelo Usuário, a AMBEV coleta, basicamente dois tipos de dados: (i) aqueles fornecidos pelo próprio Usuário; e (ii) aqueles coletados automaticamente.</p><p><strong>(i) <span style="text-decoration: underline;">Informações fornecidas pelo Usuário</span></strong>: A AMBEV coleta todas as informações inseridas ativamente pelo Usuário nas Páginas, tais como dados cadastrais ou quaisquer outros dados fornecidos pelo Usuário quando do preenchimento de formulários nas Páginas.</p><p><strong>(ii) <span style="text-decoration: underline;">Dados coletados automaticamente</span></strong>: A AMBEV também coleta uma série de informações de modo automático, tais como: características do dispositivo de acesso, do navegador, IP (com data e hora), origem do IP, informações sobre cliques, páginas acessadas, as páginas seguintes acessadas após a saída das Páginas, ou qualquer termo de procura digitado nos sites ou em referência a estes, dentre outros. Para tal coleta, a AMBEV fará uso de algumas tecnologias padrões, como <em>cookies</em>, <em>pixel tags</em>, <em>beacons</em> e <em>local shared objects</em>, que são utilizadas com o propósito de melhorar a experiência de navegação do Usuário nas Páginas, de acordo com seus hábitos e suas preferências.</p><p>O Usuário pode configurar seu navegador, de forma a bloquear a coleta de dados, utilizando algumas destas tecnologias. No entanto, com a implementação de tais configurações, é possível que alguns recursos das Páginas deixem de funcionar corretamente.</p><p><span style="text-decoration: underline;">O Usuário desde já afirma estar ciente e concorda com a coleta de informações, nos termos descritos na presente Política e em eventuais Condições Particulares aplicáveis</span>.</p><h1><strong>3 USO E TRATAMENTO DAS INFORMAÇÕES COLETADAS</strong></h1><p>As informações coletadas pela AMBEV têm como finalidade o estabelecimento de vínculo contratual ou a gestão, administração, prestação, ampliação e melhoramento das Páginas ao Usuário, adequando-as às suas preferências e aos seus gostos, bem como a criação de novos serviços a serem oferecidos aos Usuários.</p><p>As informações coletadas poderão, ainda, ser utilizadas para fins publicitários, como para o envio de informações de produtos da AMBEV ou de formulários de pesquisa ao Usuário.</p><p><span style="text-decoration: underline;">O Usuário está ciente e concorda que a AMBEV pode centralizar as informações coletadas nas Páginas, as quais poderão ser utilizadas em Páginas e serviços relacionados a todas as marcas da AMBEV</span>.</p><p><strong><span style="text-decoration: underline;">Assim, o Usuário dá o consentimento livre, expresso e informado para que a AMBEV utilize as informações obtidas por meio das Páginas para fins publicitários, para personalizar e aprimorar o acesso do Usuário às Páginas, além da regular prestação de serviços por meio das Páginas. O Usuário aceita, ainda, que o tratamento e a utilização de todas as informações coletadas nas Páginas de quaisquer marcas poderá se dar de forma conjunta pela AMBEV</span></strong>.<strong></strong></p><p>Caso não deseje mais receber informativos publicitários da AMBEV, o Usuário pode enviar e-mail para <a href="mailto:faleconosco@ambev.com.br">faleconosco@ambev.com.br</a>.</p><h1><strong>4 COMPARTILHAMENTO DAS INFORMAÇÕES</strong></h1><p>A AMBEV constitui grupo econômico, que trabalha em parceria com diversas empresas. Deste modo, poderá compartilhar as informações coletadas por meio das Páginas, nas seguintes hipóteses:</p><p> i. Com outras empresas do Grupo AMBEV, constituídas ou atuantes em qualquer país, que se comprometem a utilizar as informações para os mesmos fins indicados na presente Política. Para efeitos da presente Política, se consideram companhias do Grupo AMBEV aquelas em que a AMBEV possua, direta ou indiretamente, o mínimo de 25% (vinte e cinco por cento) dos direitos de voto, em virtude de sua participação no capital, ou de acordos com outros sócios, tenha a faculdade de nomear ou destituir, ou tenha nomeado exclusivamente com seus votos, ao menos uma quarta parte dos membros do Órgão de Administração, ou exerça o direito de direção unitária, assim como nas companhias que, direita ou indiretamente, possua tais direitos, tenha tais faculdades, tenha efetuado referida nomeação ou exerça tal direção em relação;</p><p> ii. Com empresas parceiras, no desenvolvimento das atividades comerciais da AMBEV;</p><p> iii. Para proteção dos interesses da AMBEV em qualquer tipo de conflito, incluindo ações judiciais;</p><p> iv. No caso de transações e alterações societárias envolvendo a AMBEV, hipótese em que a transferência das informações será necessária para a continuidade dos serviços; ou</p><p> v. Mediante ordem judicial ou pelo requerimento de autoridades administrativas que detenham competência legal para sua requisição.</p><h1><strong>5 GUARDA DAS INFORMAÇÕES COLETADAS</strong></h1><p>A AMBEV armazenará as informações coletadas em suas Páginas em servidores próprios ou por ela contratados.</p><p>A AMBEV utiliza os meios razoáveis de mercado e legalmente requeridos para preservar a privacidade dos dados coletados em suas Páginas. Desta forma, adota as seguintes precauções:</p><p><strong> i. </strong>A AMBEV utiliza os métodos padrão e de mercado para criptografar e anonimizar os dados coletados;</p><p><strong> ii. </strong>A AMBEV possui proteção contra acesso não autorizado a seus sistemas;</p><p><strong> iii. </strong>A AMBEV somente autoriza o acesso de pessoas previamente estabelecidas ao local onde são armazenadas as informações coletadas; e</p><p><strong> iv. </strong>Aqueles que entrarem em contato com as informações deverão se comprometer a manter sigilo absoluto. A quebra do sigilo acarretará responsabilidade civil e o responsável será responsabilizado nos moldes da legislação brasileira.</p><p>A AMBEV adota os melhores esforços, no sentido de preservar a privacidade dos dados dos Usuários. <span style="text-decoration: underline;">Entretanto, nenhum site é totalmente seguro e a AMBEV não pode garantir integralmente que todas as informações que trafegam nas Páginas não sejam alvo de acessos não autorizados perpetrados por meio de métodos desenvolvidos para obter informações de forma indevida</span>. <span style="text-decoration: underline;">Por esse motivo, nós incentivamos os Usuários a tomar as medidas apropriadas para se proteger, como, por exemplo, mantendo confidenciais todos os nomes de usuário e senhas.</span></p><h1><strong>6 EXCLUSÃO DAS INFORMAÇÕES COLETADAS</strong></h1><p>As informações coletadas pela AMBEV por meio das Páginas serão automaticamente excluídas de seus servidores quando deixarem de ser úteis para os fins para os quais foram coletadas.</p><p>No entanto, caso o Usuário deseje, poderá requerer a exclusão antecipada dos dados coletados, mediante solicitação encaminhada à AMBEV, pelo e-mail: <a href="mailto:faleconosco@ambev.com.br">faleconosco@ambev.com.br</a></p><p>A AMBEV empreenderá todos os esforços para atender tais pedidos no menor espaço de tempo possível. No entanto, mesmo em caso de requisição de exclusão, será respeitado o prazo de armazenamento mínimo de informações de usuários de aplicações de Internet, determinado pela legislação brasileira.</p><h1><strong>7 LEGISLAÇÃO E FORO</strong></h1><p>Essa Política será regida, interpretada e executada de acordo com as leis da República Federativa do Brasil, independentemente dos conflitos dessas leis com leis de outros estados ou países, sendo competente o Foro da Comarca de São Paulo-SP, com exclusão de qualquer outro, para dirimir qualquer dúvida decorrente deste instrumento. O Usuário consente, expressamente, com a competência desse juízo, e renuncia, neste ato, à competência de qualquer outro foro, por mais privilegiado que seja ou venha a ser.</p><p>Última atualização: 03.10.2014.</p>',
	content_2 : '<p>A AMBEV S.A., pessoa jurídica com sede na cidade de São Paulo, inscrita no CNPJ sob o nº 91.088.328/0001-67 (“AMBEV”), possui sites e serviços (“Páginas”) relacionados às diversas marcas da empresa. Deste modo, os presentes Termos de Uso (“Termos”) visam regular a utilização por você (doravante “Usuário”) das Páginas, Aplicativos, Redes Sociais, entre outros (“Páginas”), da AMBEV.</p><p>Os presentes Termos aplicam-se às Páginas relacionadas a quaisquer das marcas da AMBEV, entendendo como tal todas aquelas elencadas no site oficial da AMBEV, no endereço <a href="http://www.ambev.com.br/nossas-marcas">http://www.ambev.com.br/nossas-marcas</a>, englobando todos os seus produtos.</p><p>Estes Termos estão disponíveis para acesso a qualquer momento pelo Usuário, por meio do endereço http://www.skol.com.br/sobre/termos-de-uso. Ainda, aplicam-se aos presentes Termos e na utilização das Páginas o quanto disposto na Política de Privacidade das Páginas da AMBEV, disponível em http://www.skol.com.br/sobre/politica-de-privacidade.</p><h1><strong>1 ACEITAÇÃO</strong></h1><p>A aceitação a estes Termos se dará no seu clique no botão “Aceito”, quando do primeiro acesso a qualquer das Páginas da AMBEV. Exceto em caso de expressa disposição legal em contrário, a AMBEV se reserva o direito de alterar os presentes Termos, a qualquer momento, sem necessidade de prévia comunicação ao Usuário. Deste modo, cabe ao Usuário reler os presentes Termos em caso de qualquer modificação, conforme data de atualização constante ao final deste documento.</p><p>O acesso às Páginas pode, ainda, estar sujeito a certas condições particulares (doravante, as "Condições Particulares") expressamente referenciadas, as quais, conforme o caso, substituem, complementam e/ou modificam estes Termos. O Usuário, portanto, deverá ler as respectivas Condições Particulares anteriormente ao acesso ou à utilização das Páginas a elas relacionadas. Deste modo, o acesso às Páginas dependerá da incondicional aceitação do Usuário a tais Condições Particulares, na versão publicada pela AMBEV, no momento em que ocorrer o acesso e/ou a utilização.</p><h1><strong>2 CONDIÇÕES DE ACESSO E UTILIZAÇÃO DAS PÁGINAS</strong></h1><p><strong>2.1 Caráter gratuito do acesso e utilização das Páginas</strong></p><p>O acesso e a utilização das Páginas pelo Usuário têm, como regra, caráter gratuito. No entanto, alguns serviços oferecidos pela AMBEV e por terceiros por meio das Páginas podem estar sujeitos à remuneração, nas formas e nos valores determinados nas Condições Particulares da Página.</p><p><strong>2.2 Registro de Usuário</strong></p><p>Algumas páginas podem exigir prévia inscrição ou prévio registro do Usuário para acesso. Neste caso, o acesso à Página somente será liberado após o preenchimento de cadastro pelo Usuário com todas as informações obrigatórias requeridas pela AMBEV.</p><p>Toda informação fornecida pelo Usuário por meio das Páginas deverá ser verdadeira. Assim, o Usuário garante a autenticidade de todos os dados que informar durante o preenchimento dos respectivos formulários. Desta forma, é de responsabilidade do Usuário manter toda a informação fornecida à AMBEV permanentemente atualizada, de forma que sempre reflita os dados reais do Usuário.</p><p><span style="text-decoration: underline;">Em qualquer circunstância, o Usuário será o único responsável por declarações falsas ou inexatas que prestar e que vierem a causar prejuízos à AMBEV ou a terceiros</span>.</p><p><strong>2.3 Menores de Idade</strong></p><p>Para utilizar as Páginas, os Usuários menores de idade devem obter a prévia permissão de seus pais, tutores ou representantes legais, os quais serão considerados responsáveis por todos os atos praticados pelos menores, inclusive em relação aos conteúdos e às Páginas acessadas.</p><p>Como a Internet possibilita o acesso a conteúdos que podem não ser apropriados a menores, a AMBEV informa aos Usuários que existem mecanismos, especialmente de realização de buscas, que permitem limitar os materiais disponíveis aos menores, sendo de especial utilidade tais restrições de acesso, embora não sejam infalíveis.</p><p><span style="text-decoration: underline;">As Páginas relacionadas às marcas de bebidas alcóolicas da AMBEV (as marcas listadas em </span><a href="http://www.ambev.com.br/cervejas.html">http://www.ambev.com.br/cervejas.html</a><span style="text-decoration: underline;">) não são direcionadas a e não devem ser utilizadas por Usuários menores de idade. De modo a evitar o acesso indevido, a AMBEV avisa claramente em tais Páginas que seu conteúdo é voltado a Usuários maiores de 18 (dezoito) anos</span>.</p><p><span style="text-decoration: underline;">A AMBEV, no entanto, sob hipótese alguma, não se responsabiliza pelo acesso indevido a tais Páginas, decorrentes informações incorretas ou inverídicas fornecidas pelo Usuário ou do desrespeito à classificação etária indicada na Página</span>.</p><p><strong>2.4 Obrigação de utilizar as Páginas corretamente</strong></p><p>Ao utilizar as Páginas da AMBEV, o Usuário se compromete a respeitar a legislação brasileira vigente, bem como todo o quanto disposto nos presentes Termos, não devendo produzir, disponibilizar, divulgar ou transmitir qualquer conteúdo que:</p><p>a) Seja contrário a qualquer norma da legislação brasileira, bem como à moral e aos bons costumes geralmente aceitos;</p><p>b) Incentive a discriminação, o ódio ou a violência contra pessoas ou grupos em razão de sexo, raça, religião, deficiência, nacionalidade ou por qualquer outro motivo;</p><p>c) Incorporem, ponham à disposição ou permitam acessar produtos, elementos, mensagens e/ou serviços ilegais, violentos, pornográficos, degradantes ou, em geral, contrários à lei, à moral e aos bons costumes geralmente aceitos ou à ordem pública;</p><p>d) Sejam falsos, ambíguos, inexatos, exagerados ou extemporâneos, de forma que possam induzir a erro sobre seu objeto ou sobre as intenções ou propósitos do comunicante;</p><p>e) Sejam protegidos por quaisquer direitos de propriedade intelectual ou industrial pertencentes a terceiros, sem que o Usuário tenha obtido previamente dos seus titulares a autorização necessária para levar a cabo o uso que efetuar ou pretender efetuar;</p><p>f) Incorporem vírus ou outros elementos físicos ou eletrônicos que possam causar dano ou impedir o normal funcionamento da rede, do sistema ou de equipamentos informáticos ("hardware" e "software") de terceiros, ou que possam causar dano aos documentos eletrônicos e arquivos armazenados nestes equipamentos informáticos; ou</p><p>g) Provoquem, por suas características (tais como forma, extensão etc.) dificuldades no normal funcionamento do Serviço.</p><p><span style="text-decoration: underline;">Em qualquer circunstância, o Usuário é o único responsável pelo uso que fizer das Páginas da AMBEV, bem como por qualquer conteúdo por ele inserido</span>.</p><p><strong>2.5 Utilização Correta do Conteúdo e Propriedade Intelectual</strong></p><p>O Usuário se compromete a utilizar as Páginas e o seu conteúdo, ou seja, os textos, gráficos, ícones, <em>links</em>, as fotografias, imagens, tecnologia, e demais conteúdos audiovisuais ou sonoros, <em>softwares</em>, desenhos gráficos e códigos fonte (em conjunto, “Conteúdo(s)”), de acordo com todo o ordenamento jurídico, com a moral e os bons costumes geralmente aceitos, com os presentes Termos e com as Condições Particulares de cada Página.</p><p>Todas as marcas, os nomes comerciais ou logotipos de qualquer espécie disponibilizados nas Páginas são de propriedade da AMBEV, sem que a utilização das Páginas possa ser entendida como autorização para que o Usuário possa citar tais marcas, nomes comerciais e/ou logotipos.</p><p>Todo o Conteúdo é de propriedade exclusiva da AMBEV, ou de terceiros que autorizaram sua utilização nas Páginas, e está protegido por leis e tratados internacionais, sendo vedada sua cópia, reprodução, ou qualquer outro tipo de utilização, ficando os infratores sujeitos às sanções civis e criminais correspondentes, nos termos das Leis 9.610/98, 9.609/98 e 9.279/96.</p><p><span style="text-decoration: underline;">O Usuário deverá se abster de obter, ou de tentar obter, os Conteúdos por meios distintos daqueles que, em cada caso, tenham sido colocados à disposição para tais propósitos</span>.</p><p><strong>2.6 Política Anti-Spamming da AMBEV</strong></p><p>Por meio deste documento o Usuário se obriga a abster-se de:</p><p><strong>a) </strong>obter dados com finalidade publicitária e remeter publicidade de qualquer classe com finalidade de venda ou outras de natureza comercial sem a prévia solicitação e consentimento;</p><p><strong>b) </strong>remeter a um grupo de pessoas quaisquer mensagens não solicitadas nem consentidas previamente;</p><p><strong>c) </strong>enviar cadeias de mensagens eletrônicas não solicitadas nem previamente consentidas;</p><p><strong>d) </strong>utilizar listas de distribuição a que se pode ter acesso através das Páginas para a realização das atividades descritas nos itens acima; e</p><p><strong>e) </strong>colocar a disposição de terceiros, com qualquer finalidade, dados captados a partir de listas de distribuição.</p><p>O Usuário ou terceiros prejudicados pela recepção de mensagens não solicitados, relacionadas às Páginas e dirigidas a pluralidade de pessoas poderão efetuar sua reclamação comunicando a AMBEV por meio do correio eletrônico sac@ambev.com.br.</p><p><strong>2.7 Introdução de "hiperlinks" que permitam o acesso às Páginas da AMBEV</strong></p><p>O Usuário que se propuser a estabelecer hiperlink entre sua página web e as Páginas da AMBEV (“Hiperlink”) deverá cumprir as seguintes condições:</p><p><strong>a) </strong>o "Hiperlink" permitirá única e exclusivamente o acesso à homepage ou à página de início das Páginas, mas não poderá reproduzi-la de qualquer forma;</p><p><strong>b)</strong>não criar um frame sobre as Páginas;</p><p><strong>c) </strong>não realizar manifestações ou indicações falsas, inexatas ou incorretas sobre a AMBEV, seus administradores, empregados, ou Páginas;</p><p><strong>d)</strong>não declarar nem fazer entender que a AMBEV teria autorizado o "Hiperlink" ou que teria supervisionado ou assumido, sob qualquer forma, responsabilidade sobre os serviços oferecidos ou colocados à disposição na página web em que for estabelecido o "Hiperlink";</p><p><strong>e) </strong>com exceção dos sinais que formarem parte do "Hiperlink", a página web em que se estabelecer o "Hiperlink" não conterá nenhuma marca, nome comercial, logotipo, <em>slogan</em>, <em>look and feel</em> ou quaisquer outros sinais pertencentes à AMBEV;</p><p><strong>f) </strong>a página web em que estabelecer o "Hiperlink" não deverá conter informações ou conteúdos ilícitos, contrários à moral, aos bons costumes ou à ordem pública, bem como não conterá conteúdos contrários aos direitos de terceiros.</p><p>A fixação de um "Hiperlink" não implica, em qualquer hipótese, a existência de relações entre a AMBEV e o proprietário da página web que o contiver, nem a aceitação ou aprovação da AMBEV acerca de seus conteúdos ou serviços.</p><h1><strong>3 DURAÇÃO E FINALIZAÇÃO</strong></h1><p>O acesso às Páginas da AMBEV é concedido ao Usuário por prazo indeterminado. A AMBEV, no entanto, está facultada a dar por terminado, suspender ou interromper unilateralmente, a qualquer momento e sem necessidade de prévio aviso, o acesso às Páginas, sem que qualquer indenização seja devida ao Usuário.</p><p>A AMBEV, ainda, se reserva o direito de recusar ou retirar o acesso às Páginas, a qualquer momento e sem necessidade de prévio aviso, por iniciativa própria ou por exigência de um terceiro, àqueles Usuários que descumprirem estes Termos.</p><h1><strong>4 EXCLUSÃO DE GARANTIAS E DE RESPONSABILIDADE</strong></h1><p>Em decorrência de questões técnicas e operacionais, a AMBEV não pode garantir a disponibilidade, infalibilidade e continuidade do funcionamento das Páginas, nem garante a utilidade das Páginas para a realização de qualquer atividade em concreto. <span style="text-decoration: underline;">Desse modo, a AMBEV não será, em hipótese alguma, responsável por quaisquer danos decorrentes da interrupção do acesso às Páginas, ou por falhas de funcionamento das mesmas, nem se responsabiliza pela defraudação da utilidade que os Usuários possam ter atribuídos Páginas, pela falibilidade das mesmas, nem por qualquer dificuldade de acesso</span>.</p><p>A AMBEV utiliza as melhores práticas recomendadas de mercado para manter seguros todos os dados inseridos pelo Usuário nas Páginas, no entanto não garante que terceiros não autorizados não farão uso de meios ilícitos para obter indevidamente tais informações. <span style="text-decoration: underline;">Assim, a AMBEV se exime de responsabilidade pelos danos e prejuízos de toda natureza que possam decorrer do conhecimento que terceiros não autorizados possam ter de quaisquer das informações repassadas, em decorrência de falha exclusivamente atribuível aos Usuários ou a terceiros que fujam a qualquer controle razoável da AMBEV</span>.</p><p>A AMBEV não garante a ausência de vírus nas Páginas, bem como de outros elementos nocivos que possam produzir alterações nos sistemas informáticos dos Usuários (<em>software</em> e <em>hardware</em>) ou nos documentos eletrônicos armazenados no sistema informático, <span style="text-decoration: underline;">eximindo-se de qualquer responsabilidade pelos danos e prejuízos que possam decorrer de quaisquer elementos nocivos</span>.</p><p>A AMBEV não verifica ou controla o uso que o Usuário faz das páginas. <span style="text-decoration: underline;">Dessa forma, a AMBEV se exime de qualquer responsabilidade pelos danos e prejuízos de toda natureza que possam decorrer da utilização das Páginas ou que possam ser devidos à falta de veracidade, vigência, exaustividade e/ou autenticidade do conteúdo lá disponibilizado, bem como da informação que os Usuários proporcionam a outros Usuários sobre si mesmos e, em particular, ainda que não de forma exclusiva, pelos danos e prejuízos de toda a natureza que possam ser devidas à suplantação da personalidade efetuada por um Usuário em qualquer classe de comunicação realizada por meio das Páginas</span>.</p><h1><strong>5 PROCEDIMENTO EM CASO DE REALIZAÇÃO DE ATIVIDADES DE CARÁTER ILÍCITO</strong></h1><p>Na hipótese de um Usuário ou um terceiro considerar que existem informações, fatos ou circunstâncias que constituem atividade ilícita, nas Páginas da AMBEV, especialmente em caso de violação de direitos de propriedade intelectual ou outros direitos, deverá enviar comunicação à AMBEV contendo os seguintes dados:</p><p><strong>a) </strong>dados pessoais: nome, endereço, número de telefone e endereço de correio eletrônico do reclamante;</p><p><strong>b) </strong>especificação da suposta atividade ilícita ocorrida nas Páginas e, em particular, quando se tratar de suposta violação de direitos autorais, indicação precisa e completa dos conteúdos protegidos e supostamente infringidos;</p><p><strong>c) </strong>fatos ou circunstâncias que revelam o caráter ilícito de tal atividade; e</p><p><strong>d) </strong>se o caso, declaração expressa e clara de que a utilização dos conteúdos foi realizada sem o consentimento do titular dos direitos de propriedade intelectual supostamente infringidos.</p><p>Sempre de acordo com a legislação em vigor, a partir da ciência, a AMBEV poderá excluir conteúdo acusado como ilícito, assim como fornecer informações às autoridades competentes, mediante o competente requerimento, com a finalidade de viabilizar a apuração de condutas ilegais.</p><h1><strong>6 DISPOSIÇÕES GERAIS</strong></h1><p>Se qualquer parte destes Termos for considerada inválida ou inexequível, tal trecho deve ser interpretado de forma consistente com a lei aplicável, para refletir, na medida do possível, a intenção original das partes, e as demais disposições permanecerão em pleno vigor e efeito.</p><p>A falha da AMBEV em exigir quaisquer direitos ou disposições dos presentes Termos não constituirá renúncia, podendo exercer regularmente o seu direito, dentro dos prazos legais.</p><p>Estes Termos poderão ser alterados a qualquer momento pela AMBEV, consistindo obrigação do Usuário verificar frequentemente este documento e tomar ciência.</p><h1><strong>7 NOTIFICAÇÕES</strong></h1><p>Todas as notificações e comunicações (doravante, as "Notificações") por parte do Usuário à AMBEV são consideradas eficazes, para todos os efeitos, quando forem dirigidas ao seguinte endereço eletrônico: <a href="mailto:faleconosco@ambev.com.br">faleconosco@ambev.com.br</a>.</p><p>Todas as notificações e comunicações (doravante, as "Notificações") por parte da AMBEV ao Usuário serão consideradas eficazes, para todos os efeitos, quando se realizarem em uma das seguintes formas:</p><p>a) envio de carta ao domicílio do Usuário quando este tiver fornecido um endereço válido à AMBEV;</p><p>b) envio de mensagem por correio eletrônico a qualquer dos endereços fornecidos pelo Usuário;</p><p>c) comunicação telefônica ao número fornecido pelo Usuário; e</p><p>d) mediante a inclusão de mensagens em qualquer das Páginas da AMBEV.</p><p>Neste sentido, todas as Notificações que a AMBEV realizar serão consideradas válidas quando efetuadas empregando os dados e através dos meios anteriormente destacados. Para estes efeitos, o Usuário declara que todos os dados fornecidos são válidos e corretos, comprometendo-se a comunicar à AMBEV todas as mudanças relativas aos dados de notificação.</p><h1><strong>8 </strong><strong>LEGISLAÇÃO E FORO APLICÁVEIS</strong><strong></strong></h1><p>Esses Termos serão regidos, interpretados e executados de acordo com as leis da República Federativa do Brasil, independentemente dos conflitos dessas leis com leis de outros estados ou países, sendo competente o Foro de São Paulo/SP, para dirimir qualquer dúvida decorrente deste instrumento. O Usuário consente, expressamente, com a competência desse juízo, e renuncia, neste ato, à competência de qualquer outro foro, por mais privilegiado que seja ou venha a ser.</p><p>Última atualização: 03.10.2014.</p>',
	configure: function(pops){
		PopUp.config.pops = pops;
		PopUp.init(PopUp.config);
	},
	init: function(config){
		var config = config || PopUp.config;
		PopUp.setButtons(config);
		$("#popup-politica .conteudo").html(PopUp.content_1);
		$("#popup-termos-de-uso .conteudo").html(PopUp.content_2);
	},
	setButtons: function(config){
		for(var i=0; i<config.pops.length; i++){
			Shared.__set_button(config.pops[i].open, function(params){
				var i = params.data.index;
                PopUp.open(PopUp.config.pops[i].id, PopUp.config.pops[i].close);
			}, {index: i});
			Shared.__set_button(config.pops[i].close, function(params){
				var i = params.data.index;
                PopUp.close(PopUp.config.pops[i].id, PopUp.config.pops[i].close);
			}, {index: i});
		}
	},
	open: function(id, close){
		$("main").hide();
		$('#' + id).show();
		PopUp.top();
		$(document).keyup(function(e) {
		    if (e.keyCode == 27) {
		    	PopUp.close(id);
		    }
		});
		$("#" + close).show();
	},
	close: function(id, close){
		$('#' + id).hide();
		$("main").show();
		PopUp.bottom();
		$("#" + close).hide();
		/* Debug Mapa */
		var center = Maps.map.getCenter();
		google.maps.event.trigger(Maps.map, "resize");
		Maps.map.setCenter(center);
	},
	top: function(){
		$("body").scrollTop(0);
	},
	bottom: function(){
		$("body").scrollTop($(document).height());
	}
}

PageScroll = {
	config: {
		easing   : "easeOutQuart",
		duration : 1500
	},
	scroll: function(id, margin, config){
		Shared.Debug.log("Page Scrolled");
		var m      = margin || 0;
		var config = config || PageScroll.config;
		if(Shared.__is_empty(id))
			$('html, body').stop().animate({scrollTop: 0}, config.duration, config.easing);
		else
			$('html, body').stop().animate({scrollTop: $(id).offset().top - m}, config.duration, config.easing);
	}
}

SizeControl = {
	pageHeight : 0,
	pageWidth  : 0,
	docHeight  : 0,
	docWidth   : 0,
	configure: function(fn){
		SizeControl.init(fn);
	},
	init: function(fn){
		SizeControl.start(fn);
		SizeControl.onResize();
	},
	start: function(fn){
		SizeControl.updateSizes();
		SizeControl.doThis(fn);
	},
	doThis: function(fn){
		if(!Shared.__is_empty(fn))
			fn();
	},
	updateSizes: function(){
		SizeControl.pageHeight = $(window).height();
		SizeControl.pageWidth  = $(window).width();
		SizeControl.docHeight  = $(document).height();
		SizeControl.docWidth   = $(document).width();
	},
	onResize: function(){
		$(window).on('resize', function(){
			SizeControl.start();
		});
	}
}

Maps = {
	map : null,
	config: {
		options : {
			zoom              : 15,
			mapTypeId         : google.maps.MapTypeId.ROADMAP,
			scrollwheel       : false,
			navigationControl : true,
			mapTypeControl    : true,
			scaleControl      : true,
			draggable         : true,
			styles            : [{"featureType":"all","elementType":"all","stylers":[{"hue":"#ffbb00"}]},{"featureType":"all","elementType":"geometry.fill","stylers":[{"hue":"#ffbb00"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"hue":"#ffbb00"}]}]
		}
	},
	configure: function(map){
		Maps.config.map = map;
		google.maps.event.addDomListener(window, 'load', Maps.init(Maps.config));
	},
	init: function(config){

		var config     = config || Maps.config;

		/* Centro do Mapa */
		latlngs        = { lat : config.map.lat, lng: config.map.lng };
		mapCanvas      = document.getElementById(config.map.id);
		options        = config.options;
		options.center = latlngs;

		/* Atribui os estilos caso esteja setado */
		if(!Shared.__is_empty(options.styles))
			options.styles = options.styles;

		Maps.map = new google.maps.Map(mapCanvas, options);

		/* Adiciona Search Box */

		var input = document.getElementById('search-box');
		var searchBox = new google.maps.places.SearchBox(input);
		Maps.map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

		Maps.map.addListener('bounds_changed', function() {
			searchBox.setBounds(Maps.map.getBounds());
		});

		/* Busca no Mapa o que foi Digitado */

		searchBox.addListener('places_changed', function(){
		    var places = searchBox.getPlaces();
		    if (places.length == 0)
		    	return;
		    var bounds = new google.maps.LatLngBounds();
		    places.forEach(function(place){
		    	if (place.geometry.viewport)
		    		bounds.union(place.geometry.viewport);
		    	else
		    		bounds.extend(place.geometry.location);
		    });
		    Maps.map.fitBounds(bounds);
		});

		/* Adiciona um Marcador */

		marker        = new google.maps.Marker({
			position   : latlngs,
			map        : Maps.map,
			title      : config.map.title,
			icon       : "./assets/images/marker.png",
		});

		/* Criação do Conteúdo do Box */

		var content = [];
		/* Sem imagem */
		/*
		content.push('<div class="content-infobox open-details">');
		content.push('<h2 class="no-img">Nome da Academia Nome da Academia</h2>');
		content.push('<h2 class="no-img">0 <span class="gray">M</span>');
		content.push('</div>');
		*/

		/* Com imagem */
		content.push('<div class="content-infobox open-details">');
		content.push('<div class="thumbnail-academia">');
		content.push('<img src="./assets/images/thumb-teste.jpg" alt="Nome da Academia" class="img-details"/>');
		content.push('</div>');
		content.push('<h2>Nome da Academia Nome da Academia Nome da Academia</h2>');
		content.push('<h2>0 <span class="gray">M</span>');
		content.push('</div>');

		content = content.join('');

		/* Criando a Info Window */

		var infowindow = new google.maps.InfoWindow({
			content: content
		});

		/* Adicionando o evento de abrir a Info Window no Clique do Marker */

		marker.addListener('click', function() {
			PageScroll.scroll($("#academias #map"), 100);
			infowindow.open(Maps.map, marker);
		});

		/* Adicionando evento no clique do window */

		google.maps.event.addDomListener(infowindow, 'domready', function() {
		    $('.open-details').on('click', function() {
	           Oracle.AditionalInfos.open();
		    });
		});
	},
}

Video = {
	code_1 : null,
	code_2 : null,
	init: function(){
		Video.code_1 = 'RMC5eLPWDNQ';
		Video.code_2 = 'o-D-zSbDEWw';
		$('#video-close').on('click', function(){ Video.close() });
		$('.play-video-1').on('click', function(){ Video.open(Video.code_1) });
		$('.play-video-2').on('click', function(){ Video.open(Video.code_2) });
	},
	open: function(code){
		Video.hide();
		Video.play(code);
		$('#video-popup').fadeIn();
		$(document).keyup(function(e) {
		    if (e.keyCode == 27) {
		    	Video.close();
		    }
		});
		setTimeout(function(){
			$('#video-close').fadeIn()
		}, 500);
	},
	close: function(){
		Video.show();
		$('#video-popup').fadeOut();
		$('#video-close').fadeOut();
		$("#video-container").empty();
	},
	play: function(vcode){
		"use strict";
		var iframe = '<iframe id="video-embed" src="https://www.youtube.com/embed/'+vcode+'?autoplay=1&loop=1&rel=0&wmode=transparent" frameborder="0" allowfullscreen wmode="Opaque"></iframe>';
		$("#video-container").html(iframe);
		$('#video-embed').css({
			width:  $(window).innerWidth()  + 'px',
			height: $(window).innerHeight() + 'px'
		});
		$(window).resize(function(){
			$('#video-embed').css({
				width:  $(window).innerWidth()  + 'px',
				height: $(window).innerHeight() + 'px'
			});
		});
	},
	hide: function(){
		$("main").fadeOut();
	},
	show: function(){
		$("main").fadeIn();
	}
}

Shared = {
	Debug: {
		debugMode : true,
		constant  : '[DCFRONT] ',
		log: function(msg){
			if(Shared.Debug.debugMode)
				console.log(Shared.Debug.constant + msg);
		},
		error: function(msg){
			if(Shared.Debug.debugMode)
				console.error(Shared.Debug.constant + msg);
		},
		info: function(msg){
			if(Shared.Debug.debugMode)
				console.info(Shared.Debug.constant + msg);
		}
	},
	__is_empty: function(val){
		return (val == "" || val == null || val == undefined);
	},
	__set_button: function(objId, callBack, params){
		if(Shared.__is_empty(objId))
			return;
		var objId = "#" + objId;
		if(!$(objId).length){
			var objId = objId.replace("#", ".");
		}
        if($(objId).length){
        	if(!Shared.__is_empty(params)){
	            $(objId).on('click', params, function(params){
	            	params.preventDefault();
	                callBack(params);
	            });
        	}
        	else{
	            $(objId).on('click', function(event){
	            	event.preventDefault();
	                callBack(event);
	            });
        	}
        }
	},
	__ajax: function(obj, config, callBack){
		if(Shared.__is_empty(config.action))
			return;
		var action     = config.action;
		var data       = config.data || null;
		$.ajax({
		    type  : "POST",
		    url   : action,
		    data  : data,
		    success: function (result) {
		    	if(!Shared.__is_empty(callBack)){
		    		callBack(result);
		    	}
		    },
		});
	}
}

Index = {
    OwlCarousel:{
        config : {
            navigation  : false,
            pagination  : false,
            autoPlay    : 5000,
            slideSpeed  : 300,
			touchDrag   : true,
			mouseDrag   : false,
            singleItem  : true
        },
        carousels : {
            ids : [
                $("#carousel-depoimentos"),
                $(".fotos-local")
            ],
            assigned : []
        },
        init:function(){
            for(var i=0; i<Index.OwlCarousel.carousels.ids.length; i++){
                var item = Index.OwlCarousel.carousels.ids[i];
                var config = Index.OwlCarousel.config;
                if(item.hasClass('fotos-local')){
                    config =  {
                        navigation  : false,
                        pagination  : true,
                        autoPlay    : true,
                        slideSpeed  : 300,
                        singleItem  : true
                    };
                }
                if(item.length){
                    Index.OwlCarousel.carousels.assigned[i] = item.owlCarousel(config);
                }
                setTimeout(function(){
                    $(".owl-carousel").each(function(){
                        item.data('owlCarousel').updateVars();
                    });
                }, 500);
            }
        }
    },
    init: function(){
        Index.assignMobile();
        Index.assignPageScroll();
        Index.assignMap();
        Index.assignButtons();
        Index.assignPops();
        Index.OwlCarousel.init();
    },
    assignMobile: function(){
        Mobile.configure();
    },
    assignPops: function(){
        var pops = [
            {
                id    : 'popup-politica',
                open  : 'btn-open-popup-politica',
                close : 'btn-close-popup-politica'
            },
            {
                id    : 'popup-termos-de-uso',
                open  : 'btn-open-popup-termos-de-uso',
                close : 'btn-close-popup-termos-de-uso'
            }
        ];
        PopUp.configure(pops);
    },
    assignPageScroll: function(){
        SizeControl.configure(function(){
            Shared.Debug.log('Implements Resize Here');
        });
    },
    assignMap: function(){
        var map = {
                id    : 'map',
                lat   : -23.5422911,
                lng   : -46.6426224,
                title : 'Título 1'
        };
        Maps.configure(map);
    },
    assignButtons: function(){
        $(".btn-close").on('click', function(){
            Oracle.AditionalInfos.close();
        });
        $(".btn-home").on('click', function(){
            PageScroll.scroll(0, 100);
        });
    }
}

Menu = {
    Effect: {
        config: {
            senseSpeed    : 5,
            previusScroll : 0
        },
        init: function(page){
            $(window).scroll(function(event){
                var scroller = $(this).scrollTop();
                if (scroller - Menu.Effect.config.senseSpeed >  Menu.Effect.config.previousScroll){
                       $("nav").filter(':not(:animated)').slideUp();
                }
                else if (scroller + Menu.Effect.config.senseSpeed < Menu.Effect.config.previousScroll){
                    $("nav").filter(':not(:animated)').slideDown();
                }
                Menu.Effect.config.previousScroll = scroller;
            });
        }
    },
    init: function(){
        Menu.setActions();
        Menu.setButtons();
        Menu.Effect.init();
    },
    setActions: function(){
         $(".menu-item a").on('click', function(event){
            event.preventDefault();
            var el = $(this);
            var top = 0;
            //if(SizeControl.pageWidth < 768){
            //	top = 60;
            //}
            PageScroll.scroll(el.attr('href'), top);
            if(el.parent().hasClass('close-after-click'))
                Menu.closeMenu(event);
        });
    },
    setButtons: function(){
        Shared.__set_button("open-menu", function(event){Menu.openMenu(event)});
        Shared.__set_button("close-menu", function(event){Menu.closeMenu(event)});
    },
    openMenu: function(event){
        event.preventDefault();
        $(".menu-open-mobile").slideToggle(400, 'easeOutQuart');
        $(".icon-opened").hide();
        $(".icon-closed").show();
    },
    closeMenu: function(event){
        event.preventDefault();
        $(".menu-open-mobile").slideToggle(400, 'easeOutQuart');
        $(".icon-closed").hide();
        $(".icon-opened").show();
    }
}

Oracle = {
	NiceScroll: {
		config : {
			cursorwidth        : "8px",
			zindex             : 99999999,
			scrollspeed        : 90,
			mousescrollstep    : 60,
			cursoropacitymax   : 0.8,
			cursorcolor        : "#af8c35",
			horizrailenabled   : false,
			cursorborder       : "none",
			cursorborderradius : "0px"
		},
		init: function(){
			$("html").niceScroll(Oracle.NiceScroll.config);
			$("#academias .infos").niceScroll(Oracle.NiceScroll.config);
		}
	},
	Preloader: {
		loaded : false,
		config : {
			delay    : 500,
			recheck  : 200,
			velocity : "slow"
		},
		init: function(){
			if(Oracle.Preloader.loaded){
				Oracle.Preloader.pageLoaded();
			}
			else{
				setTimeout(function(){
					Shared.Debug.log('Still Loading');
					Oracle.Preloader.init();
				}, Oracle.Preloader.recheck);
			}
		},
		pageLoaded: function(){
			Oracle.Preloader.hide();
		},
		show: function(){
			$("#status").fadeIn();
			$("#preloader").delay(Oracle.Preloader.delay).fadeIn(Oracle.Preloader.velocity);
		},
		hide: function(){
			$("#status").fadeOut();
			$("#preloader").delay(Oracle.Preloader.delay).fadeOut(Oracle.Preloader.velocity);
		}
	},
	ScrollReveal: {
		config : {
			after          : "0s",
			enter          : "top",
			move           : "15px",
			over           : "0.5s",
			easing         : "ease-in-out",
			viewportFactor : 0,
			reset          : true,
			init           : true
		},
		init: function(){
			window.sr = new scrollReveal(Oracle.ScrollReveal.config);
		}
	},
	Modernizr: {
		init: function(){
			if (!Modernizr.svg) {
				$('img[src*="svg"]').attr('src', function() {
					return $(this).attr('src').replace('.svg', '.png');
				});
			}
		}
	},
	AditionalInfos:{
		open: function(){
			var percent = 75;
			if(SizeControl.pageWidth <= 1280 && SizeControl.pageWidth >= 1024){
				percent = 65;
			}
			else if(SizeControl.pageWidth <= 1024){
				percent = 0;
			}
			$("#academias .infos").fadeIn();
			$("#map").css({"width" : percent + "%"});
			$("#academias .infos").css({"width" : (100-percent) + "%"});
			var center = Maps.map.getCenter();
			google.maps.event.trigger(Maps.map, "resize");
			Maps.map.setCenter(center);
			PageScroll.scroll($("#academias .infos"), 100);
		},
		close: function(){
            $(".infos").fadeOut();
            $("#map").css({"width" : "100%"});
            var center = Maps.map.getCenter();
            google.maps.event.trigger(Maps.map, "resize");
            Maps.map.setCenter(center);
		}
	},
	init: function () {
		var exec = [
			Oracle.ScrollReveal,
			Oracle.NiceScroll,
			Oracle.Modernizr,
			Oracle.Preloader
		];
		for(var i=0; i<exec.length; i++){
			exec[i].init();
		}
		Menu.init();
		Index.init();
		Video.init();
	}
}

$(document).ready(function() {
	Oracle.init();
});

$(window).load(function(){
	Oracle.Preloader.loaded = true;
})