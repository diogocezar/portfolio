var Etoo = {
	pageHeight    : null,
	init: function(){
		Etoo.assignButtons();
		Etoo.assignResizes();
		Etoo.assignDimentions();
		Etoo.heightResizes();
	},
	assignResizes: function(){
		$(window).on('resize', function(){
		});
	},
	assignButtons: function(){
	    $("#toogle-left").on('click', function(){Etoo.openLeft()});
        $("#toogle-right").on('click', function(){Etoo.openRight()});
	    $("#close-left").on('click', function(){Etoo.closeLeft()});
        $("#close-right").on('click', function(){Etoo.closeRight()});
        $("#open-menu").on('click', function(){Etoo.openMenu()});
        $("#close-menu").on('click', function(){Etoo.closeMenu()});
	},
	openMenu: function(){
		$(".menu-open").slideToggle();
		$(".icon-opened").hide();
		$(".icon-closed").show();
	},
	closeMenu: function(){
		$(".menu-open").slideToggle();
		$(".icon-closed").hide();
		$(".icon-opened").show();
	},
	assignDimentions: function(){
		Etoo.pageHeight = $(window).height();
	},
	heightResizes: function(){
		$(".dynamic-height").height(Etoo.pageHeight - 80);
		$(".dynamic-height").show();
		Oracle.Preloader.init();
	},
	openLeft: function(){
		$(".left").show();
        $(".bg-center").animate({
          	'margin-left': '50%'
        }, 200, 'linear');
        $(".left").animate({
  		    'left': '0'
	    }, 200, 'linear');
	},
	openRight: function(){
		$(".right").show();
        $(".bg-center").animate({
          	'margin-left': '-50%'
        }, 200, 'linear');
        $(".right").animate({
  		    'left': '50%'
	    }, 200, 'linear');
	},
	closeLeft: function(){
        $(".bg-center").animate({
          	'margin-left': '0'
        }, 200, 'linear');
        $(".left").animate({
  		    'left': '-50%'
	    }, 200, 'linear');
	    setTimeout(function(){
	    	$(".left").hide();	
	    }, 300);
		
	},
	closeRight: function(){
        $(".bg-center").animate({
          	'margin-left': '0'
        }, 200, 'linear');
        $(".right").animate({
  		    'left': '100%'
	    }, 200, 'linear');
	    setTimeout(function(){
	    	$(".right").hide();	
	    }, 300);
	}
}
$(document).ready(function(){
	Etoo.init();
});