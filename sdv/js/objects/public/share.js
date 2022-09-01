Share = {
	init: function(){
		Share.open('share');
		$('#popup-close-share').on('click', function(){Share.close('share')});
	},
	open: function(id){
		$('#' + id).fadeIn();
		$(document).keyup(function(e) {
		    if (e.keyCode == 27) {
		    	Share.close(id);
		    }
		});
		setTimeout(function(){$('#popup-close-' + id).fadeIn()}, 500);
		Share.top();
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
	Share.init();
});