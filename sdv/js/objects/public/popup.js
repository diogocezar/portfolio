PopUp = {
	init: function(){
		$('#btn-terms').on('click', function(){PopUp.open('terms')});
		$('#popup-close-terms').on('click', function(){PopUp.close('terms')});
	},
	open: function(id){
		$('#' + id).fadeIn();
		$(document).keyup(function(e) {
		    if (e.keyCode == 27) {
		    	PopUp.close(id);
		    }
		});
		setTimeout(function(){$('#popup-close-' + id).fadeIn()}, 500);
		PopUp.top();
		$('#' + id).height($(document).height());
	},
	close: function(id){
		$('#' + id).fadeOut();
		setTimeout(function(){$('#popup-close-' + id).fadeOut()}, 500);
	},
	top: function(){
		$('html, body').stop().animate({scrollTop: 0}, 0,'easeOutQuart');
	}
}

$(document).ready(function() {
	PopUp.init();
});