# Front-End Promoção Lacta Alegria para Todos os Gostos

Este é o projeto de Front-End do website da Promoção Lacta Alegria pata todos os Gostos.

## Lista de Urls

* http://projects.diogocezar.com.br/lacta/
* http://projects.diogocezar.com.br/lacta/ganhadores.html
* http://projects.diogocezar.com.br/lacta/ganhadores-resultado.html
* http://projects.diogocezar.com.br/lacta/marcas-participantes.html
* http://projects.diogocezar.com.br/lacta/faq.html
* http://projects.diogocezar.com.br/lacta/regulamento.html

## O que falta

* Favicon
* Og image
* Página de Contato
* Layouts em 1920 para recorte de algumas imagens com maior qualidade, como por exemplo (achou ganhou...)
* Definição dos efeitos de confetes
	* Em todas as páginas? Só na principal?
* Definição de alguns comportamentos responsivos:
	* Como tratar o menu mobile (comportamento);
	* Como tratar a sobreposição do título com o logo nas internas?
* Validar animações colocadas;
* Link Mondeles;
* Informações definitivas footer;
* Link para Receba seu prêmio me até 30 dias (página principal);
* Link para Confira aqui a lista de produtos participantes;
* Validação da animação da página marcas participantes e solicitação das imagens finais (serão aquelas se o fundo?)
* Textos finais para Regulamento
* Textos finais para FAQ
* Texto final rodapé

## Items Feitos

Pontos Gerais

* Scroll vertical do site pode deixar sem customização.
* Diminuir tamanho do logo Mondelēz.

Slide 3

* Diminuir tamanho do “Achou, Ganhou!”
* Diminuir tamanho de “E como vai funcionar?”.
* Diminuir tamanho dos cubos de conteúdo e da fonte com os textos.
* Diminuir tamanho do logo Mondelēz e deixar seu posicionamento na mesma linha de “FAQ”.

Slide 4

* Retirar o load com scroll na página, que pode deixar a tela sem carregar nada dependendo da configuração de tela.
* Ajustar tamanho dos elementos de arte no espaço, que estão ocupando mais espaço no Chrome do que no PSD.
* O correto é “de 1 ano de chocolate” e não “de1 ano de chocolate”.
	Esse erro estava no PSD, mas está corrigido na imagem.

Slide 5

* Refiz toda a estrutura de conteúdos, validar por favor.

Slide 7

* Acertar a grafia do FAQ no page description, que está como Faq (no mobile o FAQ aparenta grafia errada no menu também)
* Diminuir em um ponto a fonte do conteúdo.
* O texto do “FAQ” deve ocupar uma área menor no box, ocupando menos espaço nas laterais.

Slide 8

* Diminuir em um ponto a fonte do conteúdo.
* O texto do “Regulamento” deve ocupar uma área menor no box, ocupando menos espaço nas laterais.

Slide 10

* Diminuir um pouco o tamanho do logo e “Achou, Ganhou!” na home tanto no iPad quanto no mobile, para que apareça mais conteúdo.
* Diminuir um pouco o tamanho da fonte no footer do mobile, para que não tenha viúva no texto.
* No Android o scroll do site mobile não funcionou.
	Não sei se as alterações no scroll irão sanar este problema, testar por favor.
Deixaremos o comportamento do Menu inalterado por hora.

## Itens Não Feitos

Pontos Gerais

Acho que vale a pena uma explicação inicial. O site deve ser testados em todas as resoluções partindo da resolução maior em que foi criado.

A resolução máxima é 1920 de largura. Partindo desta resolução, testar todas as outras até a mobile.

Os tamanhos Tablet, Celular e Desktop estão definidos pelo Framework Bootstrap que é o que venho utilizado para a maioria dos projetos. Seria bacana dar um estudada nesses tamanhos para realizar os próximos testes ;)

Lembrando que é bem complicado, principalmente neste projeto, tentar apenas "copiar" o que está no PSD. Acredito que precisemos utilizar um pouco da persuasão com o cliente e explicar que para uma melhor qualidade, não temos como ficar medindo os pixels, tornando assim o site com uma qualidade bacana mas responsivo.

* Texto no footer está com uma formatação e tamanho de fonte diferente da do PSD.

	Melhorei no geral, mas isso pode variar de acordo com a resolução, temos que achar um ajustes que fique bacana em todas as resoluções.

* Diminuir tamanho dos boxes e títulos das internas, respeitando a linha com o menu do site.

	Não entendi o que deve ser feito.

* Evitar que a mão que segura o Title cruze o logo.

	Como? Não temos nenhuma referência deste layout. Qual seria o posicionalmento do logo? O mesmo problema ocorre com os ajustes Mobile.

* Diminuir o tamanho das caixas do menu e da fonte.
	O menu diminui de tamanho na resolução 1280px.
	Tentei deixar o mais próximo para uma qualidade interessante responsiva. Foi testado em telas maiores? Pois o menu se ajusta de acordo com a resolução.
	Além disso, menor que isso não deu leitura.

* A parte superior do bloco azul-escuro das internas possui uma ligeira inclinação da esquerda para a direita.

	Não consegui entender, mas o bloco azul está totalmente reto, pode ser uma ilusão pelo fato do box estar torto.

Slide 4

* Diminuir em 1 ponto o tamanho da fonte.
	Todo este conteúdo é imagem, se for para diminuir, temos que diminuir a imagem como um todo, vou aguardar a full hd de 1920.

Slide 5

* Ajustar tamanho dos elementos de arte no espaço “Ganhadores”, que estão ocupando mais espaço no Chrome do que no PSD.
	Verificar se ficou ok;

Slide 6

* Apresentar o logo e produto das marcas participantes e não apenas a Lacta.

	Eu fiz isso apenas para marcação, quando tiver todos os logos finais e na resolução correta eu aplico ok?

* Destaque de “Marcas” vai somente até o final de “Contato” no menu do PSD e não até o meio de “Ganhadores” como no Chrome.
* Ajustar tamanho dos logos e espaçamento entre logos de produtos, a fileira da direita deve chegar até na altura de “Regulamento”,  a central tem que ficar quase no mesmo tamanho do destaque “Marcas” e o da esquerda deve estar na mesma altura do logo do site.
	Como trabalhamos com ajustes responsivos esses ajustes não são possíveis de serem "fixados" para todas as resoluções.
	Na resolução 1920, está como o esperado.
	Vamos trabalhar juntos para conseguir uma solução responsiva?

Slide 9

* O PSD do iPad possui, assim como os PSDs das telas tradicionais do site, uma resolução bem diferente da padrão, o que dificulta também na hora de conferir o trabalho realizado. Por isso, considere aqui o mesmo padrão da apresentação tradicional, desde que não prejudique a leitura.
	Não entendi o que deve ser feito

Slide 10

* O PSD do iPad e Mobile possui, assim como os PSDs das telas tradicionais do site, uma resolução bem diferente da padrão, o que dificulta também na hora de conferir o trabalho realizado. Por isso, considere aqui o mesmo padrão da apresentação tradicional, desde que não prejudique a leitura.
	Não entendi esta orientação
* Deixar o logo aparente nas internas do mobile; não apareceu nem no iOS nem no Android. Ver como fazer isso com a mão aparente e sem ‘cortar’ o logo.
	Aqui tenho uma GRANDE dificuldade. Como fazer isso? Eu ocultei justamente por não saber como ajustar a logo com a mõazinha, visto que ela começa do topo do site.