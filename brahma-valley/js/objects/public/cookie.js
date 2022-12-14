Cookie = {
	name_yes : 'BHRAMA_VALLEY_MAIOR_18',
	redirect: function(){
		if(Cookie.get(Cookie.name_yes) == "sim"){
			window.location = "./home";
		}
	},
	init: function(){
		$(".btn-yes").on('click', function(e){
			e.preventDefault();
			Cookie.saveAgree();
			window.location = "./home";
		});
	},
	saveAgree: function(){
		Cookie.set(Cookie.name_yes, "sim");
	},
	get : function(name){
		name = name.toLowerCase();
		var array = document.cookie.split(';');
		for(var i=0; i<array.length; i++){
			var pair  = array[i].split('=');
        	var key   = decodeURIComponent(pair[0].trim().toLowerCase());
        	var value = pair.length>1?pair[1]:'';
        	if(key == name)
            	return decodeURIComponent(value);
		}
		return null;
	},
	set : function(name, value){
    	var date = new Date();
    	date.setYear(date.getFullYear()+1);
    	var cookie = encodeURIComponent(name) + '=' + encodeURIComponent(value) + ';expires=' + date.toGMTString() + ';path=/';
    	document.cookie= cookie;
	},
	clear: function(name){
		Cookie.set(name, '');
	},
	remove: function(name){
		document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/';
	},
}
$(document).ready(function() {
	Cookie.init();
});