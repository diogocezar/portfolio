Maps = {
	init: function(){
		var myLatLng1 = {
			lat: -23.5422911,
			lng: -46.6426224,
		}
		var myLatLng2 = {
			lat: -23.528396,
			lng: -46.6722072,
		}
		var mapCanvas1 = document.getElementById('map_1');
		var mapCanvas2 = document.getElementById('map_2');
		var mapOptions1 = {
			center            : myLatLng1,
			zoom              : 15,
			mapTypeId         : google.maps.MapTypeId.ROADMAP,
			scrollwheel       : false,
			navigationControl : false,
			mapTypeControl    : false,
			scaleControl      : false,
			draggable         : false,
		};
		var mapOptions2 = {
			center            : myLatLng2,
			zoom              : 15,
			mapTypeId         : google.maps.MapTypeId.ROADMAP,
			scrollwheel       : false,
			navigationControl : false,
			mapTypeControl    : false,
			scaleControl      : false,
			draggable         : false,
		};
		var map1 = new google.maps.Map(mapCanvas1, mapOptions1);
		var map2 = new google.maps.Map(mapCanvas2, mapOptions2);
		var myMarker1 = new google.maps.Marker({
    		position: myLatLng1,
    		map: map1,
    		title: 'BAR BRAHMA CENTRO'
  		});
		var myMarker2 = new google.maps.Marker({
    		position: myLatLng2,
    		map: map2,
    		title: 'VILLA COUNTRY'
  		});
	},
}

$(document).ready(function() {
	google.maps.event.addDomListener(window, 'load', Maps.init());
});