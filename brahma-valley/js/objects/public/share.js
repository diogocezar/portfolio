Share = {
	twitter : {
		text   : "Vem aí o sertanejo como você nunca viu. %23BrahmaValley 28 e 29 de Novembro no Jockey Clube. Garanta seu ingresso:",
		urls   : "http://brahmavalley.com.br/",
		width  : 575,
		height : 400,
		url    : "https://twitter.com/intent/tweet"
	},
	facebook : {
		urls   : "http://brahmavalley.com.br/",
		width  : 575,
		height : 400,
		url    : "http://www.facebook.com/sharer.php"
	},
	init: function(){
		$(".share-twitter").on('click', function(){
			var url  = Share.twitter.url + "?url=" + Share.twitter.urls + "&text=" + Share.twitter.text;
			var left = ($(window).width()  - Share.twitter.width) / 2;
			var top  = ($(window).height() - Share.twitter.height) / 2;
			var opts = "toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no,";
			opts    += 'status=1' + ',width=' + Share.twitter.width + ',height=' + Share.twitter.height + ',top=' + top + ',left=' + left;
			var win  = window.open(url, "_blank", opts);
			win.resizeTo(Share.twitter.width, Share.twitter.height);
			win.moveTo(left, top);
			win.focus();
		});
		$(".share-face").on('click', function(){
			var url  = Share.facebook.url + "?url=" + Share.facebook.urls;
			var left = ($(window).width()  - Share.facebook.width) / 2;
			var top  = ($(window).height() - Share.facebook.height) / 2;
			var opts = "toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no,";
			opts    += 'status=1' + ',width=' + Share.facebook.width + ',height=' + Share.facebook.height + ',top=' + top + ',left=' + left;
			var win  = window.open(url, "_blank", opts);
			win.resizeTo(Share.facebook.width, Share.facebook.height);
			win.moveTo(left, top);
			win.focus();
		});

	},
}

$(document).ready(function() {
	Share.init();
});