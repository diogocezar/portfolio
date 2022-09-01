Email = {
	init: function(){
		Email.open('email');
		$('#popup-close-email').on('click', function(){Email.close('email')});
	},
	open: function(id){
		$('#' + id).fadeIn();
		$(document).keyup(function(e) {
		    if (e.keyCode == 27) {
		    	Email.close(id);
		    }
		});
		setTimeout(function(){$('#popup-close-' + id).fadeIn()}, 500);
		Email.top();
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
	Email.init();
});