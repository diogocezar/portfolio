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
		$(".set-mobile").empty().html(Mobile.isMobile ? "Voc?? est?? em dispositivo mobile." + " " + Mobile.mobileType : "Voc?? n??o est?? em dispositivo mobile.");
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
	content_1 : '<p>A AMBEV S.A., pessoa jur??dica com sede na cidade de S??o Paulo, inscrita no CNPJ sob o n?? 91.088.328/0001-67 (???AMBEV???), entende como sens??vel e relevante os registros eletr??nicos e dados pessoais deixados por voc?? (doravante ???Usu??rio???) na utiliza????o dos diversos sites e servi??os (???P??ginas???) da AMBEV, servindo a presente Pol??tica de Privacidade (???Pol??tica???) para regular, de forma simples, transparente e objetiva, quais dados e informa????es ser??o obtidos, assim como quando os mesmos poder??o ser utilizados.</p><p>A presente Pol??tica se aplica ??s P??ginas relacionadas a quaisquer das marcas da AMBEV, entendendo como tal todas aquelas elencadas no site oficial da AMBEV, no endere??o <a href="http://www.ambev.com.br/nossas-marcas.html">http://www.ambev.com.br/nossas-marcas.html</a>, englobando todos os seus produtos.</p><p>Esta Pol??tica est?? dispon??vel para acesso a qualquer momento pelo Usu??rio, por meio do endere??o <a href="http://www.skol.com.br/sobre/politica-de-privacidade">http://www.skol.com.br/sobre/politica-de-privacidade</a> e deve ser interpretada conjuntamente aos Termos de Uso das P??ginas da AMBEV, dispon??veis em http://www.skol.com.br/sobre/termos-de-uso e com as demais regras estipuladas em cada P??gina da AMBEV.</p><h1><strong>1 ACEITA????O</strong></h1><p>A aceita????o a esta Pol??tica se dar?? quando de seu clique no bot??o ???Aceito???, quando do primeiro acesso do Usu??rio a qualquer das P??ginas da AMBEV. Exceto em caso de expressa disposi????o legal em contr??rio, a AMBEV se reserva o direito de alterar a presente Pol??tica, a qualquer momento, sem necessidade de pr??via comunica????o ao Usu??rio. Deste modo, cabe ao Usu??rio reler esta Pol??tica, em caso de qualquer modifica????o, conforme data de atualiza????o constante ao final deste documento.</p><p>A coleta de informa????es nas P??ginas pode, ainda, estar sujeita a certas condi????es particulares (doravante, as "Condi????es Particulares") que, conforme o caso, substituem, complementam e/ou modificam esta Pol??tica. O Usu??rio, portanto, dever?? ler as respectivas Condi????es Particulares anteriormente ao acesso ou ?? utiliza????o das P??ginas a elas relacionadas. Deste modo, o acesso ??s P??ginas depender?? da incondicional aceita????o do Usu??rio a tais Condi????es Particulares, na vers??o publicada pela AMBEV no momento em que ocorrer o acesso e/ou utiliza????o.</p><h1><strong>2 INFORMA????ES COLETADAS</strong></h1><p>Com a utiliza????o das P??ginas pelo Usu??rio, a AMBEV coleta, basicamente dois tipos de dados: (i) aqueles fornecidos pelo pr??prio Usu??rio; e (ii) aqueles coletados automaticamente.</p><p><strong>(i) <span style="text-decoration: underline;">Informa????es fornecidas pelo Usu??rio</span></strong>: A AMBEV coleta todas as informa????es inseridas ativamente pelo Usu??rio nas P??ginas, tais como dados cadastrais ou quaisquer outros dados fornecidos pelo Usu??rio quando do preenchimento de formul??rios nas P??ginas.</p><p><strong>(ii) <span style="text-decoration: underline;">Dados coletados automaticamente</span></strong>: A AMBEV tamb??m coleta uma s??rie de informa????es de modo autom??tico, tais como: caracter??sticas do dispositivo de acesso, do navegador, IP (com data e hora), origem do IP, informa????es sobre cliques, p??ginas acessadas, as p??ginas seguintes acessadas ap??s a sa??da das P??ginas, ou qualquer termo de procura digitado nos sites ou em refer??ncia a estes, dentre outros. Para tal coleta, a AMBEV far?? uso de algumas tecnologias padr??es, como <em>cookies</em>, <em>pixel tags</em>, <em>beacons</em> e <em>local shared objects</em>, que s??o utilizadas com o prop??sito de melhorar a experi??ncia de navega????o do Usu??rio nas P??ginas, de acordo com seus h??bitos e suas prefer??ncias.</p><p>O Usu??rio pode configurar seu navegador, de forma a bloquear a coleta de dados, utilizando algumas destas tecnologias. No entanto, com a implementa????o de tais configura????es, ?? poss??vel que alguns recursos das P??ginas deixem de funcionar corretamente.</p><p><span style="text-decoration: underline;">O Usu??rio desde j?? afirma estar ciente e concorda com a coleta de informa????es, nos termos descritos na presente Pol??tica e em eventuais Condi????es Particulares aplic??veis</span>.</p><h1><strong>3 USO E TRATAMENTO DAS INFORMA????ES COLETADAS</strong></h1><p>As informa????es coletadas pela AMBEV t??m como finalidade o estabelecimento de v??nculo contratual ou a gest??o, administra????o, presta????o, amplia????o e melhoramento das P??ginas ao Usu??rio, adequando-as ??s suas prefer??ncias e aos seus gostos, bem como a cria????o de novos servi??os a serem oferecidos aos Usu??rios.</p><p>As informa????es coletadas poder??o, ainda, ser utilizadas para fins publicit??rios, como para o envio de informa????es de produtos da AMBEV ou de formul??rios de pesquisa ao Usu??rio.</p><p><span style="text-decoration: underline;">O Usu??rio est?? ciente e concorda que a AMBEV pode centralizar as informa????es coletadas nas P??ginas, as quais poder??o ser utilizadas em P??ginas e servi??os relacionados a todas as marcas da AMBEV</span>.</p><p><strong><span style="text-decoration: underline;">Assim, o Usu??rio d?? o consentimento livre, expresso e informado para que a AMBEV utilize as informa????es obtidas por meio das P??ginas para fins publicit??rios, para personalizar e aprimorar o acesso do Usu??rio ??s P??ginas, al??m da regular presta????o de servi??os por meio das P??ginas. O Usu??rio aceita, ainda, que o tratamento e a utiliza????o de todas as informa????es coletadas nas P??ginas de quaisquer marcas poder?? se dar de forma conjunta pela AMBEV</span></strong>.<strong></strong></p><p>Caso n??o deseje mais receber informativos publicit??rios da AMBEV, o Usu??rio pode enviar e-mail para <a href="mailto:faleconosco@ambev.com.br">faleconosco@ambev.com.br</a>.</p><h1><strong>4 COMPARTILHAMENTO DAS INFORMA????ES</strong></h1><p>A AMBEV constitui grupo econ??mico, que trabalha em parceria com diversas empresas. Deste modo, poder?? compartilhar as informa????es coletadas por meio das P??ginas, nas seguintes hip??teses:</p><p> i. Com outras empresas do Grupo AMBEV, constitu??das ou atuantes em qualquer pa??s, que se comprometem a utilizar as informa????es para os mesmos fins indicados na presente Pol??tica. Para efeitos da presente Pol??tica, se consideram companhias do Grupo AMBEV aquelas em que a AMBEV possua, direta ou indiretamente, o m??nimo de 25% (vinte e cinco por cento) dos direitos de voto, em virtude de sua participa????o no capital, ou de acordos com outros s??cios, tenha a faculdade de nomear ou destituir, ou tenha nomeado exclusivamente com seus votos, ao menos uma quarta parte dos membros do ??rg??o de Administra????o, ou exer??a o direito de dire????o unit??ria, assim como nas companhias que, direita ou indiretamente, possua tais direitos, tenha tais faculdades, tenha efetuado referida nomea????o ou exer??a tal dire????o em rela????o;</p><p> ii. Com empresas parceiras, no desenvolvimento das atividades comerciais da AMBEV;</p><p> iii. Para prote????o dos interesses da AMBEV em qualquer tipo de conflito, incluindo a????es judiciais;</p><p> iv. No caso de transa????es e altera????es societ??rias envolvendo a AMBEV, hip??tese em que a transfer??ncia das informa????es ser?? necess??ria para a continuidade dos servi??os; ou</p><p> v. Mediante ordem judicial ou pelo requerimento de autoridades administrativas que detenham compet??ncia legal para sua requisi????o.</p><h1><strong>5 GUARDA DAS INFORMA????ES COLETADAS</strong></h1><p>A AMBEV armazenar?? as informa????es coletadas em suas P??ginas em servidores pr??prios ou por ela contratados.</p><p>A AMBEV utiliza os meios razo??veis de mercado e legalmente requeridos para preservar a privacidade dos dados coletados em suas P??ginas. Desta forma, adota as seguintes precau????es:</p><p><strong> i. </strong>A AMBEV utiliza os m??todos padr??o e de mercado para criptografar e anonimizar os dados coletados;</p><p><strong> ii. </strong>A AMBEV possui prote????o contra acesso n??o autorizado a seus sistemas;</p><p><strong> iii. </strong>A AMBEV somente autoriza o acesso de pessoas previamente estabelecidas ao local onde s??o armazenadas as informa????es coletadas; e</p><p><strong> iv. </strong>Aqueles que entrarem em contato com as informa????es dever??o se comprometer a manter sigilo absoluto. A quebra do sigilo acarretar?? responsabilidade civil e o respons??vel ser?? responsabilizado nos moldes da legisla????o brasileira.</p><p>A AMBEV adota os melhores esfor??os, no sentido de preservar a privacidade dos dados dos Usu??rios. <span style="text-decoration: underline;">Entretanto, nenhum site ?? totalmente seguro e a AMBEV n??o pode garantir integralmente que todas as informa????es que trafegam nas P??ginas n??o sejam alvo de acessos n??o autorizados perpetrados por meio de m??todos desenvolvidos para obter informa????es de forma indevida</span>. <span style="text-decoration: underline;">Por esse motivo, n??s incentivamos os Usu??rios a tomar as medidas apropriadas para se proteger, como, por exemplo, mantendo confidenciais todos os nomes de usu??rio e senhas.</span></p><h1><strong>6 EXCLUS??O DAS INFORMA????ES COLETADAS</strong></h1><p>As informa????es coletadas pela AMBEV por meio das P??ginas ser??o automaticamente exclu??das de seus servidores quando deixarem de ser ??teis para os fins para os quais foram coletadas.</p><p>No entanto, caso o Usu??rio deseje, poder?? requerer a exclus??o antecipada dos dados coletados, mediante solicita????o encaminhada ?? AMBEV, pelo e-mail: <a href="mailto:faleconosco@ambev.com.br">faleconosco@ambev.com.br</a></p><p>A AMBEV empreender?? todos os esfor??os para atender tais pedidos no menor espa??o de tempo poss??vel. No entanto, mesmo em caso de requisi????o de exclus??o, ser?? respeitado o prazo de armazenamento m??nimo de informa????es de usu??rios de aplica????es de Internet, determinado pela legisla????o brasileira.</p><h1><strong>7 LEGISLA????O E FORO</strong></h1><p>Essa Pol??tica ser?? regida, interpretada e executada de acordo com as leis da Rep??blica Federativa do Brasil, independentemente dos conflitos dessas leis com leis de outros estados ou pa??ses, sendo competente o Foro da Comarca de S??o Paulo-SP, com exclus??o de qualquer outro, para dirimir qualquer d??vida decorrente deste instrumento. O Usu??rio consente, expressamente, com a compet??ncia desse ju??zo, e renuncia, neste ato, ?? compet??ncia de qualquer outro foro, por mais privilegiado que seja ou venha a ser.</p><p>??ltima atualiza????o: 03.10.2014.</p>',
	content_2 : '<p>A AMBEV S.A., pessoa jur??dica com sede na cidade de S??o Paulo, inscrita no CNPJ sob o n?? 91.088.328/0001-67 (???AMBEV???), possui sites e servi??os (???P??ginas???) relacionados ??s diversas marcas da empresa. Deste modo, os presentes Termos de Uso (???Termos???) visam regular a utiliza????o por voc?? (doravante ???Usu??rio???) das P??ginas, Aplicativos, Redes Sociais, entre outros (???P??ginas???), da AMBEV.</p><p>Os presentes Termos aplicam-se ??s P??ginas relacionadas a quaisquer das marcas da AMBEV, entendendo como tal todas aquelas elencadas no site oficial da AMBEV, no endere??o <a href="http://www.ambev.com.br/nossas-marcas">http://www.ambev.com.br/nossas-marcas</a>, englobando todos os seus produtos.</p><p>Estes Termos est??o dispon??veis para acesso a qualquer momento pelo Usu??rio, por meio do endere??o http://www.skol.com.br/sobre/termos-de-uso. Ainda, aplicam-se aos presentes Termos e na utiliza????o das P??ginas o quanto disposto na Pol??tica de Privacidade das P??ginas da AMBEV, dispon??vel em http://www.skol.com.br/sobre/politica-de-privacidade.</p><h1><strong>1 ACEITA????O</strong></h1><p>A aceita????o a estes Termos se dar?? no seu clique no bot??o ???Aceito???, quando do primeiro acesso a qualquer das P??ginas da AMBEV. Exceto em caso de expressa disposi????o legal em contr??rio, a AMBEV se reserva o direito de alterar os presentes Termos, a qualquer momento, sem necessidade de pr??via comunica????o ao Usu??rio. Deste modo, cabe ao Usu??rio reler os presentes Termos em caso de qualquer modifica????o, conforme data de atualiza????o constante ao final deste documento.</p><p>O acesso ??s P??ginas pode, ainda, estar sujeito a certas condi????es particulares (doravante, as "Condi????es Particulares") expressamente referenciadas, as quais, conforme o caso, substituem, complementam e/ou modificam estes Termos. O Usu??rio, portanto, dever?? ler as respectivas Condi????es Particulares anteriormente ao acesso ou ?? utiliza????o das P??ginas a elas relacionadas. Deste modo, o acesso ??s P??ginas depender?? da incondicional aceita????o do Usu??rio a tais Condi????es Particulares, na vers??o publicada pela AMBEV, no momento em que ocorrer o acesso e/ou a utiliza????o.</p><h1><strong>2 CONDI????ES DE ACESSO E UTILIZA????O DAS P??GINAS</strong></h1><p><strong>2.1 Car??ter gratuito do acesso e utiliza????o das P??ginas</strong></p><p>O acesso e a utiliza????o das P??ginas pelo Usu??rio t??m, como regra, car??ter gratuito. No entanto, alguns servi??os oferecidos pela AMBEV e por terceiros por meio das P??ginas podem estar sujeitos ?? remunera????o, nas formas e nos valores determinados nas Condi????es Particulares da P??gina.</p><p><strong>2.2 Registro de Usu??rio</strong></p><p>Algumas p??ginas podem exigir pr??via inscri????o ou pr??vio registro do Usu??rio para acesso. Neste caso, o acesso ?? P??gina somente ser?? liberado ap??s o preenchimento de cadastro pelo Usu??rio com todas as informa????es obrigat??rias requeridas pela AMBEV.</p><p>Toda informa????o fornecida pelo Usu??rio por meio das P??ginas dever?? ser verdadeira. Assim, o Usu??rio garante a autenticidade de todos os dados que informar durante o preenchimento dos respectivos formul??rios. Desta forma, ?? de responsabilidade do Usu??rio manter toda a informa????o fornecida ?? AMBEV permanentemente atualizada, de forma que sempre reflita os dados reais do Usu??rio.</p><p><span style="text-decoration: underline;">Em qualquer circunst??ncia, o Usu??rio ser?? o ??nico respons??vel por declara????es falsas ou inexatas que prestar e que vierem a causar preju??zos ?? AMBEV ou a terceiros</span>.</p><p><strong>2.3 Menores de Idade</strong></p><p>Para utilizar as P??ginas, os Usu??rios menores de idade devem obter a pr??via permiss??o de seus pais, tutores ou representantes legais, os quais ser??o considerados respons??veis por todos os atos praticados pelos menores, inclusive em rela????o aos conte??dos e ??s P??ginas acessadas.</p><p>Como a Internet possibilita o acesso a conte??dos que podem n??o ser apropriados a menores, a AMBEV informa aos Usu??rios que existem mecanismos, especialmente de realiza????o de buscas, que permitem limitar os materiais dispon??veis aos menores, sendo de especial utilidade tais restri????es de acesso, embora n??o sejam infal??veis.</p><p><span style="text-decoration: underline;">As P??ginas relacionadas ??s marcas de bebidas alc??olicas da AMBEV (as marcas listadas em </span><a href="http://www.ambev.com.br/cervejas.html">http://www.ambev.com.br/cervejas.html</a><span style="text-decoration: underline;">) n??o s??o direcionadas a e n??o devem ser utilizadas por Usu??rios menores de idade. De modo a evitar o acesso indevido, a AMBEV avisa claramente em tais P??ginas que seu conte??do ?? voltado a Usu??rios maiores de 18 (dezoito) anos</span>.</p><p><span style="text-decoration: underline;">A AMBEV, no entanto, sob hip??tese alguma, n??o se responsabiliza pelo acesso indevido a tais P??ginas, decorrentes informa????es incorretas ou inver??dicas fornecidas pelo Usu??rio ou do desrespeito ?? classifica????o et??ria indicada na P??gina</span>.</p><p><strong>2.4 Obriga????o de utilizar as P??ginas corretamente</strong></p><p>Ao utilizar as P??ginas da AMBEV, o Usu??rio se compromete a respeitar a legisla????o brasileira vigente, bem como todo o quanto disposto nos presentes Termos, n??o devendo produzir, disponibilizar, divulgar ou transmitir qualquer conte??do que:</p><p>a) Seja contr??rio a qualquer norma da legisla????o brasileira, bem como ?? moral e aos bons costumes geralmente aceitos;</p><p>b) Incentive a discrimina????o, o ??dio ou a viol??ncia contra pessoas ou grupos em raz??o de sexo, ra??a, religi??o, defici??ncia, nacionalidade ou por qualquer outro motivo;</p><p>c) Incorporem, ponham ?? disposi????o ou permitam acessar produtos, elementos, mensagens e/ou servi??os ilegais, violentos, pornogr??ficos, degradantes ou, em geral, contr??rios ?? lei, ?? moral e aos bons costumes geralmente aceitos ou ?? ordem p??blica;</p><p>d) Sejam falsos, amb??guos, inexatos, exagerados ou extempor??neos, de forma que possam induzir a erro sobre seu objeto ou sobre as inten????es ou prop??sitos do comunicante;</p><p>e) Sejam protegidos por quaisquer direitos de propriedade intelectual ou industrial pertencentes a terceiros, sem que o Usu??rio tenha obtido previamente dos seus titulares a autoriza????o necess??ria para levar a cabo o uso que efetuar ou pretender efetuar;</p><p>f) Incorporem v??rus ou outros elementos f??sicos ou eletr??nicos que possam causar dano ou impedir o normal funcionamento da rede, do sistema ou de equipamentos inform??ticos ("hardware" e "software") de terceiros, ou que possam causar dano aos documentos eletr??nicos e arquivos armazenados nestes equipamentos inform??ticos; ou</p><p>g) Provoquem, por suas caracter??sticas (tais como forma, extens??o etc.) dificuldades no normal funcionamento do Servi??o.</p><p><span style="text-decoration: underline;">Em qualquer circunst??ncia, o Usu??rio ?? o ??nico respons??vel pelo uso que fizer das P??ginas da AMBEV, bem como por qualquer conte??do por ele inserido</span>.</p><p><strong>2.5 Utiliza????o Correta do Conte??do e Propriedade Intelectual</strong></p><p>O Usu??rio se compromete a utilizar as P??ginas e o seu conte??do, ou seja, os textos, gr??ficos, ??cones, <em>links</em>, as fotografias, imagens, tecnologia, e demais conte??dos audiovisuais ou sonoros, <em>softwares</em>, desenhos gr??ficos e c??digos fonte (em conjunto, ???Conte??do(s)???), de acordo com todo o ordenamento jur??dico, com a moral e os bons costumes geralmente aceitos, com os presentes Termos e com as Condi????es Particulares de cada P??gina.</p><p>Todas as marcas, os nomes comerciais ou logotipos de qualquer esp??cie disponibilizados nas P??ginas s??o de propriedade da AMBEV, sem que a utiliza????o das P??ginas possa ser entendida como autoriza????o para que o Usu??rio possa citar tais marcas, nomes comerciais e/ou logotipos.</p><p>Todo o Conte??do ?? de propriedade exclusiva da AMBEV, ou de terceiros que autorizaram sua utiliza????o nas P??ginas, e est?? protegido por leis e tratados internacionais, sendo vedada sua c??pia, reprodu????o, ou qualquer outro tipo de utiliza????o, ficando os infratores sujeitos ??s san????es civis e criminais correspondentes, nos termos das Leis 9.610/98, 9.609/98 e 9.279/96.</p><p><span style="text-decoration: underline;">O Usu??rio dever?? se abster de obter, ou de tentar obter, os Conte??dos por meios distintos daqueles que, em cada caso, tenham sido colocados ?? disposi????o para tais prop??sitos</span>.</p><p><strong>2.6 Pol??tica Anti-Spamming da AMBEV</strong></p><p>Por meio deste documento o Usu??rio se obriga a abster-se de:</p><p><strong>a) </strong>obter dados com finalidade publicit??ria e remeter publicidade de qualquer classe com finalidade de venda ou outras de natureza comercial sem a pr??via solicita????o e consentimento;</p><p><strong>b) </strong>remeter a um grupo de pessoas quaisquer mensagens n??o solicitadas nem consentidas previamente;</p><p><strong>c) </strong>enviar cadeias de mensagens eletr??nicas n??o solicitadas nem previamente consentidas;</p><p><strong>d) </strong>utilizar listas de distribui????o a que se pode ter acesso atrav??s das P??ginas para a realiza????o das atividades descritas nos itens acima; e</p><p><strong>e) </strong>colocar a disposi????o de terceiros, com qualquer finalidade, dados captados a partir de listas de distribui????o.</p><p>O Usu??rio ou terceiros prejudicados pela recep????o de mensagens n??o solicitados, relacionadas ??s P??ginas e dirigidas a pluralidade de pessoas poder??o efetuar sua reclama????o comunicando a AMBEV por meio do correio eletr??nico sac@ambev.com.br.</p><p><strong>2.7 Introdu????o de "hiperlinks" que permitam o acesso ??s P??ginas da AMBEV</strong></p><p>O Usu??rio que se propuser a estabelecer hiperlink entre sua p??gina web e as P??ginas da AMBEV (???Hiperlink???) dever?? cumprir as seguintes condi????es:</p><p><strong>a) </strong>o "Hiperlink" permitir?? ??nica e exclusivamente o acesso ?? homepage ou ?? p??gina de in??cio das P??ginas, mas n??o poder?? reproduzi-la de qualquer forma;</p><p><strong>b)</strong>n??o criar um frame sobre as P??ginas;</p><p><strong>c) </strong>n??o realizar manifesta????es ou indica????es falsas, inexatas ou incorretas sobre a AMBEV, seus administradores, empregados, ou P??ginas;</p><p><strong>d)</strong>n??o declarar nem fazer entender que a AMBEV teria autorizado o "Hiperlink" ou que teria supervisionado ou assumido, sob qualquer forma, responsabilidade sobre os servi??os oferecidos ou colocados ?? disposi????o na p??gina web em que for estabelecido o "Hiperlink";</p><p><strong>e) </strong>com exce????o dos sinais que formarem parte do "Hiperlink", a p??gina web em que se estabelecer o "Hiperlink" n??o conter?? nenhuma marca, nome comercial, logotipo, <em>slogan</em>, <em>look and feel</em> ou quaisquer outros sinais pertencentes ?? AMBEV;</p><p><strong>f) </strong>a p??gina web em que estabelecer o "Hiperlink" n??o dever?? conter informa????es ou conte??dos il??citos, contr??rios ?? moral, aos bons costumes ou ?? ordem p??blica, bem como n??o conter?? conte??dos contr??rios aos direitos de terceiros.</p><p>A fixa????o de um "Hiperlink" n??o implica, em qualquer hip??tese, a exist??ncia de rela????es entre a AMBEV e o propriet??rio da p??gina web que o contiver, nem a aceita????o ou aprova????o da AMBEV acerca de seus conte??dos ou servi??os.</p><h1><strong>3 DURA????O E FINALIZA????O</strong></h1><p>O acesso ??s P??ginas da AMBEV ?? concedido ao Usu??rio por prazo indeterminado. A AMBEV, no entanto, est?? facultada a dar por terminado, suspender ou interromper unilateralmente, a qualquer momento e sem necessidade de pr??vio aviso, o acesso ??s P??ginas, sem que qualquer indeniza????o seja devida ao Usu??rio.</p><p>A AMBEV, ainda, se reserva o direito de recusar ou retirar o acesso ??s P??ginas, a qualquer momento e sem necessidade de pr??vio aviso, por iniciativa pr??pria ou por exig??ncia de um terceiro, ??queles Usu??rios que descumprirem estes Termos.</p><h1><strong>4 EXCLUS??O DE GARANTIAS E DE RESPONSABILIDADE</strong></h1><p>Em decorr??ncia de quest??es t??cnicas e operacionais, a AMBEV n??o pode garantir a disponibilidade, infalibilidade e continuidade do funcionamento das P??ginas, nem garante a utilidade das P??ginas para a realiza????o de qualquer atividade em concreto. <span style="text-decoration: underline;">Desse modo, a AMBEV n??o ser??, em hip??tese alguma, respons??vel por quaisquer danos decorrentes da interrup????o do acesso ??s P??ginas, ou por falhas de funcionamento das mesmas, nem se responsabiliza pela defrauda????o da utilidade que os Usu??rios possam ter atribu??dos P??ginas, pela falibilidade das mesmas, nem por qualquer dificuldade de acesso</span>.</p><p>A AMBEV utiliza as melhores pr??ticas recomendadas de mercado para manter seguros todos os dados inseridos pelo Usu??rio nas P??ginas, no entanto n??o garante que terceiros n??o autorizados n??o far??o uso de meios il??citos para obter indevidamente tais informa????es. <span style="text-decoration: underline;">Assim, a AMBEV se exime de responsabilidade pelos danos e preju??zos de toda natureza que possam decorrer do conhecimento que terceiros n??o autorizados possam ter de quaisquer das informa????es repassadas, em decorr??ncia de falha exclusivamente atribu??vel aos Usu??rios ou a terceiros que fujam a qualquer controle razo??vel da AMBEV</span>.</p><p>A AMBEV n??o garante a aus??ncia de v??rus nas P??ginas, bem como de outros elementos nocivos que possam produzir altera????es nos sistemas inform??ticos dos Usu??rios (<em>software</em> e <em>hardware</em>) ou nos documentos eletr??nicos armazenados no sistema inform??tico, <span style="text-decoration: underline;">eximindo-se de qualquer responsabilidade pelos danos e preju??zos que possam decorrer de quaisquer elementos nocivos</span>.</p><p>A AMBEV n??o verifica ou controla o uso que o Usu??rio faz das p??ginas. <span style="text-decoration: underline;">Dessa forma, a AMBEV se exime de qualquer responsabilidade pelos danos e preju??zos de toda natureza que possam decorrer da utiliza????o das P??ginas ou que possam ser devidos ?? falta de veracidade, vig??ncia, exaustividade e/ou autenticidade do conte??do l?? disponibilizado, bem como da informa????o que os Usu??rios proporcionam a outros Usu??rios sobre si mesmos e, em particular, ainda que n??o de forma exclusiva, pelos danos e preju??zos de toda a natureza que possam ser devidas ?? suplanta????o da personalidade efetuada por um Usu??rio em qualquer classe de comunica????o realizada por meio das P??ginas</span>.</p><h1><strong>5 PROCEDIMENTO EM CASO DE REALIZA????O DE ATIVIDADES DE CAR??TER IL??CITO</strong></h1><p>Na hip??tese de um Usu??rio ou um terceiro considerar que existem informa????es, fatos ou circunst??ncias que constituem atividade il??cita, nas P??ginas da AMBEV, especialmente em caso de viola????o de direitos de propriedade intelectual ou outros direitos, dever?? enviar comunica????o ?? AMBEV contendo os seguintes dados:</p><p><strong>a) </strong>dados pessoais: nome, endere??o, n??mero de telefone e endere??o de correio eletr??nico do reclamante;</p><p><strong>b) </strong>especifica????o da suposta atividade il??cita ocorrida nas P??ginas e, em particular, quando se tratar de suposta viola????o de direitos autorais, indica????o precisa e completa dos conte??dos protegidos e supostamente infringidos;</p><p><strong>c) </strong>fatos ou circunst??ncias que revelam o car??ter il??cito de tal atividade; e</p><p><strong>d) </strong>se o caso, declara????o expressa e clara de que a utiliza????o dos conte??dos foi realizada sem o consentimento do titular dos direitos de propriedade intelectual supostamente infringidos.</p><p>Sempre de acordo com a legisla????o em vigor, a partir da ci??ncia, a AMBEV poder?? excluir conte??do acusado como il??cito, assim como fornecer informa????es ??s autoridades competentes, mediante o competente requerimento, com a finalidade de viabilizar a apura????o de condutas ilegais.</p><h1><strong>6 DISPOSI????ES GERAIS</strong></h1><p>Se qualquer parte destes Termos for considerada inv??lida ou inexequ??vel, tal trecho deve ser interpretado de forma consistente com a lei aplic??vel, para refletir, na medida do poss??vel, a inten????o original das partes, e as demais disposi????es permanecer??o em pleno vigor e efeito.</p><p>A falha da AMBEV em exigir quaisquer direitos ou disposi????es dos presentes Termos n??o constituir?? ren??ncia, podendo exercer regularmente o seu direito, dentro dos prazos legais.</p><p>Estes Termos poder??o ser alterados a qualquer momento pela AMBEV, consistindo obriga????o do Usu??rio verificar frequentemente este documento e tomar ci??ncia.</p><h1><strong>7 NOTIFICA????ES</strong></h1><p>Todas as notifica????es e comunica????es (doravante, as "Notifica????es") por parte do Usu??rio ?? AMBEV s??o consideradas eficazes, para todos os efeitos, quando forem dirigidas ao seguinte endere??o eletr??nico: <a href="mailto:faleconosco@ambev.com.br">faleconosco@ambev.com.br</a>.</p><p>Todas as notifica????es e comunica????es (doravante, as "Notifica????es") por parte da AMBEV ao Usu??rio ser??o consideradas eficazes, para todos os efeitos, quando se realizarem em uma das seguintes formas:</p><p>a) envio de carta ao domic??lio do Usu??rio quando este tiver fornecido um endere??o v??lido ?? AMBEV;</p><p>b) envio de mensagem por correio eletr??nico a qualquer dos endere??os fornecidos pelo Usu??rio;</p><p>c) comunica????o telef??nica ao n??mero fornecido pelo Usu??rio; e</p><p>d) mediante a inclus??o de mensagens em qualquer das P??ginas da AMBEV.</p><p>Neste sentido, todas as Notifica????es que a AMBEV realizar ser??o consideradas v??lidas quando efetuadas empregando os dados e atrav??s dos meios anteriormente destacados. Para estes efeitos, o Usu??rio declara que todos os dados fornecidos s??o v??lidos e corretos, comprometendo-se a comunicar ?? AMBEV todas as mudan??as relativas aos dados de notifica????o.</p><h1><strong>8 </strong><strong>LEGISLA????O E FORO APLIC??VEIS</strong><strong></strong></h1><p>Esses Termos ser??o regidos, interpretados e executados de acordo com as leis da Rep??blica Federativa do Brasil, independentemente dos conflitos dessas leis com leis de outros estados ou pa??ses, sendo competente o Foro de S??o Paulo/SP, para dirimir qualquer d??vida decorrente deste instrumento. O Usu??rio consente, expressamente, com a compet??ncia desse ju??zo, e renuncia, neste ato, ?? compet??ncia de qualquer outro foro, por mais privilegiado que seja ou venha a ser.</p><p>??ltima atualiza????o: 03.10.2014.</p>',
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

		/* Cria????o do Conte??do do Box */

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
                title : 'T??tulo 1'
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