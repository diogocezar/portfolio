Menu = {
	init: function(){
		$("#btn-menu-mobile").click(function(e) {
		    e.preventDefault();
		    $("#btn-menu-mobile").fadeOut('fast',function(){
		    	$("#wrapper").toggleClass("toggled");
		    	setTimeout(function(){
		    		$("#btn-close-mobile").show();
		    		$(".sidebar-nav").fadeIn();
		    	}, 500);
		    });
		});
		$("#btn-close-mobile").click(function(e) {
		    e.preventDefault();
		    $(".sidebar-nav").fadeOut('fast', function(){
				$("#btn-close-mobile").fadeOut('fast',function(){
			    	$("#wrapper").toggleClass("toggled");
			    	setTimeout(function(){
			    		$("#btn-menu-mobile").show();
			    		
			    	}, 500);
			    });
		    });
		});
	},
}

$(document).ready(function() {
	Menu.init();
});