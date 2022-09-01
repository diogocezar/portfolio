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

		Maps.map      = new google.maps.Map(mapCanvas, options);

		/* Adiciona um Marcador */
		marker        = new google.maps.Marker({
			position   : latlngs,
			map        : Maps.map,
			title      : config.map.title,
			icon       : "./assets/images/marker.png",
		});

		/* Criação do Conteúdo do Box */
		var content = [];
		content.push('<div class="content-infobox open-details">');
		content.push('<img src="./assets/images/thumb-lugar.jpg" alt="Nome da Academia" class="img-details"/>');
		content.push('<h2>Nome da Academia</h2>');
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