Index = {
	init: function(){
		$('.btn-action-down').on('click', function(){Index.goToItems()});
		$(window).on('resize', function(){
			if($(window).width() <= 650){
				$(".btn-send").empty().html("ENVIAR RECEITA");
			}
			else{
				$(".btn-send").empty().html("ENVIAR SUA RECEITA");
			}
		}).trigger('resize');
	},
	goToItems: function(){
		if($(window).width() > 330){
			$('html, body').stop().animate({scrollTop: $("#search").offset().top - 80}, 1500,'easeOutQuart');
		}
		else{
			$('html, body').stop().animate({scrollTop: $("#search").offset().top - 50}, 1500,'easeOutQuart');
		}
	}
}

$(document).ready(function() {
	Index.init();
});