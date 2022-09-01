Tabs = {
	init: function(){
		$(".tab-option").on('click', function(){
			$(".tab-option").children().removeClass('actived');
			var child = $(this).children();
			child.addClass('actived');
			$(window).scrollTop($(window).scrollTop()+1);
			$(window).scrollTop($(window).scrollTop()-1);
		});
		if($(".tab-option-artists").length){
			$(".tab-option-artists").on('click', function(){
				$(".tab-option-artists").children().removeClass('actived');
				var child = $(this).children();
				child.addClass('actived');
				$(window).scrollTop($(window).scrollTop()+1);
				$(window).scrollTop($(window).scrollTop()-1);
			});
		}
		if($(".tab-option-videos").length){
			$(".tab-option-videos").on('click', function(){
				$(".tab-option-videos").children().removeClass('actived');
				var child = $(this).children();
				child.addClass('actived');
				$(window).scrollTop($(window).scrollTop()+1);
				$(window).scrollTop($(window).scrollTop()-1);
			});
		}
	},
}

$(document).ready(function() {
	Tabs.init();
});