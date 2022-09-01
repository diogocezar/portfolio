Artists = {
	init: function(){
		$("#detalhes").hide();
		$(".back-top").on('click', function(){
			Artists.top();
		});
		$(".artist").on('click', function(){
			Oracle.Preloader.show();
			var slug = $(this).data('slug');
			var data = Artists.getData($(this));
			Artists.show(slug, data);
		});
	},
	getPath: function(){
		var url = window.location.pathname;
		var regEx = /\/artistas\/(.*)/
		if(!regEx.exec(url))
			return "./"
		else
			return "../";
	},
	getData: function(obj){
		return {
				'day'         : obj.data('day'),
				'title'       : obj.data('title'),
				'description' : obj.data('description'),
				'img'         : obj.data('img'),
				'clip'        : obj.data('clip'),
				'invite'      : obj.data('invite'),
				'special'     : obj.data('special'),
				'slug'        : obj.data('slug')
		};
	},
	show: function(artist, data){

		Artists.changeUrl(data['slug']);

		var img        = [];
		var video_clip = [];
		var hide_tab   = false;
		var path       = Artists.getPath();

		img.push('<img alt="');
		img.push(data['title']);
		img.push('" class="img-line animation-05 img-responsive img-mobile" src="');
		img.push(path + data['img']);
		img.push('" data-sr/>');

		$(".fill-clip-video").empty();
		if(!Artists.isEmpty(data['clip'])){
			video_clip.push('<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/');
			video_clip.push(data['clip']);
			video_clip.push('" frameborder="0" allowfullscreen></iframe>');
			$(".fill-clip-video").html(video_clip.join(''));
		}

		$(".fill-img").empty().html(img.join(''));
		$(".fill-day").empty().html(data['day']);
		$(".fill-title").empty().html(data['title']);
		$(".fill-description").empty().html(data['description']);

		if(Artists.isEmpty(data['invite'])){
			hide_tab = true;
		}
		else{
			var video_invite = [];
			video_invite.push('<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/');
			video_invite.push(data['invite']);
			video_invite.push('" frameborder="0" allowfullscreen></iframe>');
			$(".fill-invite-video").empty().html(video_invite.join(''));
			$(".fill-clip-video").show();
		}
		$("#detalhes").fadeIn('slow', function(){
			if(hide_tab){
				$(".fill-tab").hide();
			}
			else{
				$(".fill-tab").show();
				$('.tab-option-artists[href="#option-clip"]').trigger('click');
			}
			Oracle.Preloader.hide();
			$('html, body').stop().animate({ scrollTop: $('#detalhes').offset().top-80}, 500, 'easeOutQuart');
		});
	},
	top: function(){
		$("#detalhes").fadeOut();
		$('html, body').stop().animate({ scrollTop: $('#artistas').offset().top-80}, 500, 'easeOutQuart');
	},
	changeUrl: function(content){
		var prefix = "./";
		var arrayPath = window.location.pathname.split('/');
		if(arrayPath[arrayPath.length-1] != content){
			if(arrayPath[arrayPath.length-1] == "artistas"){
				prefix = "./";
			}
			else{
				prefix = "../";
			}
			window.history.pushState("", "", prefix + "artistas/" + content);
		}
	},
	showFromUrl: function(slug){
		if(slug == "todos"){
			$('html, body').stop().animate({ scrollTop: 0}, 500, 'easeOutQuart');
		}
		else{
			var obj   = $('.artist[data-slug="' + slug + '"]');
			if(!obj.length){
				window.location = "../artistas"
			}
			var data  = Artists.getData(obj);
			Artists.show(slug, data);
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
	Artists.init();
});