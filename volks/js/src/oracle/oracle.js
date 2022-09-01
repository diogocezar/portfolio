Oracle = {
	page      : null,
	NiceScroll: {
		config : {
			cursorwidth        : "8px",
			zindex             : 99999999,
			scrollspeed        : 90,
			mousescrollstep    : 60,
			cursoropacitymax   : 0.8,
			cursorcolor        : "#aaa",
			horizrailenabled   : false,
			cursorborder       : "none",
			cursorborderradius : "0px"
		},
		init: function(){
			if(!Mobile.isMobile)
				$("html").niceScroll(Oracle.NiceScroll.config);
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
	Buttons: {
		init: function(){
			Shared.__set_button("btn-top", function(event){
				PageScroll.scroll();
			});
		}
	},
	init: function () {
		Mobile.init();
		var exec = [
			Oracle.ScrollReveal,
			Oracle.NiceScroll,
			Oracle.Modernizr,
			Oracle.Buttons,
			Oracle.Preloader
		];
		for(var i=0; i<exec.length; i++){
			exec[i].init();
		}

	}
}

$(document).ready(function() {
	Oracle.init();
});

$(window).load(function(){
	Oracle.Preloader.loaded = true;
})