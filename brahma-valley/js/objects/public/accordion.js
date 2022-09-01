Accordion = {
    getHeight: function(){
        if($(document).width() <= 600)
        	return 10;
        else
        	return 82;
    },
	init: function(){
		$(".accordion").on('click', function(){
			$('.panel-collapse.in').collapse('hide');
			$(this).css({'background-color' : '#969696'});
		});
		$(".p01").on('click', function(){
			setTimeout(function(){
				if($("#p01").hasClass('in')){
					$(".accordion").css({'background-color' : '#969696'});
					$(".p01").css({'background-color' : '#FF391E'});
					$('html, body').stop().animate({ scrollTop: $('.p01').offset().top-Accordion.getHeight()}, 500, 'easeOutQuart');
				}
			},
			400);
		});
		$(".p02").on('click', function(){
			setTimeout(function(){
				if($("#p02").hasClass('in')){
					$(".accordion").css({'background-color' : '#969696'});
					$(".p02").css({'background-color' : '#FF391E'});
					$('html, body').stop().animate({ scrollTop: $('.p02').offset().top-Accordion.getHeight()}, 500, 'easeOutQuart');
				}
			},
			400);
		});
		$(".p03").on('click', function(){
			setTimeout(function(){
				if($("#p03").hasClass('in')){
					$(".accordion").css({'background-color' : '#969696'});
					$(".p03").css({'background-color' : '#FF391E'});
					$('html, body').stop().animate({ scrollTop: $('.p03').offset().top-Accordion.getHeight()}, 500, 'easeOutQuart');
				}
			},
			400);
		});
		$(".p04").on('click', function(){
			setTimeout(function(){
				if($("#p04").hasClass('in')){
					$(".accordion").css({'background-color' : '#969696'});
					$(".p04").css({'background-color' : '#FF391E'});
					$('html, body').stop().animate({ scrollTop: $('.p04').offset().top-Accordion.getHeight()}, 500, 'easeOutQuart');
				}
			},
			400);
		});
		$(".accordion").css({'background-color' : '#969696'});
		$(".p01").css({'background-color' : '#FF391E'});
	},
}

$(document).ready(function() {
	Accordion.init();
});