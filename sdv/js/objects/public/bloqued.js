Bloqued = {
	init: function(){
		$(window).on('resize', function(){
			$(".blur").height($(".reciple-desktop").height());
			$(".blur-mobile").height($(".reciple-mobile").height());
		}).trigger('resize');
	}
}

$(document).ready(function() {
	Bloqued.init();
});