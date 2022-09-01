Experiences = {
	init: function(){
		$("#detalhes").hide();
		$(".back-top").on('click', function(){
			Experiences.top();
		});
		$(".experience").on('click', function(){
			Oracle.Preloader.show();
			$(".footer-exp").hide();
			var slug = $(this).data('slug');
			var data = Experiences.getData($(this));
			Experiences.show(slug, data);
		});
	},
	getPath: function(){
		var url = window.location.pathname;
		var regEx = /\/sobre\/(.*)/
		if(!regEx.exec(url))
			return "./"
		else
			return "../";
	},
	getData: function(obj){
		return {
				'title'       : obj.data('title'),
				'description' : obj.data('description'),
				'img'         : obj.data('img'),
				'slug'        : obj.data('slug')
		};
	},
	show: function(artist, data){

		Experiences.changeUrl(data['slug']);
		
		var img        = [];
		var path       = Experiences.getPath();

		img.push('<img alt="');
		img.push(data['title']);
		img.push('" class="animation-05 img-responsive img-center" src="');
		img.push(path + data['img']);
		img.push('" data-sr/>');

		$(".fill-img").empty().html(img.join(''));
		$(".fill-title").empty().html(data['title']);
		$(".fill-description").empty().html(data['description']);

		$("#detalhes").fadeIn('slow', function(){
			$(".footer-detail").show();
			Oracle.Preloader.hide();
			$('html, body').stop().animate({ scrollTop: $('#detalhes').offset().top-80}, 500, 'easeOutQuart');
		});
	},
	changeUrl: function(content){
		var prefix = "./";
		var arrayPath = window.location.pathname.split('/');
		if(arrayPath[arrayPath.length-1] != content){
			if(arrayPath[arrayPath.length-1] == "sobre"){
				prefix = "./";
			}
			else{
				prefix = "../";
			}
			window.history.pushState("", "", prefix + "sobre/" + content);
		}
	},
	top: function(){
		$("#detalhes").fadeOut();
		$(".footer-exp").show();
		$(".footer-detail").hide();
		$('html, body').stop().animate({ scrollTop: $('#experiencias').offset().top-80}, 500, 'easeOutQuart');
	},
	showFromUrl: function(slug){
		if(slug == "todos"){
			$('html, body').stop().animate({ scrollTop: 0}, 500, 'easeOutQuart');
		}
		else{
			var obj   = $('.experience[data-slug="' + slug + '"]');
			if(!obj.length){
				window.location = "../sobre"
			}
			var data  = Experiences.getData(obj);
			Experiences.show(slug, data);
			$("#detalhes").fadeIn();
			$('html, body').stop().animate({ scrollTop: $('#detalhes').offset().top-80}, 500, 'easeOutQuart');
			$(window).scrollTop($(window).scrollTop()+1);
			$(window).scrollTop($(window).scrollTop()-1);
		}
	},
	isEmpty: function(val){
		return (val == "" || val == null || val == undefined);
	},
}

$(document).ready(function() {
	Experiences.init();
});