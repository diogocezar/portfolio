Square = {
	animated : [],
	init : function(){
		$(window).scroll( function(){
			$('.iamhere').each( function(i){
				var bottom_of_object = $(this).offset().top  + $(this).outerHeight();
				var bottom_of_window = $(window).scrollTop() + $(window).height();
				if(bottom_of_window > bottom_of_object){
					var id = "#" + $(this).attr("id");
					if(($.inArray(id, Square.animated) == -1)  && id != undefined){
						Square.animated.push(id);
						TweenLite.defaultEase = Linear.easeNone;
						TweenLite.set(id, {visibility:"visible"});
						if($(id).hasClass('type1')){
							var h = 230;
							var w = 160;
						}
						if($(id).hasClass('type2')){
							var h = 120;
							var w = 200;
						}
						var tl = new TimelineLite();
						tl
						.fromTo(id +">.l1", 1, {height:0}, {height:h})
						.fromTo(id +">.l2", 4, {width:0}, {width:w})
						.fromTo(id +">.l3", 1, {height:0}, {height:h})
						.fromTo(id +">.l4", 1, {width:0}, {width:w})
						tl.timeScale(10)
					}
		        }
		    }); 
		});
	}
}

$(document).ready(function() {
	Square.init();
});